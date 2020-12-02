<?php


namespace app\controller;


use app\BaseController;
use think\facade\View;
class Banner extends BaseController
{
    public function index(){
        return View::fetch();
    }
}