<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Review;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    // code start
    public function addReview()
    {
        return view('backend.review._add_review');
    }

<<<<<<< HEAD
    public function reviewcreate(Request $request)
    {
      $image = '';

      if($request->has('reviewer_image'))
      {
        $image = $request->file('reviewer_image')->store('reviewer_images');
      }

      // code...
      $reviews = new Review();
      $reviews->reviewer_name = $request->reviewer_name;
      $reviews->reviewer_designation = $request->reviewer_designation;
      $reviews->reviewer_review = $request->reviewer_review;
      $reviews->reviewer_image =  $image;
      $reviews->save();

      session()->flash('success','Review Create');

      return redirect()->back();
=======
    public function createReview(Request $request)
    {
        $this->request()->validate(array(
            'reviewer_name' => 'required',
            'reviewer_designation' => 'required',
            'reviewer_review' => 'required',
            'reviewer_image' => 'required',
        ));
        $image = '';
        if($request->has('reviewer_image'))
        {
            $image = $request->file('reviewer_image')->store('reviewer_images');
        }
        $reviews = new Review();
        $reviews->reviewer_name = $request->reviewer_name;
        $reviews->reviewer_designation = $request->reviewer_designation;
        $reviews->reviewer_review = $request->reviewer_review;
        $reviews->reviewer_image = $image;
        $reviews->save();

        session()->flash('message','Review Create Successfully!');

        return redirect()->back();

>>>>>>> d0893104129efc7d151ed0678ed6f32dccd66713
    }
}
