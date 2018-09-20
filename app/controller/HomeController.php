<?php

class HomeController extends Controller
{
    public function index()
    {
        View::render('admin.admin',[1,2]);
    }
}