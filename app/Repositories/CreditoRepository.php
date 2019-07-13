<?php

namespace App\Repositories;

use App\Models\Credito;
use App\Repositories\BaseRepository;

/**
 * Class CreditoRepository
 * @package App\Repositories
 * @version July 7, 2019, 11:59 am UTC
*/

class CreditoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'valor',
        'idcliente',
        'nr_max_pag',
        'idtipocredito',
        'idestado',
        'data_emprestimo',
        'data_pagamento'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Credito::class;
    }
}
