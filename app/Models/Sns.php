<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sns extends Model
{
    protected $guarded = array('id');

    protected $table = 'snses';

    public static $rules = array(
        'text' => 'required | max:120',
    );
}
