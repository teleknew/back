<?php
namespace Controllers;

use Core\Controller;
use Core\User;
use Models\LogicalOutputs;

class LogicalOutputsController extends Controller{

    public function loadListAction()
    {
        switch($this->request['method'])
        {
            case "POST":

                /*$User = new User();
                $UserInfo = $User->getUserParams();*/

                $Result = ((new LogicalOutputs())->loadList($this->request['body']/*,$UserInfo*/));

                $this->return($Result);

                break;
        }

    }

    public function createOutputStreamAction()
    {
        switch ($this->request['method']) {
            case "POST":

                /*$User = new User();
                $UserInfo = $User->getUserParams();*/

                $Result = ((new LogicalOutputs())->createOutputStream($this->request['body']/*,$UserInfo*/));

                $this->return($Result);

                break;

        }
    }

    public function viewModelAction()
    {
        switch ($this->request['method']) {
            case "POST":

                /*$User = new User();
                $UserInfo = $User->getUserParams();*/

                $Result = ((new LogicalOutputs())->viewModel($this->request['body']/*,$UserInfo*/));

                $this->return($Result);

                break;

        }
    }


    public function addInputDevice_ModelRemuxerAction()
    {
        switch($this->request['method'])
        {
            case "POST":

                /*$User = new User();
                $UserInfo = $User->getUserParams();*/

                $Result = ((new LogicalOutputs())->addInputDevice_ModelRemuxer($this->request['body']/*,$UserInfo*/));

                $this->return($Result);

                break;

        }

    }

    public function editStreamAction()
    {
        switch($this->request['method'])
        {
            case "POST":

                /*$User = new User();
                $UserInfo = $User->getUserParams();*/

                $Result = ((new LogicalOutputs())->editStream($this->request['body']/*,$UserInfo*/));

                $this->return($Result);

                break;
        }

    }

    public function deleteStreamAction()
    {
        switch($this->request['method'])
        {
            case "POST":

                /*$User = new User();
                $UserInfo = $User->getUserParams();*/

                $Result = ((new LogicalOutputs())->deleteStream($this->request['body']/*,$UserInfo*/));

                $this->return($Result);

                break;

        }

    }

    public function loadProgramsAction()
    {
        switch($this->request['method'])
        {
            case "POST":

                /*$User = new User();
                $UserInfo = $User->getUserParams();*/

                $Result = ((new LogicalOutputs())->loadPrograms($this->request['body']/*,$UserInfo*/));

                $this->return($Result);

                break;

        }

    }
}
