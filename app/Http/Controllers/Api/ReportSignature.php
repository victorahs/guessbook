<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Signature;
use App\Http\Controllers\Controller;

class ReportSignature extends Controller
{
    //
    /**
    * Flag the given signature.
    *
    * @param Signature $signatures
    * @return Signature
    */
    public function update(Signature $signature)
    {
      $signature->flag();

      return $signature;
    }
}
