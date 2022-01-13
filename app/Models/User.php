<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name','email','password','fk_Area','fk_Perfil',];
    protected $table = 'users';
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = ['password','remember_token',];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function area(){
        return $this-> belongsTo(Areas::class , 'fk_Area' );   // relacionamento 1 , 1
    }  

    public function ticket(){
        return $this-> hasMany(Ticket::class );   // relacionamento 1 , n
    }  
  
   // public function perfil(){
    //    return $this-> hasOne(Perfil::class , 'fk_Perfil');   // relacionamento 1 , 1
    //}  

 
}
