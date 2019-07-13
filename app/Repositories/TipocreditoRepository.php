<?php

namespace App\Repositories;

use App\Models\Tipocredito;
use App\Repositories\BaseRepository;

/**
 * Class TipocreditoRepository
 * @package App\Repositories
 * @version July 11, 2019, 11:26 am UTC
*/

class TipocreditoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descricao',
        'pgto',
        'juro',
        'status'
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
        return Tipocredito::class;
    }
}
