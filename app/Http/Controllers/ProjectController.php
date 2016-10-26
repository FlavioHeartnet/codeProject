<?php

namespace codeProject\Http\Controllers;


use codeProject\Repositories\ProjectRepository;
use codeProject\Services\ProjectService;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    private $repository;
    /**
     * @var ProjectService
     * */
    private $service;

    public function __construct(ProjectRepository $repository, ProjectService $service)
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
