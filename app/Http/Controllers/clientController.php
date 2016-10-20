<?php

namespace codeProject\Http\Controllers;

use codeProject\Entities\Client;
use codeProject\Repositories\ClientRepositoryEloquent;
use Illuminate\Http\Request;

use codeProject\Http\Requests;

class clientController extends Controller
{
    
    public function index(ClientRepositoryEloquent $repository){

        return $repository->all();
        
    }

    public function store(Request $request)
    {

        return Client::create($request->all());

    }

    public function show($id)
    {

        return Client::find($id);
    }
    
    public function destroy($id)
    {
        
        return Client::find($id)->delete();
        
    }

    public function edit(Request $request, $id){

        return Client::find($id)->update($request->all());

    }
    
}
