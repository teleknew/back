<?php
namespace Controllers;

use Core\Controller;
use Core\User;
use Models\Page\One;

class PageOneController extends Controller{

    public function saveListAction()
    {
        switch($this->request['method'])
        {
            case "POST":

                /*$User = new User();
                $UserInfo = $User->getUserParams();*/

                $Result = ((new One())->saveList($this->request['body']/*,$UserInfo*/));

                // if($Result['Result'] === true)
                // {
                //   $this->return($Result);
                // }
                // else
                // {
                //   $this->return($Result,404);
                // }

                $this->return($Result);

                break;

            /*case "GET":

                $Result = ((new One())->saveList($this->request['params']));
                if($Result['Result'] === true)
                {
                    $this->return($Result,200);
                }
                else
                {
                    $this->return($Result,404);
                }

                break;*/

        }

    }
}
