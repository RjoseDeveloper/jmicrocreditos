<?php

namespace App\Http\Controllers;

use App\DataTables\CreditopenhorDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCreditopenhorRequest;
use App\Http\Requests\UpdateCreditopenhorRequest;
use App\Repositories\CreditopenhorRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CreditopenhorController extends AppBaseController
{
    /** @var  CreditopenhorRepository */
    private $creditopenhorRepository;

    public function __construct(CreditopenhorRepository $creditopenhorRepo)
    {
        $this->creditopenhorRepository = $creditopenhorRepo;
    }

    /**
     * Display a listing of the Creditopenhor.
     *
     * @param CreditopenhorDataTable $creditopenhorDataTable
     * @return Response
     */
    public function index(CreditopenhorDataTable $creditopenhorDataTable)
    {
        return $creditopenhorDataTable->render('creditopenhors.index');
    }

    /**
     * Show the form for creating a new Creditopenhor.
     *
     * @return Response
     */
    public function create()
    {
        return view('creditopenhors.create');
    }

    /**
     * Store a newly created Creditopenhor in storage.
     *
     * @param CreateCreditopenhorRequest $request
     *
     * @return Response
     */
    public function store(CreateCreditopenhorRequest $request)
    {
        $input = $request->all();

        $creditopenhor = $this->creditopenhorRepository->create($input);

        Flash::success('Creditopenhor saved successfully.');

        return redirect(route('creditopenhors.index'));
    }

    /**
     * Display the specified Creditopenhor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $creditopenhor = $this->creditopenhorRepository->find($id);

        if (empty($creditopenhor)) {
            Flash::error('Creditopenhor not found');

            return redirect(route('creditopenhors.index'));
        }

        return view('creditopenhors.show')->with('creditopenhor', $creditopenhor);
    }

    /**
     * Show the form for editing the specified Creditopenhor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $creditopenhor = $this->creditopenhorRepository->find($id);

        if (empty($creditopenhor)) {
            Flash::error('Creditopenhor not found');

            return redirect(route('creditopenhors.index'));
        }

        return view('creditopenhors.edit')->with('creditopenhor', $creditopenhor);
    }

    /**
     * Update the specified Creditopenhor in storage.
     *
     * @param  int              $id
     * @param UpdateCreditopenhorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCreditopenhorRequest $request)
    {
        $creditopenhor = $this->creditopenhorRepository->find($id);

        if (empty($creditopenhor)) {
            Flash::error('Creditopenhor not found');

            return redirect(route('creditopenhors.index'));
        }

        $creditopenhor = $this->creditopenhorRepository->update($request->all(), $id);

        Flash::success('Creditopenhor updated successfully.');

        return redirect(route('creditopenhors.index'));
    }

    /**
     * Remove the specified Creditopenhor from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $creditopenhor = $this->creditopenhorRepository->find($id);

        if (empty($creditopenhor)) {
            Flash::error('Creditopenhor not found');

            return redirect(route('creditopenhors.index'));
        }

        $this->creditopenhorRepository->delete($id);

        Flash::success('Creditopenhor deleted successfully.');

        return redirect(route('creditopenhors.index'));
    }
}
