<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class AdminCategoriesController extends Controller
{
    public function index()
    {
        $category = category::latest()->get();
        return view('admin.categories', ['category' => $category]);
        // return $product;
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $category = new category();
        $category->cate_name = request('cate_name');
        $category->save();
        return redirect("/admin/categories");
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        if (request()->ajax()) {
            $data = category::findOrFail($id);
            return response()->json(['data' => $data]);
        }
    }


    public function update(Request $request, $id)
    {
        $category = category::find($id);
        $category->cate_name = request('cate_name');
        $category->save();
        return redirect("/admin/categories");
    }


    public function destroy($id)
    {
        $category = category::find($id);
        $category->delete($id);
        return redirect("/admin/categories");
    }
}
