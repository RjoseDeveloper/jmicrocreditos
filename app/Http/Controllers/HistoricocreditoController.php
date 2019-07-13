<?php

namespace App\Http\Controllers;

use App\DataTables\HistoricocreditoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateHistoricocreditoRequest;
use App\Http\Requests\UpdateHistoricocreditoRequest;
use App\Repositories\HistoricocreditoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class HistoricocreditoController extends AppBaseController
{
    /** @var  HistoricocreditoRepository */
    private $historicocreditoRepository;

    public function __construct(HistoricocreditoRepository $historicocreditoRepo)
    {
        $this->historicocreditoRepository = $historicocreditoRepo;
    }

    /**
     * Display a listing of the Historicocredito.
     *
     * @param HistoricocreditoDataTable $historicocreditoDataTable
     * @return Response
     */
    public function index(HistoricocreditoDataTable $historicocreditoDataTable)
    {
        return $historicocreditoDataTable->render('historicocreditos.index');
    }

    /**
     * Show the form for creating a new Historicocredito.
     *
     * @return Response
     */
    public function create()
    {
        return view('historicocreditos.create');
    }

    /**
     * Store a newly created Historicocredito in storage.
     *
     * @param CreateHistoricocreditoRequest $request
     *
     * @return Response
     */
    public function store(CreateHistoricocreditoRequest $request)
    {
        $input = $request->all();

        $historicocredito = $this->historicocreditoRepository->create($input);

        Flash::success('Historicocredito saved successfully.');

        return redirect(route('historicocreditos.index'));
    }

    /**
     * Display the specified Historicocredito.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $historicocredito = $this->historicocreditoRepository->find($id);

        if (empty($historicocredito)) {
            Flash::error('Historicocredito not found');

            return redirect(route('historicocreditos.index'));
        }

        return view('historicocreditos.show')->with('historicocredito', $historicocredito);
    }

    /**
     * Show the form for editing the specified Historicocredito.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $historicocredito = $this->historicocreditoRepository->find($id);

        if (empty($historicocredito)) {
            Flash::error('Historicocredito not found');

            return redirect(route('historicocreditos.index'));
        }

        return view('historicocreditos.edit')->with('historicocredito', $historicocredito);
    }

    /**
     * Update the specified Historicocredito in storage.
     *
     * @param  int              $id
     * @param UpdateHistoricocreditoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHistoricocreditoRequest $request)
    {
        $historicocredito = $this->historicocreditoRepository->find($id);

        if (empty($historicocredito)) {
            Flash::error('Historicocredito not found');

            return redirect(route('historicocreditos.index'));
        }

        $historicocredito = $this->historicocreditoRepository->update($request->all(), $id);

        Flash::success('Historicocredito updated successfully.');

        return redirect(route('historicocreditos.index'));
    }

    /**
     * Remove the specified Historicocredito from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $historicocredito = $this->historicocreditoRepository->find($id);

        if (empty($historicocredito)) {
            Flash::error('Historicocredito not found');

            return redirect(route('historicocreditos.index'));
        }

        $this->historicocreditoRepository->delete($id);

        Flash::success('Historicocredito deleted successfully.');

        return redirect(route('historicocreditos.index'));
    }
}
