<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    
    protected $table = 'areas';
    protected $fillable = ['id', 'Nome_area', 'telefone', 'fk_CNPJ'];
    use HasFactory;


    public function empresa(){
        return $this-> belongsTo(Empresa::class,'FK_CNPJ' );   // relacionamento 1 , 1
    }                   
    
    public function user(){
        return $this-> hasOne(User::class );   // relacionamento 1 , 1
    }        
    

}
