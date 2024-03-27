<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function createCategory ()
    {
        if(Auth::user()){
            if(Auth::user()->role == 1){
                return view ('backend.admin.category.create');
            }
        }
    }

    public function storeCategory (Request $request)
    {
        if(Auth::user()){
            if(Auth::user()->role == 1){
                $category = new Category();

                $category->name = $request->name;
                $category->slug = Str::slug($request->name);

                if(isset($request->image)){
                    $imageName = rand().'-category-'.'.'.$request->image->extension();
                    $request->image->move('backend/images/category/',$imageName);

                    $category->image = $imageName;

                }

                $category->save();
                return redirect()->back();
            }
        }
    }
}
