<?php

namespace App\Repositories;

use App\Models\Tramite;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TramiteRepository
 * @package App\Repositories
 * @version July 23, 2018, 9:10 pm UTC
 *
 * @method Tramite findWithoutFail($id, $columns = ['*'])
 * @method Tramite find($id, $columns = ['*'])
 * @method Tramite first($columns = ['*'])
*/
class TramiteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_persona',
        'cod_documento',
        'fecha',
        'estado'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tramite::class;
    }
}
