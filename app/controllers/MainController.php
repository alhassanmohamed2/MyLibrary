<?php

namespace App\Controllers;

use App\Core\App;

class MainController
{

    public function index()
    {
        $bookData= App::get('database')->selectAll('booksData');
        return view("index",["bookData" => $bookData]);
    }
    public function update(){
        App::get('database')->update(
            "booksData",
           [ 'pageNum' =>$_POST['pageNum'],
           'bookPart' => $_POST['bookPart'],
           'completed' => $_POST['completed']
        ],
          ['id' => $_POST['id']]
        );
        redirect("");

    }
}