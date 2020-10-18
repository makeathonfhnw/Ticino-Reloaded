<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\ConvertService;

class ClassificationController extends Controller
{
    private ConvertService $convertService;

    public function __construct( ConvertService $convertService )
    {
        $this->convertService = $convertService;
    }

    public function classify( Request $request )
    {
        /*$xml = $request->ecgRecord->get();

        $reading = $this->convertService->convert( $xml );*/

        //dd( json_encode( $reading ) );
        $rand = rand ( 0 , 1 );

        return $rand;
    }
}
