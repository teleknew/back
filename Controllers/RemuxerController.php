<?php
namespace Controllers;

use Core\Controller;
use Core\User;
use Models\Inform;

class RemuxerController extends Controller{

    public function inputDevicesAction()
    {
        switch($this->request['method'])
        {
            case "GET":

                /*$User = new User();
                $UserInfo = $User->getUserParams();*/

                $Result = ((new Inform())->printInputDeviceList($this->request['param']/*,$UserInfo*/));

                $this->return($Result);

                break;
        }

    }

    public function outputDevicesAction()
    {
        switch($this->request['method'])
        {
            case "GET":

                /*$User = new User();
                $UserInfo = $User->getUserParams();*/

                $Result = ((new Inform())->printOutputDeviceList($this->request['param']/*,$UserInfo*/));

                $this->return($Result);

                break;
        }

    }

    public function getListGraphAction()
    {
        switch($this->request['method'])
        {
            case "GET":

                /*$User = new User();
                $UserInfo = $User->getUserParams();*/

                $Result = ((new Inform())->getListGraph($this->request['param']/*,$UserInfo*/));

                $this->return($Result);

                break;
        }

    }

    public function getGraphInputDeviceListAction()
    {
        switch($this->request['method'])
        {
            case "POST":

                /*$User = new User();
                $UserInfo = $User->getUserParams();*/

                $Result = ((new Inform())->getGraphInputDeviceList($this->request['body']/*,$UserInfo*/));

                $this->return($Result);

                break;
        }

    }

    public function getGraphInputDeviceProgramListAction()
    {
        switch($this->request['method'])
        {
            case "POST":

                /*$User = new User();
                $UserInfo = $User->getUserParams();*/

                $Result = ((new Inform())->getGraphInputDeviceProgramList($this->request['body']/*,$UserInfo*/));

                $this->return($Result);

                break;
        }

    }

    public function getGraphOutputDeviceListAction()
    {
        switch($this->request['method'])
        {
            case "POST":

                /*$User = new User();
                $UserInfo = $User->getUserParams();*/

                $Result = ((new Inform())->getGraphOutputDeviceList($this->request['body']/*,$UserInfo*/));

                $this->return($Result);

                break;
        }

    }
}
