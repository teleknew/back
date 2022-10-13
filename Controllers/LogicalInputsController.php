<?php
namespace Controllers;

use Core\Controller;
use Core\User;
use Models\LogicalInputs;

class LogicalInputsController extends Controller{

    public function loadListAction()
    {
        switch($this->request['method'])
        {
            case "POST":

                /*$User = new User();
                $UserInfo = $User->getUserParams();*/

                $Result = ((new LogicalInputs())->loadList($this->request['body']/*,$UserInfo*/));

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

    public function createStreamAction()
    {
        switch($this->request['method'])
        {
            case "POST":

                /*$User = new User();
                $UserInfo = $User->getUserParams();*/

                $Result = ((new LogicalInputs())->createStream($this->request['body']/*,$UserInfo*/));

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

    public function loadProgramsAction()
    {
        switch($this->request['method'])
        {
            case "POST":

                /*$User = new User();
                $UserInfo = $User->getUserParams();*/

                $Result = ((new LogicalInputs())->loadPrograms($this->request['body']/*,$UserInfo*/));

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
