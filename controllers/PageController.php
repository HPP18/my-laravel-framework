<?php
namespace controllers;

use core\App;

class PageController
{
    public function index()
    {
        $tasks = App::get("database")->selectAll("tasks");
        $users = App::get("database")->selectAll("users");
        view("index",[
            "users"=>$users,
            "tasks"=>$tasks
        ]);
    }
    public function about()
    {
        view("about");
    }
    public function contact()
    {
        view("contact");
    }
    public function createUser()
    {
        App::get("database")->insert([
            'name'=> request('name')
        ], "users");
//        header("Location: /");
        redirect("/");
    }
    public function edit()
    {
//        $id = App::get("database")->findId(request('id'),"users");
        view("edit");
    }
    public function editUser()
    {
        App::get("database")->update(
            [
                'name'=> request('editname')
            ],
            request('id'),
            "users"
        );
        redirect("/");
    }
    public function deleteUser()
    {
        App::get("database")->delete(request('id'),"users");
        redirect("/");
    }
}