<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ProductStoreRequest;

use App\Family;
use App\Category;
use App\Units;
use App\Product;

class ProductController extends Controller
{
      protected $product_image = NULL;
      protected $product_image_to_be_deleted = '';
      /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function index()
      {
        return view('product.index');
      }

      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create()
      {
        $families = Family::lists('name','id');
        $categories = Category::lists('name','id');
        $units = Units::lists('name','id');
        return view('product.create')
          ->with('families',$families)
          ->with('categories',$categories)
          ->with('units',$units);
      }

      public function callCategory(Request $request)
      {
        if($request->ajax()){
          $categories = \DB::table('categories')->where('family_id',$request->family)->get();
          foreach ($categories as $key) {
            $results[] = "<option value=".$key->id.">".$key->name."</option>";
          }
          return response()->json($results);
        }
      }

      /**
       * Store a newly created resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\Response
       */
      public function store(Request $request)
      {
        if($request->hasFile('image')){
          $this->upload_process($request);
        }
        $product = new Product;
        $product->name = $request->name;
        $product->image = $this->product_image;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->minimum_stock = $request->minimum_stock;
        $product->amount = $request->price;
        $product->family_id = $request->family_id;
        $product->category_id = $request->category_id;
        $product->unit_id = $request->unit_id;
        $product->creator = \Auth::user()->id;
        $product->deleted = 0;
        $product->save();
        return redirect('product')
          ->with('successMessage', 'Product has been added');
      }

      protected function upload_process(Request $request){
        $upload_directory = public_path().'/img/products/';
        $extension = $request->file('image')->getClientOriginalExtension();
        $product_image_to_be_inserted = time().'.'.$extension;
        $this->product_image = $product_image_to_be_inserted;
        $save_image = \Image::make($request->image)->save($upload_directory.$product_image_to_be_inserted);
        //make the thumbnail
        $thumbnail = \Image::make($request->image)->resize(171,180)->save($upload_directory.'thumb_'.$this->product_image);
        //free the memory
        $save_image->destroy();
      }

      /**
       * Display the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function show($id)
      {
          //
      }

      /**
       * Show the form for editing the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function edit($id)
      {

      }

      /**
       * Update the specified resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function update(Request $request, $id)
      {

      }

      /**
       * Remove the specified resource from storage.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function destroy($id)
      {
          //
      }
}
