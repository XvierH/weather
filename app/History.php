<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
	protected $table = 'tbl_history';

    protected $fillable = [
        'ciudad', 'temperatura'
    ];
}
