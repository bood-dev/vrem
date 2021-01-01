<?php

namespace App\Models\Checklist;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'chapter',
        'chapter_level',
        'section',
        'section_level',
        'description',
        'description_level',
        'is_security_level_1',
        'is_security_level_2',
        'is_security_level_3',
        'testing_procedures',
        'cwe',
        'cwe_link',
    ];
}
