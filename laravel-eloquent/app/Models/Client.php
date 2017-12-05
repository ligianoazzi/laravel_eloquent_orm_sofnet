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
		'soccer_team_id'
	];
	// 'soccer_team_id' foi inserido na aula 5


	// mapeando o relacionamento entre cliente e time
	public function soccerTeam(){ // many-to-one
	
		return $this->belongsTo(SoccerTeam::class);
	
	}
	// se a tabela referente a esta model ( tabela clients), tivesse 
	// um time pode ter vários clientes
	// cada cliente em um time
	// cada cliente tem uma fk de time

	//um time pode está contido em vários clientes e um cliente obrigatoriamente tem um time





}
