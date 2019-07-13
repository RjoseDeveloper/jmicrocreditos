<?php

namespace App\Repositories;

use App\Models\Creditonegocio;
use App\Repositories\BaseRepository;

/**
 * Class CreditonegocioRepository
 * @package App\Repositories
 * @version July 10, 2019, 10:22 pm UTC
*/

class CreditonegocioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'testemunha1',
        'id_credito',
        'testemunha2',
        'bem',
        'urldeclaracao'
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
        return Creditonegocio::class;
    }
}
