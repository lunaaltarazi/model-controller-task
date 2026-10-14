<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    Public function index(){
        return product::query()->get();
    }

    public function show(int $id){
        return product::query()->where('id',$id)->get();
    }

    public function store(ProductStoreRequest $request){
        product::query()->create($request->validated());
    }

    public function update(int $id){
        Product::query()->where('id',$id)->update([
            "name"=>"luna"
        ]);
    }

    public function destroy(int $id){
        product::query()->where('id',$id)->delete();

    }

}
