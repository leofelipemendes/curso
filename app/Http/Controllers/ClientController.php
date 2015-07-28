<?php

namespace CodeProject\Http\Controllers;

use CodeProject\Entities\Client;
use CodeProject\Repositories\ClientRepository;
use CodeProject\Repositories\ClientRepositoryEloquent;
use Illuminate\Http\Request;

use CodeProject\Http\Requests;
use CodeProject\Http\Controllers\Controller;

class ClientController extends Controller
{
    /**
     * @var ClientRepository
     */
    private $rep;

    public function __construct(ClientRepository $repository)
    {
        $this->rep = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */


    public function index()
    {
        return $this->rep->all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response

    public function create()
    {
        //
    }
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        return $this->rep->create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return $this->rep->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response

    public function edit($id)
    {
        //
    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {

        $cli = $this->rep->find($id);
        $request = $request->all();
        $cli->name = $request['name'];
        $cli->responsible = $request['responsible'];
        $cli->email = $request['email'];
        $cli->phone = $request['phone'];
        $cli->address = $request['address'];
        $cli->obs = $request['obs'];
        if($cli->save()){
            return "Client updated successfully";
        }
        return "oh oh !!! Something is wrong in you data!";

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $cli = Client::destroy($id);

    }
}
