<?php

namespace App\Repositories\Admin;

use App\Models\Admin\TeamInfo;
use App\Repositories\BaseRepository;

class TeamInfoRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'intro',
        'image'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return TeamInfo::class;
    }
}
