<?php


namespace app;


abstract class  controller
{

    abstract protected function getAction();
    abstract protected function postAction();

    public function notFoundAction() {
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        if ($routes[1]=='post')
            $this->postAction();
        elseif ($routes[1]=='get')
            $this->getAction();
        else
            print('something');
    }
}
