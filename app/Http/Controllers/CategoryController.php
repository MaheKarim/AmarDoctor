<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    //
    public  function  view()
    {
        $data = [ ];
        $data ['categories'] =  Category::all();
        return view('backend.category.category_view', $data);
    }

    public  function  delete($id)
    {
        $data = [ ];
        $data['categories'] = Category::find($id);
        $data['categories']->delete();
        session()->flash('success','Category Deleted Successfully!');
        return redirect(route('showCategory'));
    }
}
