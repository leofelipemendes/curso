<?php

namespace CodeProject\Http\Controllers;

use CodeProject\Repositories\ProjectNoteRepository;
use CodeProject\Services\ProjectNoteServices;
use Illuminate\Http\Request;
use CodeProject\Http\Requests;


class ProjectNoteController extends Controller
{

    /**
     * @var ProjectNoteRepository
     */
    private $rep;

    /**
     * @var ProjectNoteServices
     */
    private $service;

    public function __construct(ProjectNoteRepository $repository,ProjectNoteServices $service)
    {
        $this->rep = $repository;
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id)
    {
        return $this->rep->findWhere(['project_id' => $id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        return $this->service->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id,$noteid)
    {
        return $this->rep->findWhere(['project_id' => $id,'id' => $noteid]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        return $this->service->update($request->all(),$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        return $this->rep->delete($id);
    }
}
