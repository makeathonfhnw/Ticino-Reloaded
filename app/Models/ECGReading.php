<?php

namespace App\Models;

class ECGReading
{
    public int $id_exam;
    public string $identification_subject;
    public string $visitname;
    public string $recording_timestamp;
    public int $heartrate;
    public int $prduration;
    public int $qrsduration;
    public int $qtduration;
    public int $qtcbduration;
    public int $qutcfduration;
    public int $sti;
    public int $avm;
    public array $di;
    public array $dii;
    public array $diii;
    public array $avr;
    public array $avl;
    public array $v1;
    public array $v2;
    public array $v3;
    public array $v4;
    public array $v5;
    public array $v6;
}
