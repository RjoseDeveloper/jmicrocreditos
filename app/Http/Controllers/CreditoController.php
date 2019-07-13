<?php

namespace App\Http\Controllers;

use App\DataTables\CreditoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCreditoRequest;
use App\Http\Requests\UpdateCreditoRequest;
use App\Models\Creditonegocio;
use App\Models\Creditopenhor;
use App\Models\Historicocredito;
use App\Repositories\CreditoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Input;
use Response;

class CreditoController extends AppBaseController
{
    /** @var  CreditoRepository */
    private $creditoRepository;

    public function __construct(CreditoRepository $creditoRepo)
    {
        $this->creditoRepository = $creditoRepo;
    }

    /**
     * Display a listing of the Credito.
     *
     * @param CreditoDataTable $creditoDataTable
     * @return Response
     */
    public function index(CreditoDataTable $creditoDataTable)
    {
        return $creditoDataTable->render('creditos.index');
    }

    /**
     * Show the form for creating a new Credito.
     *
     * @return Response
     */
    public function create()
    {
        return view('creditos.create');
    }

    /**
     * Store a newly created Credito in storage.
     *
     * @param CreateCreditoRequest $request
     *
     * @return Response
     */
    public function store(CreateCreditoRequest $request)
    {
        $input = $request->all();

        $credito = $this->creditoRepository->create($input);
        switch ($credito->idtipocredito){
            case 2:
                $creditonegocio = new Creditonegocio;
                $creditonegocio->id_credito = $credito->id;
                $creditonegocio->testemunha1 = Input::get('testemunha1');
                $creditonegocio->testemunha2 = Input::get('testemunha2');
                $creditonegocio->bem = Input::get('bempenhor');
                $creditonegocio->urldeclaracao = Input::get('decbairro');
                $creditonegocio->save();
                break;
            case 3:
                $creditopenhor = new Creditopenhor;
                $creditopenhor->id_credito = $credito->id;
                $creditopenhor->urlimovel = Input::get('urldecimovel');
                $creditopenhor->urldecpenhor = Input::get('urldeclaracobairro');
                $creditopenhor->save();
                break;
        }
        $this->criarhistorico($credito);

        Flash::success('Credito adicionado com sucesso.');

        return redirect(route('creditos.index'));
    }

    /**
     * Display the specified Credito.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $credito = $this->creditoRepository->find($id);

        if (empty($credito)) {
            Flash::error('Credito not found');

            return redirect(route('creditos.index'));
        }

        return view('creditos.show')->with('credito', $credito);
    }

    /**
     * Show the form for editing the specified Credito.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $credito = $this->creditoRepository->find($id);

        if (empty($credito)) {
            Flash::error('Credito not found');

            return redirect(route('creditos.index'));
        }

        return view('creditos.edit')->with('credito', $credito);
    }

    /**
     * Update the specified Credito in storage.
     *
     * @param  int              $id
     * @param UpdateCreditoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCreditoRequest $request)
    {
        $credito = $this->creditoRepository->find($id);

        if (empty($credito)) {
            Flash::error('Credito not found');

            return redirect(route('creditos.index'));
        }

        $credito = $this->creditoRepository->update($request->all(), $id);

        Flash::success('Credito updated successfully.');

        return redirect(route('creditos.index'));
    }

    /**
     * Remove the specified Credito from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $credito = $this->creditoRepository->find($id);

        if (empty($credito)) {
            Flash::error('Credito not found');

            return redirect(route('creditos.index'));
        }

        $this->creditoRepository->delete($id);

        Flash::success('Credito deleted successfully.');

        return redirect(route('creditos.index'));
    }

//    esta funcao cria 4 ou 3 registros na tabela historico, sempr que se adicionar um credito
    public function criarhistorico($credito)
    {
        for ($i=0;$i<4;$i++){
            $historico = new Historicocredito;
            $historico->id_credito = $credito->id;
            $historico->modopagamento = 1;
            $historico->ordem = $i+1;
            $historico->valorpago = 200;
            $historico->save();
        }
    }
}
