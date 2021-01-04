<?php
namespace App\Http\Controllers;
class GetData{
    private $data;
    function getData(){
        return $this->data;
    }
    function setData($data){
        $this->data=$data;
    }
}