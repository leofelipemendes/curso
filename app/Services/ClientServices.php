<?php
/**
 * Created by PhpStorm.
 * User: Leo
 * Date: 01/08/2015
 * Time: 23:04
 */

namespace CodeProject\Services;


use CodeProject\Repositories\ClientRepository;
use CodeProject\Validators\ClientValidator;
use Prettus\Validator\Exceptions\ValidatorException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ClientServices
{
    /**
     * @var ClientRepository
     */
    private $repository;
    /**
     * @var ClientValidator
     */
    private $validator;

    public function __construct(ClientRepository $repository,ClientValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function create(array $data)
    {
        /**
         * aqui v?o as regras
         * mandar email
         * disparar notifica??o
         * postar um tweet
         */
        try{
            $this->validator->with($data)->passesOrFail();
            return $this->repository->create($data);

        }catch (ValidatorException $e){
            return [
                'error'=> true,
                'message' => $e->getMessage()
            ];
        }

    }

    public function show($id){
        try{
            return [
                "success" => $this->repository->find($id)
            ];
        } catch(ModelNotFoundException $e) {
            return [
                "success" => false,
                "message" => "Projeto ID: {$id} inexistente!"
            ];
        }
    }

    public function update(array $data,$id)
    {
        try{
            $this->validator->with($data)->passesOrFail();
            return $this->repository->update($data,$id);
        }catch (ValidatorException $e){
            return [
                'error'=> true,
                'message' => $e->getMessage()
            ];
        }
    }

    public function delete($id)
    {
        try
        {
            return ["success" => $this->repository->delete($id)];
        } catch(ModelNotFoundException $e){
            return [
                'success' => false,
                'message' => 'Cliente n�o encontrado!',
            ];
        }
    }

}