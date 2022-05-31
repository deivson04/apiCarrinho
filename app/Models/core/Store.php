<?php

namespace App\Models\core;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $table = 'stores';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name_fantasya', 
            'cnpj', 
            'street', 
            'number', 
            'complement',
            'city',
            'state',
            'cellphone',
            'site',
            'mail' 
    ];
}    