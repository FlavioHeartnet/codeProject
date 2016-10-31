<?php

namespace codeProject\Http\Controllers;

use codeProject\Repositories\ClientRepository;
use codeProject\Services\ClientService;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
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

        try {
            return $this->repository->find($id);

        } catch (ModelNotFoundException $e) {
            return ['error'=>true, 'Cliente não encontrado.'];
        } catch (\Exception $e) {
            return ['error'=>true, 'Ocorreu algum erro ao proucurar o Cliente.'];
        }
    }
    
    public function destroy($id)
    {

        try {
            $this->repository->find($id)->delete();
            return ['success'=>true, 'Cliente deletado com sucesso!'];
        } catch (QueryException $e) {
            return ['error'=>true, 'Cliente não pode ser apagado pois existe um ou mais projetos vinculados a ele.'];
        } catch (ModelNotFoundException $e) {
            return ['error'=>true, 'Cliente não encontrado.'];
        } catch (\Exception $e) {
            return ['error'=>true, 'Ocorreu algum erro ao excluir o Cliente.'];
        }
        
    }

    public function edit(Request $request, $id){


        try {
            $this->service->find($id)->update($request->all());
            return ['success' => true, 'Cliente editado com sucesso!'];
        } catch (ModelNotFoundException $e) {
            return ['error'=>true, 'Cliente não encontrado.'];
        } catch (\Exception $e) {
            return ['error'=>true, 'Ocorreu algum erro ao editar o Cliente.'];
        }

    }
    
}
