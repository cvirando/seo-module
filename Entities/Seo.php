<?php

/**
 * Made by CV. IRANDO
 * https://irando.co.id ©2023
 * info@irando.co.id
 */

namespace Modules\Seo\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seo extends Model
{
    use HasFactory;

    protected $table = 'seos';

    protected $fillable = [
        'name',
        'photo',
        'tags',
        'description',
        'seoable_id',
        'seoable_type',
    ];

    public function seoable()
    {
       return $this->morphTo();
    }
}
