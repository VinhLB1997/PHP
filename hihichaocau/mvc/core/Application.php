<?php
class Application
{
    private $controller = "Home";
    private $action = "index";
    private $params = [];

    /*
     * __construct Application
     *
     */
    public function __construct()
    {
        // get url
        $arrUrl = $this->urlProcess();
        // handle url: get controller, action, param
        if (isset($arrUrl[0])) {
            if (file_exists("./mvc/controllers/" . $arrUrl['0'] . ".php")) {
                $this->controller = $arrUrl[0];
            }
            unset($arrUrl[0]);
        }

        require_once "./mvc/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;

        if (isset($arrUrl[1])) {
            if (method_exists($this->controller, $arrUrl[1])) {
                $this->action = $arrUrl[1];
            }
            unset($arrUrl[1]);
        }

        $this->params = (!empty($arrUrl)) ? $arrUrl : [];
        // decision controller and action that will run
        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    /*
     * Get url website
     *
     */
    private function urlProcess()
    {
        if (isset($_GET["url"])) {
            $url = $_GET["url"];
            return explode("/", $url);
        }
    }
}
