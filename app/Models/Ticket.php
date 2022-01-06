<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public $timestamps = false;
    protected $table = 'ticket';
    use HasFactory;

    protected $fillable = ['Assunto', 'Problema', 'fk_Usu_Solicitante'];
    protected $hidden = [];
}
