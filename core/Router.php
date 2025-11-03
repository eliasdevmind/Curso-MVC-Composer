<?php

namespace core;

class Router
{

        private $controllers = "Site";
        private $method = "index";
        private $param = [];

        public function __construct()
        {

                $router = $this->url();
                echo "<pre>";
                print_r($router);

        }

        private function url()
        {
                $parse_url = explode("/", filter_input(INPUT_GET, "router", FILTER_SANITIZE_URL));
                return $parse_url;               

        }
    
}