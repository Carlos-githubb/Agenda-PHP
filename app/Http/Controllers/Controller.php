<?php

namespace App\Http\lers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\ler as Baseler;

class ler extends Baseler
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
