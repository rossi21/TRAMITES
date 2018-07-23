<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tramite
 * @package App\Models
 * @version July 23, 2018, 9:10 pm UTC
 *
 * @property integer id_persona
 * @property integer cod_documento
 * @property string|\Carbon\Carbon fecha
 * @property string estado
 */
class Tramite extends Model
{
    use SoftDeletes;

    public $table = 'tramites';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_persona',
        'cod_documento',
        'fecha',
        'estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_persona' => 'integer',
        'cod_documento' => 'integer',
        'estado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
