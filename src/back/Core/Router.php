<?php
namespace Core;

use Core\Controller;
use Helpers\Helpers;
//use Auth\Auth;
//use Auth\AuthFactory;

//require_once($_SERVER['DOCUMENT_ROOT'].'/back/Helpers/Helpers.php');


class Router
{
    /**
     * @var Auth
     */
    private $auth = null;
    protected $url = '';
    protected $routes = [];
    protected $params = [];

    public function __construct()
    {
        //   Load Routes   //
        //$this->url = trim($_SERVER['REQUEST_URI'], '/');
        $this->url = 'api/pageOne/save';
        $this->routes = require 'conf/routes.php';
    }

    /**
     * Проверка пути
     */
    public function match(): bool
    {
        foreach ($this->routes as $route => $params) {
            $isMatched = false;
            switch ($params['pathType'] ?? 0) {
                // Only path
                case 0:
                    $isMatched = preg_match('#^' . $route . '$#', $this->url);
                    break;
                // With get params - (\?.*)?
                case 1:
                    $isMatched = preg_match('#^' . $route . '(\?.*)?$#', $this->url);
                    break;
                // With sub-pach - ([\/\?].*)?
                case 2:
                    $isMatched = preg_match('#^' . $route . '([\/\?].*)?$#', $this->url);
                    break;
                // All after - .*
                case 3:
                    $isMatched = preg_match('#^' . $route . '.*$#', $this->url);
                    break;
            }
            if ($isMatched) {
                $this->params = $params;
                return true;
            }
        }
        //No path found. Lets try to find canonical controller and action
        $path_params = explode("/", rtrim($this->url, "/"));
        list($action_name,) = explode("?", array_pop($path_params));
        $action_name = lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $action_name))));
        array_shift($path_params);
        $controller_path =  "Controllers\\" . join("\\", array_map(function ($elem) {
                return str_replace(' ', '', ucwords(str_replace('_', ' ', $elem)));
            }, $path_params)) . "Controller";

        if (class_exists($controller_path) && method_exists($controller_path, $action_name . "Action")) {
            $this->params = [
                'controller' => $controller_path,
                'action'     => $action_name,
                'pathType'   => 1,
                'auth'       => true
            ];
            return true;
        }
        return false;
    }

    /**
     * Старт
     */
    public function run()
    {
        if ($this->match()) {

            /*//   Init Authorization   //
            if($this->params['auth_provider'])
                $this->auth = AuthFactory::createAuth(null, $this->params['auth_provider']);
            else
                $this->auth = AuthFactory::createAuth();
            // Authorization //
            if (!array_key_exists("auth", $this->params) || $this->params['auth'] === true) {
                $this->auth->check();
            }*/

            // Load controller //
            $project_path = 'Controllers\\' . ucfirst($this->params['controller']) . 'Controller';
            $native_path = $this->params['controller'];

            //Helpers::get_pr($project_path);
            //Helpers::get_pr($native_path);
            //Helpers::get_pr($this->params);



            $path = class_exists($project_path) ? $project_path : (class_exists($native_path) ? $native_path : false);


            if ($path !== false) {
                $action = $this->params['action'] . 'Action';
                if (method_exists($path, $action)) {
                    $controller = new $path($this->params, $this->auth);
                    $controller->$action();
                } else {
                    Controller::return('No action: ' . $action, 404, false);
                }
            } else {
                Controller::return('No controller: ' . $project_path . ' OR ' . $native_path, 404, false);
            }
        } else if (@$_ENV['DEV_USE_MOCKS'] == true) {
            $mock_path = explode('?', $this->url, 2);
            $mock_path = stream_resolve_include_path("mocks/{$_SERVER['REQUEST_METHOD']}/{$mock_path[0]}.json");
            if ($mock_path && file_exists($mock_path))
                Controller::return(file_get_contents($mock_path), 200, false);
            else
                Controller::return('No route: ' . $this->url, 404, false);
        } else {
            Controller::return('No route: ' . $this->url, 404, false);
        }
    }
}
