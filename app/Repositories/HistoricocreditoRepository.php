<?php

namespace App\Repositories;

use App\Models\Historicocredito;
use App\Repositories\BaseRepository;

/**
 * Class HistoricocreditoRepository
 * @package App\Repositories
 * @version July 12, 2019, 3:11 pm UTC
*/

class HistoricocreditoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_credito',
        'modopagamento',
        'ordem',
        'valorpago'
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
        return Historicocredito::class;
    }
}
