<?php
namespace Controllers;

use Core\Controller;
use Core\User;
use Models\ItemsEditing;

class ItemsEditingController extends Controller{

    public function createGraphAction()
    {
        switch($this->request['method'])
        {
            case "POST":

                /*$User = new User();
                $UserInfo = $User->getUserParams();*/

                $Result = ((new ItemsEditing())->createGraph($this->request['body']/*,$UserInfo*/));

                $this->return($Result);

                break;
        }
    }

    public function deleteGraphAction()
    {
        switch($this->request['method'])
        {
            case "POST":

                /*$User = new User();
                $UserInfo = $User->getUserParams();*/

                $Result = ((new ItemsEditing())->deleteGraph($this->request['body']/*,$UserInfo*/));

                $this->return($Result);

                break;
        }
    }

    public function addInputRawToGraphAction()
    {
        switch($this->request['method'])
        {
            case "POST":

                /*$User = new User();
                $UserInfo = $User->getUserParams();*/

                $Result = ((new ItemsEditing())->addInputRawToGraph($this->request['body']/*,$UserInfo*/));

                $this->return($Result);

                break;
        }
    }

    public function addOutputRawToGraphAction()
    {
        switch($this->request['method'])
        {
            case "POST":

                /*$User = new User();
                $UserInfo = $User->getUserParams();*/

                $Result = ((new ItemsEditing())->addOutputRawToGraph($this->request['body']/*,$UserInfo*/));

                $this->return($Result);

                break;
        }
    }

    /**
     * @throws \Exception
     */
    public function deleteInputDeviceFromGraphAction()
    {
        switch($this->request['method'])
        {
            case "POST":

                /*$User = new User();
                $UserInfo = $User->getUserParams();*/

                $Result = ((new ItemsEditing())->deleteInputDeviceFromGraph($this->request['body']/*,$UserInfo*/));

                $this->return($Result);

                break;
        }
    }

    /**
     * @throws \Exception
     */
    public function startGraphAction()
    {
        switch($this->request['method'])
        {
            case "POST":

                /*$User = new User();
                $UserInfo = $User->getUserParams();*/

                $Result = ((new ItemsEditing())->startGraph($this->request['body']/*,$UserInfo*/));

                $this->return($Result);

                break;
        }
    }

    /**
     * @throws \Exception
     */
    public function stopGraphAction()
    {
        switch($this->request['method'])
        {
            case "POST":

                /*$User = new User();
                $UserInfo = $User->getUserParams();*/

                $Result = ((new ItemsEditing())->stopGraph($this->request['body']/*,$UserInfo*/));

                $this->return($Result);

                break;
        }
    }

    /**
     * @throws \Exception
     */
    public function loadModelRemuxerAction()
    {
        switch($this->request['method'])
        {
            case "POST":

                /*$User = new User();
                $UserInfo = $User->getUserParams();*/

                $Result = ((new ItemsEditing())->loadModelRemuxer($this->request['body']/*,$UserInfo*/));

                $this->return($Result);

                break;
        }
    }

    /**
     * @throws \Exception
     */
    public function loadMultiModelRemuxerAction()
    {
        switch($this->request['method'])
        {
            case "POST":

                /*$User = new User();
                $UserInfo = $User->getUserParams();*/

                $Result = ((new ItemsEditing())->loadMultiModelRemuxer($this->request['body']/*,$UserInfo*/));

                $this->return($Result);

                break;
        }
    }

}
