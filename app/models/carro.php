<?php 
class Carro extends Eloquent { //Todos los modelos deben extender la clase Eloquent
    protected $table = 'carros';
    protected $fillable = array('modelo', 'placa', 'ano');
    $input = array(
        'modelo' =>'Honda Civic',
        'placa' => 'HFU 88J',
        'ano' => 2010
        );
 
	 // Equivalente a 
	// INSERT INTO `carros`(`id`, `modelo`, `placa`, `ano`, `created_at`, `updated_at`) 
	// VALUES (NULL, 'Honda Civic','HFU 88J',2010 , NOW(), NOW())
	Carro::create($input);
 
	
	// Equivalente a 
	// SELECT * FROM `carros` WHERE 1
	$carros = Carro::all( );
	 
	foreach( $carros as $carro){
	    echo $carro->modelo;
	}


	/*
	// Equivalente a 
	// SELECT modelo, placa FROM `carros` WHERE 1
	$carros = Carro::all( array('modelo', 'placa' ));
 
	foreach( $carros as $carro){
		    echo $carro->modelo;
		}
	*/		 
	 

}