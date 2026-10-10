<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookStoreRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

Public function index(){
return Book::query()->get();



}

public function store(BookStoreRequest $request){
Book::query()->create($request->validated());
}
Public function show(int $id){
return Book::query()->where('id',$id)->get();




}


public function update(int $id){
Book::query()->where('id',$id)->update([
    "title"=>'bahaa'

]);
}

public function destroy(int $id){
Book::query()->where('id',$id)->delete();
}
}
