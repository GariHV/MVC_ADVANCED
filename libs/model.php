<?php

class Model{
    function __construct()
    {
        $this->db = new Database();
        echo "entro en Model";
        print_r($this->db);
    }
}