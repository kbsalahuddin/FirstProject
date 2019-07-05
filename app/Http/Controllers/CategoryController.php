<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//for 1st and 2nd style
use App\Category;

//for 3rd style
//use DB;
//use App\Post;

class CategoryController extends Controller
{
    public function createCategory(){
      return view('admin.category.createCategory');
    }

    public function storeCategory(Request $request){
      $this->validate($request, [
        'categoryName'=>'required',
        'categoryDescription'=>'required',
      ]);
      //return $request->all();
      //1st way of storing form data into sql table
      $category=new Category();
      $category->categoryName= $request->categoryName; //req to cat passing value
      $category->categoryDescription= strip_tags($request->categoryDescription);
      $category->categoryStatus= $request->categoryStatus;
      $category-> save();
      /*return 'Category Info saved successfully!';*/

      //2nd style
      //Category::create($request->all());
      //return redirect->back();//after submission back to add category page
      return redirect ('/category/create-category')-> with('message', 'Category added successfully!') ;//anohter way

      //3rd Style
      /*DB::table('categories')->insert([
            'categoryName'        => $request-> categoryName,
            'categoryDescription' => $request-> categoryDescription,
            'categoryStatus'      => $request-> categoryStatus
        ]);
      return 'Category Info saved successfully!';*/
    }

    public function manageCategory(){
        $categories=Category::all();
        return view('admin.category.manageCategory',['categories'=>$categories]);
    }

    public function editCategory($id){
        //return $id;
        $categoryById=Category::where('id', $id)->first();
        return view('admin.category.editCategory', ['categoryById'=>$categoryById]);
    }//here catagoryByID matching db id col to $id value, if equal, takign all the value by first() and stroing it
    //after that  passing it to categoryByID array index so that edit page can show info.
    public function updateCategory(Request $request){
        //dd($request->all() );
        $category= Category::find($request->id);

        $category->categoryName=$request->categoryName;
        $category->categoryDescription=strip_tags($request->categoryDescription);
        $category->categoryStatus=$request->categoryStatus;
        $category->save();
        return redirect('/category/manage-category')->with('message','Category updated successfully');
    }
    public function deleteCategory($id){
      $category=Category::find($id);
      $category->delete();
      return redirect('/category/manage-category')->with('message','Category deleted successfully');
    }

}
