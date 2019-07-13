<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Creditopenhor",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="urlimovel",
 *          description="urlimovel",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="urldecpenhor",
 *          description="urldecpenhor",
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
class Creditopenhor extends Model
{
    use SoftDeletes;

    public $table = 'creditopenhors';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'urlimovel',
        'urldecpenhor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_credito' => 'integer',
        'urlimovel' => 'string',
        'urldecpenhor' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_credito' => 'required',
        'urlimovel' => 'required',
        'urldecpenhor' => 'required'
    ];

    public function credito()
    {
        return $this->hasMany(Credito::class);
    }
}
