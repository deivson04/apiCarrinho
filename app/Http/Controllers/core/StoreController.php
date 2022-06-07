<?php

namespace App\Http\Controllers\core;

use App\Http\Controllers\Controller;
use App\Models\core\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Store::all();

        return response()->json(['data'=> $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dessa forma esta indo buscar pelo request! 
        //$data = $request->all();
        //$data = $request->input('rua'); 
        
        $validation = \Validator::make($request->all(), [
            'number' => 'nullable|min:3'
        ]);

          if($validation->fails()){
              return response()->json([$validation->errors()], 422);
            };
        
        $data = $request->all();
        
        store::create($data);        
        
        return response()->json(['data' => $data]);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dados = $request->all();

        $data = store::findorFail($id);

        $data->update($dados);

        return response()->json(['msg'=> 'Dados atualizados com sucesso!', 'data'=> $data]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = store::find($id);
        
        $data->delete($data);
        
        return response()->json(['msg'=> 'Dados excluido com sucesso!', 'data'=> $data]);
    }
}
