<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class TeamInfo extends Model
{
    public $table = 'team_infos';

    public $fillable = [
        'name',
        'intro',
        'image'
    ];

    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'intro' => 'string',
        'image' => 'json'
    ];

    public static array $rules = [
        'name' => 'nullable',
        'intro' => 'nullable',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
    ];


}
