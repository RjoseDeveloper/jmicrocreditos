<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Credito",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="valor",
 *          description="valor",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="idcliente",
 *          description="idcliente",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="nr_max_pag",
 *          description="nr_max_pag",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="idtipocredito",
 *          description="idtipocredito",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="idestado",
 *          description="idestado",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="data_emprestimo",
 *          description="data_emprestimo",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="data_pagamento",
 *          description="data_pagamento",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="deleted_at",
 *          description="deleted_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Credito extends Model
{
    use SoftDeletes;

    public $table = 'creditos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'valor',
        'idcliente',
        'nr_max_pag',
        'idtipocredito',
        'idestado',
        'data_emprestimo',
        'data_pagamento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'valor' => 'integer',
        'idcliente' => 'integer',
        'nr_max_pag' => 'integer',
        'idtipocredito' => 'integer',
        'idestado' => 'integer',
        'data_emprestimo' => 'date',
        'data_pagamento' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'valor' => 'required',
        'idcliente' => 'required',
        'nr_max_pag' => 'required',
        'idtipocredito' => 'required',
        'idestado' => 'required',
        'data_emprestimo' => 'required',
        'data_pagamento' => 'required'
    ];

    public function creditopenhor()
    {
        return $this->belongsTo(Creditopenhor::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
