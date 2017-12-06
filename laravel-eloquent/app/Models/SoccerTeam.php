<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SoccerTeam extends Model
{
    protected $fillable = [
    	'name'
    ];


    //one-to-many
    // o nome no plural ja indica que o relacionamento é 1 x N
    public function clients(){
    	return $this->hasMany( Client::class );
    }

}
