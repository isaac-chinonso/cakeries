<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use App\Image;
use App\Order;
use App\Mail\UserOrderApproved;
use Mail;

class PostController extends Controller
{
    // Save Category
    public function savecategory(Request $request)
    {
        // Validation
        $this->validate($request, [
            'name' => 'required',
        ]);

        // Save Record into User DB
        $category = new Category();
        $category->name = $request->input('name');
        $category->status = 1;
        $category->save();

        \Session::flash('Success_message', 'You Have Successfully Added a Category');

        return back();
    }

    // Update Category function
    public function updatecategory(Request $request, $id)
    {
        $category = Category::find($id);
        // Validation
        $this->validate($request, array(
            'name' => 'required',
        ));

        $category = Category::find($id);

        $category->name = $request->input('name');

        $category->save();

        \Session::flash('Success_message', '✔ Category Updated Succeffully');

        return back();
    }

    public function deletecategory($id)
    {
        // Delete Category
        $category = Category::where('id', $id)->first();
        $category->delete();

        \Session::flash('Success_message', '✔ You Have Successfully Deleted Category');

        return back();
    }

    // Save product
    public function saveproduct(Request $request)
    {
        // Validation
        $this->validate($request, [
            'category_id' => 'required',
            'name' => 'required',
        ]);

        // Save Record into Product DB
        $product = new Product();
        $product->category_id = $request->input('category_id');
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->status = 1;
        $product->save();

        $image = $request['image'];
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $destination = public_path('upload/');
        $image->move($destination, $filename);

        // Save Record into image DB
        $image = new Image();
        $image->product_id = $product->id;
        $image->source = $filename;
        $image->save();

        \Session::flash('Success_message', 'You Have Successfully Added Product');

        return back();
    }

     // Update Products function
     public function updateproduct(Request $request, $id)
     {
         $product = Product::find($id);
         // Validation
         $this->validate($request, array(
             'category_id' => 'required',
             'name' => 'required',
         ));
 
         $product = Product::find($id);
 
         $product->category_id = $request->input('category_id');

         $product->name = $request->input('name');

         $product->description = $request->input('description');
 
         $product->save();
 
         \Session::flash('Success_message', '✔ Product Updated Succeffully');
 
         return back();
     }

    public function deleteproduct($id)
    {
        // Delete product
        $product = Product::where('id', $id)->first();
        $file_path = public_path() . '/upload/' . $product->image->first()->source;
        unlink($file_path);
        $product->delete();

        \Session::flash('Success_message', 'You Have Successfully Deleted product');

        return back();
    }

    public function activateproduct($id)
    {

        Product::where(['id' => $id])
            ->update(array('status' => 1));

        \Session::flash('Success_message', 'Activation Successfully');

        return back();
    }

    public function deactivateproduct($id)
    {

        Product::where(['id' => $id])
            ->update(array('status' => 0));

        \Session::flash('Success_message', 'Deactivation Successfully');

        return back();
    }

    public function setfeatured($id)
    {

        Product::where(['id' => $id])
            ->update(array('status' => 2));

        \Session::flash('Success_message', 'Product Successfully Set as Featured Product');

        return back();
    }

    public function acceptorder($id)
    {
        Order::where(['id' => $id])
            ->update(array('status' => 1));
        $orderapproval = Order::where('id', $id)->first();
        Mail::to($orderapproval->user->email)->send(new UserOrderApproved($orderapproval));
        \Session::flash('Success_message', 'Order Accepted Successfully');

        return back();
    }

    public function deleteorder($id)
    {
        // Delete order
        $order = Order::where('id', $id)->first();
        $order->delete();

        \Session::flash('Success_message', 'You Have Successfully Deleted Order');

        return back();
    }
}
