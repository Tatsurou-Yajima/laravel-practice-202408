<?php

namespace App\MyClasses;

class MyService implements MyServiceInterface
{
    private $msg;
    private $data;

    public function __construct()
    {
        $this->msg = 'Hello, This is MyService';
        $this->data = ['hello', 'welcome', 'bye'];
    }

    public function setId(int $id) {}

    public function say()
    {
        return $this->msg;
    }

    public function data(int $id)
    {
        return $this->data[$id];
    }

    public function setData() {}

    public function allData()
    {
        return $this->data;
    }
}
