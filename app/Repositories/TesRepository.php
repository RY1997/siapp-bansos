<?php

namespace App\Repositories;

use App\Models\Tes;
use App\Repositories\BaseRepository;

/**
 * Class TesRepository
 * @package App\Repositories
 * @version October 26, 2023, 1:48 am UTC
*/

class TesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'select'
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
        return Tes::class;
    }
}
