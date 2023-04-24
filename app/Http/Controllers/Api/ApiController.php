<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Item;

class ApiController extends Controller
{
    public function getItem(){

        return response()->json(Item::get(), 200);
    }

    public function getItemById(int $id){

        return response()->json(Item::find($id), 200);
    }

    public function addItem(Request $request){

        $item = Item::create($request->all());
        return response()->json($item, 201);
    }

    public function editItem(Request $request, Item $item){
        
        $item->update($request->all());
        return response()->json($item, 200);
    }

    public function deleteItem(Request $request, Item $item){
        
        $item->delete();
        return response()->json('', 204);
    }
}
