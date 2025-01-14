<?php
    class api_logic{
        private $endpoint;
        private $params;

        public function __construct($endpoint, $params = null){
            $this->endpoint = $endpoint;
            $this->params = $params;
        }

        public function endpoint_exists(){
            return method_exists($this, $this->endpoint);
        }

        public function status(){

        }

        public function get_all_clients(){

        }
    }
?>