<?php
namespace app\index\controller;

class Weixin extends Base
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return $this->label_fetch('index/weixin');
    }

    public function test()
    {

    }

}
