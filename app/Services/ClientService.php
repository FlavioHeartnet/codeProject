<?php

namespace codeProject\Services;
use codeProject\Repositories\ClientRepository;
use Prettus\Validator\Exceptions\ValidatorException;

class ClientService
{

    private $repository;
    /**
     * @var ClientService
     * */
    private $validator;


    public function __construct(ClientRepository $repository, ClientService $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function create(array $data)
    {
        try{

            $this->validator->with($data)->passesOrFail();
            return $this->repository->create($data);

        }catch (ValidatorException $e){

            return [
                'error'=>true,
                'message' => $e->getMessageBag()
            ];

        }

    }

    public function update(array $data, $id)
    {

        $this->repository->update($data, $id);

    }

}