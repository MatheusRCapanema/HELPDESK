<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    
    protected $table = 'empresas';
    protected $fillable = ['CNPJ', 'Nome', 'Email'];
    use HasFactory;

    public function areas(){
            return $this->hasMany(Areas::class);

    }
    

}
