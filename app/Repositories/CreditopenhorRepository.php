<?php

namespace App\Repositories;

use App\Models\Creditopenhor;
use App\Repositories\BaseRepository;

/**
 * Class CreditopenhorRepository
 * @package App\Repositories
 * @version July 7, 2019, 12:47 pm UTC
*/

class CreditopenhorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'urlimovel',
        'urldecpenhor'
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
        return Creditopenhor::class;
    }
}
