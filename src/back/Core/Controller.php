<?php
namespace Core;

/**
 * Класс Controller
 */
abstract class Controller
{
    /**
     * @var Auth
     */
    protected $auth = null;
    protected $params = [];
    protected $request = null;

    /**
     * Инициализация контроллера
     * @param array $params Параметры пути
     * @param Auth $auth Экземпляр авторизации
     */
    public function __construct(array $params, $auth)
    {
        $this->params = $params;
        $this->auth = $auth;
        $this->request = [
            'params' => $_REQUEST,
            'uri' => explode('?', trim($_SERVER['REQUEST_URI'], '?'))[0],
            'method' => $this->method = $_SERVER['REQUEST_METHOD'],
            'body' => json_decode(file_get_contents('php://input'), true),
        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SERVER['HTTP_X_HTTP_METHOD'])) {
            $this->request['method'] = $_SERVER['HTTP_X_HTTP_METHOD'];
        }
    }

    /**
     * Згрузка модели
     * @param string $name Имя модели
     * @param ?string $dbConn Параметры соединения с БД
     */
    public function loadModel(string $name, ?string $dbConn = null): Model
    {
        $path = 'Models\\' . ucfirst($name);
        if (class_exists($path)) {
            return new $path($dbConn);
        }
    }

    /**
     * Возврат ответа
     * @param mixed $data Возвращаемый объект
     * @param int $code Статус ответа
     * @param bool $json Ответ в формате Json
     */
    public static function return($data, int $code = 200, bool $json = true)
    {
        http_response_code($code);
        if ($json) {
            header('content-type: application/json; charset=UTF-8');
            echo json_encode($data, JSON_UNESCAPED_UNICODE);
        } else {
            echo $data;
        }
        exit;
    }
}
