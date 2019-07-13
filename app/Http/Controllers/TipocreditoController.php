<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\DataTables\TipocreditoDataTable;
use App\Http\Requests\CreateTipocreditoRequest;
use App\Http\Requests\UpdateTipocreditoRequest;
use App\Repositories\TipocreditoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TipocreditoController extends AppBaseController
{
    /** @var  TipocreditoRepository */
    private $tipocreditoRepository;

    public function __construct(TipocreditoRepository $tipocreditoRepo)
    {
        $this->tipocreditoRepository = $tipocreditoRepo;
    }

    /**
     * Display a listing of the Tipocredito.
     *
     * @param TipocreditoDataTable $tipocreditoDataTable
     * @return Response
     */
    public function index(TipocreditoDataTable $tipocreditoDataTable)
    {
        return $tipocreditoDataTable->render('tipocreditos.index');
    }

    /**
     * Show the form for creating a new Tipocredito.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipocreditos.create');
    }

    /**
     * Store a newly created Tipocredito in storage.
     *
     * @param CreateTipocreditoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipocreditoRequest $request)
    {
        $input = $request->all();

        $tipocredito = $this->tipocreditoRepository->create($input);

        Flash::success('Tipocredito saved successfully.');

        return redirect(route('tipocreditos.index'));
    }

    /**
     * Display the specified Tipocredito.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipocredito = $this->tipocreditoRepository->find($id);

        if (empty($tipocredito)) {
            Flash::error('Tipocredito not found');

            return redirect(route('tipocreditos.index'));
        }

        return view('tipocreditos.show')->with('tipocredito', $tipocredito);
    }

    public function idjson()
    {
        $id = 1;
        $tipocredito = $this->tipocreditoRepository->find($id);

        if (empty($tipocredito)) {
            Flash::error('Tipocredito not found');

            return redirect(route('tipocreditos.index'));
        }

        return view('juros');
    }

    /**
     * Show the form for editing the specified Tipocredito.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipocredito = $this->tipocreditoRepository->find($id);

        if (empty($tipocredito)) {
            Flash::error('Tipocredito not found');

            return redirect(route('tipocreditos.index'));
        }

        return view('tipocreditos.edit')->with('tipocredito', $tipocredito);
    }

    /**
     * Update the specified Tipocredito in storage.
     *
     * @param  int              $id
     * @param UpdateTipocreditoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipocreditoRequest $request)
    {
        $tipocredito = $this->tipocreditoRepository->find($id);

        if (empty($tipocredito)) {
            Flash::error('Tipocredito not found');

            return redirect(route('tipocreditos.index'));
        }

        $tipocredito = $this->tipocreditoRepository->update($request->all(), $id);

        Flash::success('Tipocredito updated successfully.');

        return redirect(route('tipocreditos.index'));
    }

    /**
     * Remove the specified Tipocredito from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipocredito = $this->tipocreditoRepository->find($id);

        if (empty($tipocredito)) {
            Flash::error('Tipocredito not found');

            return redirect(route('tipocreditos.index'));
        }

        $this->tipocreditoRepository->delete($id);

        Flash::success('Tipocredito deleted successfully.');

        return redirect(route('tipocreditos.index'));
    }
}
