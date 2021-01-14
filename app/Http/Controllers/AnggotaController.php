<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAnggotaRequest;
use App\Http\Requests\UpdateAnggotaRequest;
use App\Repositories\AnggotaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use GuzzleHttp\Client;

class AnggotaController extends AppBaseController
{
    /** @var  AnggotaRepository */

    public function __construct()
    {
    }

    /**
     * Display a listing of the Anggota.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $client = new Client();
        $response = $client->request('GET', 'http://localhost:5000/api/anggota', [
            'headers' => [
            ],
        ]);
        $anggotas = json_decode($response->getBody()->getContents());        

        return view('anggotas.index')
            ->with('anggotas', $anggotas);
    }

    /**
     * Show the form for creating a new Anggota.
     *
     * @return Response
     */
    public function create()
    {
        return view('anggotas.create');
    }

    /**
     * Store a newly created Anggota in storage.
     *
     * @param CreateAnggotaRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $client = new Client();
        $response = $client->post('http://localhost:5000/api/anggota', [
            'json' => $input,
        ]);
        $anggotas = json_decode($response->getBody()->getContents());

        Flash::success('Anggota saved successfully.');

        return redirect(route('anggotas.index'));
    }

    /**
     * Display the specified Anggota.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $client = new Client();
        $response = $client->request('GET', 'http://localhost:5000/api/anggota/'. $id, [
            'headers' => [],
        ]);
        $anggota = json_decode($response->getBody()->getContents());        

        return view('anggotas.show')->with('anggota', $anggota);
    }

    /**
     * Show the form for editing the specified Anggota.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $client = new Client();
        $response = $client->request('GET', 'http://localhost:5000/api/anggota/'. $id, [
            'headers' => [],
        ]);
        $anggota = json_decode($response->getBody()->getContents());  

        return view('anggotas.edit')->with('anggota', $anggota);
    }

    /**
     * Update the specified Anggota in storage.
     *
     * @param int $id
     * @param UpdateAnggotaRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $input = $request->all();
        $client = new Client();
        $response = $client->put('http://localhost:5000/api/anggota/'. $id, [
            'json' => $input,
        ]);
        $anggotas = json_decode($response->getBody()->getContents());
        
        Flash::success('Anggota updated successfully.');

        return redirect(route('anggotas.index'));
    }

    /**
     * Remove the specified Anggota from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $client = new Client();
        $response = $client->delete('http://localhost:5000/api/anggota/'. $id, [
            'json' => [],
        ]);
        $anggotas = json_decode($response->getBody()->getContents());

        Flash::success('Anggota deleted successfully.');

        return redirect(route('anggotas.index'));
    }
}
