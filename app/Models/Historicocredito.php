<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Historicocredito",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="id_credito",
 *          description="id_credito",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="modopagamento",
 *          description="modopagamento",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="ordem",
 *          description="ordem",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="valorpago",
 *          description="valorpago",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="deleted_at",
 *          description="deleted_at",
 *          type="string",
 *          format="date-time"
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
 *      )
 * )
 */
class Historicocredito extends Model
{
    use SoftDeletes;

    public $table = 'historicocreditos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_credito',
        'modopagamento',
        'ordem',
        'valorpago'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_credito' => 'integer',
        'modopagamento' => 'integer',
        'ordem' => 'integer',
        'valorpago' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_credito' => 'required',
        'modopagamento' => 'required',
        'ordem' => 'required',
        'valorpago' => 'required'
    ];

    
}
