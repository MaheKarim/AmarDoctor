<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // code start
    public function addReview()
    {
        return view('backend.review._add_review');
    }
}
