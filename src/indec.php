<?php

namespace ManuReta\indec;

const VERSION = '0.1-beta';

class indec{

	static function getVersion(){
		return self::VERSION;
	}
/**
     * SubriArchivo.
     *
     * @param  Request  $request
     * @param  string  $id
     * @return Response
     */
	static function SubirArchivo(Request $request, $id){
		$input = $request->all();
		Route::get('/', function () {
			return $input;
		});
	}
}
