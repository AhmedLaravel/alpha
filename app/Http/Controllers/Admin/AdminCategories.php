<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Category_description;

use Illuminate\Http\Request;
use Storage;

class AdminCategories extends Controller
{
    public function viewCategories(){ //............... Start Function To View Categories Table .............\\
        $title = trans('admin.categoriesTitle');
        $titleSummary = trans('admin.categoriesTitleSummary');
        $categories = Category::orderBy('category_id','desc')->get();
        $categoriesDesc = Category_description::orderBy('category_description_id','desc')->get();
        return view('Admin.category.adminCategoriesTable',['categories'=>$categories,'title'=>$title, 'titleSummary'=>$titleSummary, 'categoriesDesc'=>$categoriesDesc]);
    }//............... End Function To View Categories Table .............\\

    public function viewCreateCategory(){//............... Start Function To View Categories Create Pages .............\\
        $title= trans('admin.createCategoryTitle');
        $categories = Category::orderBy('category_id','desc')->get();
        return view('Admin.category.adminCreateCategory',['categories'=>$categories,'title'=>$title]);
    }//............... End Function To View Categories Create Pages .............\\


    public function storeCategory(Request $request){//............... Start Function To Store Category  .............\\
        $rules = [
            'category_name' =>'required|array|min:2',
            'category_name.*' =>'required|string|distinct|min:2',
            'category_hint' =>'required|array|min:2',
            'category_hint.*' =>'required|string|distinct|min:2',
        ];
        $niceName = [
            'category_name' =>trans('admin.categoryName'),
            'category_hint' =>trans('admin.hint'),
        ];
        $desc = $this->validate(request(),$rules,[],$niceName);
        $rulesCat = [
            'category_image' =>'sometimes|nullable|'.imageValidation(),
        ];
        $niceNameCat = [
            'category_image' =>trans('admin.categoryImage'),
        ];
        $category = $this->validate(request(),$rulesCat,[],$niceNameCat);

        if(request()->hasfile('category_image')){
            $category['category_image'] = up()->upload(
                [
                    'new_name'=>'',
                    'file'=>'category_image',
                    'upload_type'=>'single',
                    'path'=>'category',
                    'delete_file'=>"",
                ]
            );
        }
        Category::create($category);
        $cat = Category::orderBy('category_id','desc')->first();
        if(!empty($request->parent_id)) {
            $desc['parent_id'] = request('parent_id');
        }else{
            $desc['parent_id'] = 0;
        }
        for($i = 1; $i <=2; $i++ ){
            \DB::table('category_descriptions')->where('language_id',$i)->insert([
                "category_name"=>$request['category_name'][$i],
                "category_hint"=>$request['category_hint'][$i],
                'category_id'=>$cat->category_id,
                'language_id'=>$i,
                'parent_id' =>$desc['parent_id']
            ]);
        }


        $message = trans('admin.categoryCreatedSuccess');
        return redirect()->back()->with('success', $message);

    }//............... End Function To Store Category .............\\

    public function DeleteCategory(Request $request){//............... Start Function To Delete Category .............\\
        $id = $request->category_id;
        $descs = Category_description::where('category_description_id',$id)->get();
        foreach($descs as $desc ){
            $desc->delete();
        }

        $cat = Category::find($id);
        storage::delete($cat->category_image);
        $cat->delete();

        $message = trans('admin.deleteCatSuccess');
        return redirect()->back()->with('success', $message);
    }//............... End Function To Delete Category .............\\
}
