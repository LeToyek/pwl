<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index()
    {
        return "category page";
    }

    public function marbel_edu_games()
{
        return "Marbel Edu Games page";
    }

    public function marbel_and_friends_kids_games()
    {
        return "Marbel and Friends Kids Games page";
    }

    public function riri_story_books()
    {
        return "Riri Story Books page";
    }

    public function kolak_kids_songs()
    {
        return "Kolak Kids Songs page";
    }
}
