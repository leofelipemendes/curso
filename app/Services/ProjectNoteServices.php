<?php
/**
 * Created by PhpStorm.
 * User: Leo
 * Date: 14/08/2015
 * Time: 21:59
 */

namespace CodeProject\Services;


use CodeProject\Repositories\ProjectNoteRepository;
use CodeProject\Validators\ProjectNoteValidator;
use Prettus\Validator\Exceptions\ValidatorException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProjectNoteServices
{
    /**
     * @var ProjectNoteRepository
     */
    private $repository;
    /**
     * @var ProjectNoteValidator
     */
    private $validator;

    public function __construct(ProjectNoteRepository $repository,ProjectNoteValidator $validator)
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


}