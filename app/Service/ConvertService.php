<?php

namespace App\Service;

use App\Models\ECGReading;

class ConvertService
{
    public function convert( $xmlString )
    {
        $xml = simplexml_load_string( $xmlString );

        $di = explode(' ', trim( $xml->di ));
        $dii = explode(' ', trim( $xml->dii ));
        $diii = explode(' ', trim( $xml->diii ));
        $avr = explode(' ', trim( $xml->avr ));
        $avf = explode(' ', trim( $xml->avf ));
        $avl = explode(' ', trim( $xml->avl ));
        $v1 = explode(' ', trim( $xml->v1 ));
        $v2 = explode(' ', trim( $xml->v2 ));
        $v3 = explode(' ', trim( $xml->v3 ));
        $v4 = explode(' ', trim( $xml->v4 ));
        $v5 = explode(' ', trim( $xml->v5 ));
        $v6 = explode(' ', trim( $xml->v6 ));

        $reading = new ECGReading();
        $reading->id_exam = get_object_vars($xml->id_exam)[0];
        $reading->identification_subject = get_object_vars($xml->identification_subject)[0];
        $reading->visitname = get_object_vars($xml->visitname)[0];
        $reading->recording_timestamp = get_object_vars($xml->recording_timestamp)[0];
        $reading->heartrate = get_object_vars($xml->heartrate)[0];
        $reading->prduration = get_object_vars($xml->prduration)[0];
        $reading->qrsduration = get_object_vars($xml->qrsduration)[0];
        $reading->qtduration = get_object_vars($xml->qtduration)[0];
        $reading->qtcbduration = get_object_vars($xml->qtcbduration)[0];
        $reading->qtcfduration = get_object_vars($xml->qtcfduration)[0];
        $reading->sti = get_object_vars($xml->sti)[0];
        $reading->avm = get_object_vars($xml->avm)[0];
        $reading->di = $di;
        $reading->dii = $dii;
        $reading->diii = $diii;
        $reading->avr = $avr;
        $reading->avl = $avl;
        $reading->avf = $avf;
        $reading->v1 = $v1;
        $reading->v2 = $v2;
        $reading->v3 = $v3;
        $reading->v4 = $v4;
        $reading->v5 = $v5;
        $reading->v6 = $v6;

        return $reading;
    }

}
