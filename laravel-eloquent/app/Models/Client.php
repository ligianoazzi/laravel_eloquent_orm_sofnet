<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	const TYPE_INDIVIDUAL = "individual"; // pessoal fisica em ingles
	const TYPE_LEGAL = "legal"; // cliente pessoa jurídica em ingles

	const MARITAL_STATUS = [
		1 => 'Solteiro',
		2 => 'Casado',
		3 => 'Divorciado'
	];

	protected $fillable = [
		'name',
		'document_number',
		'email',
		'phone',
		'defaulter',
		'date_birth',
		'sex',
		'marital_status',
		'physical_disability',
		'company_name',
		'client_type',
	];


	// mapeando o relacionamento entre cliente e time
	public function soccerTeam(){ // many-to-one
		return $this->belongsTo(SoccerTeam::class);
	}
	// se a tabela referente a esta model ( tabela clients), tivesse 


}
