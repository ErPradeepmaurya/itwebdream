<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RajasthanRequest extends Model
{
    protected $fillable = [
        'name',
        'email',
        'mobile_number',
        'company',
        'project_type',
        'project_details',
        'ip_address',
        'location'
    ];
}
