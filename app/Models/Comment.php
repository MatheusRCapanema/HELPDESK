<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{   
    protected $table = 'ticket_history';
    use HasFactory;

    protected $fillable = ['id', 'Mensagem','fk_status','fk_anexos','fk_usuario','fk_ticket' ];
    protected $hidden = [];
    use HasFactory;
}
