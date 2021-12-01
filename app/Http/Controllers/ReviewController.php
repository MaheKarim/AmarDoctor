<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class ReviewController extends Controller
{
    // code start
    public function addReview()
    {
        return view('backend.review._add_review');
    }

    public function reviewcreate(Request $request)
    {
      $image = '';

      if($request->has('reviewer_image'))
      {
        $image = $request->file('reviewer_image')->store('reviewer_images');
      }

      // code...
      $reviews = new Review();
      $reviews->fill($request->all());
      $reviews->reviewer_image =  $image;
      $reviews->save();

      session()->flash('success','Review Create Succesfully');

      return redirect()->back();

    }
    public function showReview()
    {
      $reviews = Review::all();

      return view('backend.review.show_review', compact('reviews'));
    }
}
