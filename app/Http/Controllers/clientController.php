<?php

namespace codeProject\Http\Controllers;

use codeProject\Repositories\ClientRepository;
use codeProject\Services\ClientService;
use Illuminate\Http\Request;

class clientController extends Controller
{

    private $repository;
    /**
     * @var ClientService
     * */
    private $service;

    public function __construct(ClientRepository $repository, ClientService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }


    public function index(){

        return $this->repository->all();
        
    }

    public function store(Request $request)
    {

        return $this->service->create($request->all());

    }

    public function show($id)
    {

        return $this->repository->find($id);
    }
    
    public function destroy($id)
    {
        
        return $this->repository->find($id)->delete();
        
    }

    public function edit(Request $request, $id){

        return $this->service->find($id)->update($request->all());

    }
    
}
