<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class areas extends Model
{
    public $timestamps = false;
    protected $table = 'areas';
    use HasFactory;

    protected $fillable = ['id', 'Nome_area' , 'telefone' , 'fk_CNPJ' , 'fk_CNPJ'];
    protected $hidden = [];

    

}
