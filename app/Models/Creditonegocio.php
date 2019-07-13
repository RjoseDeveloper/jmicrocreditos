<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Creditonegocio",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="testemunha1",
 *          description="testemunha1",
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
 *          property="testemunha2",
 *          description="testemunha2",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="bem",
 *          description="bem",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="urldeclaracao",
 *          description="urldeclaracao",
 *          type="string"
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
class Creditonegocio extends Model
{
    use SoftDeletes;

    public $table = 'creditonegocios';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'testemunha1',
        'id_credito',
        'testemunha2',
        'bem',
        'urldeclaracao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'testemunha1' => 'integer',
        'id_credito' => 'integer',
        'testemunha2' => 'integer',
        'bem' => 'string',
        'urldeclaracao' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'testemunha1' => 'required',
        'id_credito' => 'required',
        'testemunha2' => 'required',
        'bem' => 'required',
        'urldeclaracao' => 'required'
    ];

    
}
