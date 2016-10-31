<?php

namespace codeProject\Http\Controllers;


use codeProject\Repositories\ProjectRepository;
use codeProject\Services\ProjectService;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
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

        try {
           return $this->repository->find($id);

        }catch (ModelNotFoundException $e) {
            return ['error'=>true, 'Projeto não encontrado.'];
        } catch (\Exception $e) {
            return ['error'=>true, 'Existe um erro neste projeto.'];
        }
    }
    
    public function destroy($id)
    {

        try {
        $this->repository->find($id)->delete();
        return ['success'=>true, 'Projeto deletado com sucesso!'];
    } catch (QueryException $e) {
        return ['error'=>true, 'Projeto não pode ser apagado pois existe um ou mais clientes vinculados a ele.'];
    } catch (ModelNotFoundException $e) {
        return ['error'=>true, 'Projeto não encontrado.'];
    } catch (\Exception $e) {
        return ['error'=>true, 'Ocorreu algum erro ao excluir o projeto.'];
    }
        
    }

    public function edit(Request $request, $id){

        try {
            $this->service->find($id)->update($request->all());;
            return ['success'=>true, 'Projeto editado com sucesso!'];
        } catch (QueryException $e) {
            return ['error'=>true, 'Existe uma restrição neste item, não possivel edita-lo.'];
        } catch (ModelNotFoundException $e) {
            return ['error'=>true, 'Projeto não encontrado.'];
        } catch (\Exception $e) {
            return ['error'=>true, 'Ocorreu algum erro ao editar o projeto.'];
        }

    }
    
}
