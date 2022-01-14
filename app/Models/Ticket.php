<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public $timestamps = false;
    protected $table = 'ticket';
    use HasFactory;

    protected $fillable = ['id', 'Assunto', 'Problema', 'fk_Usu_Solicitante', 'fk_Prioridade', 'fk_status', 'fk_anexo', 'fk_Area_Atendente'];
    protected $hidden = [];

    public function user(){
        return $this-> belongsTo(User::class, 'fk_Usu_Solicitante');   // relacionamento 1 , 1
    }  

    public function area(){
        return $this-> belongsTo(Areas::class , 'fk_Area_Atendente' );   // relacionamento 1 , 1
    }  

}
