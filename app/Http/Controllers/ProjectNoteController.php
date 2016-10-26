<?php

namespace codeProject\Http\Controllers;


use codeProject\Repositories\ProjectNoteRepository;
use codeProject\Services\ProjectNoteService;
use Illuminate\Http\Request;

class ProjectNoteController extends Controller
{

    private $repository;
    /**
     * @var ProjectNoteService
     * */
    private $service;

    public function __construct(ProjectNoteRepository $repository, ProjectNoteService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }


    public function index($id){

        return $this->repository->findWhere(['project_id' => $id]);
        
    }

    public function store(Request $request)
    {

        return $this->service->create($request->all());

    }

    public function show($id,$noteid)
    {

        return $this->repository->findWhere(['project_id'=>$id, 'id'=> $noteid]);
    }
    
    public function destroy($id, $noteid)
    {
        
        return $this->repository->find($noteid)->delete();
        
    }

    public function edit(Request $request, $id,$noteid){

        return $this->service->find($noteid)->update($request->all());

    }
    
}
