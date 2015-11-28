<?php namespace Leelam\Boilerplate\Http\Controllers;


class BoilerplateController extends BaseController{

    public function index()
    {
        return view('boilerplate::boilerplates.index');
    }

}