<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public $timestamps = false;
    protected $table = 'ticket';
    use HasFactory;

    protected $fillable = ['Assunto', 'Problema'];
    protected $hidden = ['fk_Usu_Solicitante'];
}
