<?php

namespace App\Http\Controllers;

use App\DataTables\CreditonegocioDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCreditonegocioRequest;
use App\Http\Requests\UpdateCreditonegocioRequest;
use App\Repositories\CreditonegocioRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CreditonegocioController extends AppBaseController
{
    /** @var  CreditonegocioRepository */
    private $creditonegocioRepository;

    public function __construct(CreditonegocioRepository $creditonegocioRepo)
    {
        $this->creditonegocioRepository = $creditonegocioRepo;
    }

    /**
     * Display a listing of the Creditonegocio.
     *
     * @param CreditonegocioDataTable $creditonegocioDataTable
     * @return Response
     */
    public function index(CreditonegocioDataTable $creditonegocioDataTable)
    {
        return $creditonegocioDataTable->render('creditonegocios.index');
    }

    /**
     * Show the form for creating a new Creditonegocio.
     *
     * @return Response
     */
    public function create()
    {
        return view('creditonegocios.create');
    }

    /**
     * Store a newly created Creditonegocio in storage.
     *
     * @param CreateCreditonegocioRequest $request
     *
     * @return Response
     */
    public function store(CreateCreditonegocioRequest $request)
    {
        $input = $request->all();

        $creditonegocio = $this->creditonegocioRepository->create($input);

        Flash::success('Creditonegocio saved successfully.');

        return redirect(route('creditonegocios.index'));
    }

    /**
     * Display the specified Creditonegocio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $creditonegocio = $this->creditonegocioRepository->find($id);

        if (empty($creditonegocio)) {
            Flash::error('Creditonegocio not found');

            return redirect(route('creditonegocios.index'));
        }

        return view('creditonegocios.show')->with('creditonegocio', $creditonegocio);
    }

    /**
     * Show the form for editing the specified Creditonegocio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $creditonegocio = $this->creditonegocioRepository->find($id);

        if (empty($creditonegocio)) {
            Flash::error('Creditonegocio not found');

            return redirect(route('creditonegocios.index'));
        }

        return view('creditonegocios.edit')->with('creditonegocio', $creditonegocio);
    }

    /**
     * Update the specified Creditonegocio in storage.
     *
     * @param  int              $id
     * @param UpdateCreditonegocioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCreditonegocioRequest $request)
    {
        $creditonegocio = $this->creditonegocioRepository->find($id);

        if (empty($creditonegocio)) {
            Flash::error('Creditonegocio not found');

            return redirect(route('creditonegocios.index'));
        }

        $creditonegocio = $this->creditonegocioRepository->update($request->all(), $id);

        Flash::success('Creditonegocio updated successfully.');

        return redirect(route('creditonegocios.index'));
    }

    /**
     * Remove the specified Creditonegocio from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $creditonegocio = $this->creditonegocioRepository->find($id);

        if (empty($creditonegocio)) {
            Flash::error('Creditonegocio not found');

            return redirect(route('creditonegocios.index'));
        }

        $this->creditonegocioRepository->delete($id);

        Flash::success('Creditonegocio deleted successfully.');

        return redirect(route('creditonegocios.index'));
    }
}
