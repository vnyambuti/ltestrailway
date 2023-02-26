<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
       try {
          if (!$request->searchTerm) {
              return response()->json([
                  "success"=>false,
                  "error"=>"Earch term missing",
                   "code"=>400
              ]);
          } else {
              $term=$request->searchTerm;
           $modelClass='App\Models\\'.$request->model;
           $query=$modelClass::query();
           $fields=$modelClass::$searchable;
           foreach ($fields as $key => $field) {
              $query->orWhere($field,'LIKE','%'.$term.'%')->where('shop_id',$request->shop)->with('colours');
           }
           $result=$query->take(10)->get();
           return response()->json([
               'success'=>true,
               'payload'=>$result
           ]);

          }

       } catch (\Exception $th) {
          return response()->json([
              "success"=>false,
              "error"=>$th->getMessage(),
               "code"=>500
          ]);
       }
    }
}
