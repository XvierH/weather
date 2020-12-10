<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\ServiceWeather;
use GeneaLabs\LaravelMaps\Facades\Map;
use App\History;

class WeatherController extends Controller
{
    public function consultar(Request $request){

    	$this->title('Consultar');

    	return view('consulta.view');

    }

    public function guardar (ServiceWeather $service, Request $request){
    	
        $this->title('Consultar');

	    $weatherObject = json_decode($service->consultar($request->ciudad));
        $coodernadas =  $weatherObject->coord;
        $weather = $weatherObject->main;

        $config = array();
        $config['center'] = "{$coodernadas->lat}, {$coodernadas->lon}";

        Map::initialize($config);
        $marker = array();
        $marker['position'] = "{$coodernadas->lat}, {$coodernadas->lon}";
        Map::add_marker($marker);

        $map = Map::create_map();
        $data = array();
        $data = [
            'ciudad' => $request->ciudad,
            'temperatura' => ($weather->temp  - 273.15)
        ];

        $history =  History::create($data);

        return view('consulta.view',compact('map', 'weather'));

    }

    public function informe(){

        $this->title('Informe de Consultas');
        
        $history =  History::all();

        return view('consulta.informe',compact('history'));    	
    }
}
