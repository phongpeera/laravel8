<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Book::get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $filename = $request->file('image')->store('uploads', 'public');
            $requestData['image'] = asset('storage/'.$filename);
        }    
        $item = Book::create($requestData);
        return ["success" => true, "data" => $item];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Book::findOrFail($id);
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
        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $filename = $request->file('image')->store('uploads', 'public');
            $requestData['image'] = asset('storage/'.$filename);
        }    
        $item = Book::findOrFail($id);
        $success = $item->update($requestData);
        return ["success" => $success];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Book::findOrFail($id);
        $success = $item->delete();
        return ["success" => $success];
    }
}
