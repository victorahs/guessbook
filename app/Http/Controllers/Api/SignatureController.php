<?php

namespace App\Http\Controllers\Api;

use App\Signature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\http\Resources\SignatureResource;
class SignatureController extends Controller
{
    // /**
    // *Return a paginated list of signature.
    // *
    // *@return SignatureRessource
    // */
    public function index()
    {
      $signatures = Signature::latest()
      ->ignoreFlagged()
      ->paginate(20);

      return SignatureResource::collection($signatures);
    }
    // /**
    // * Fecth and return the signature.
    // *
    // *@param Signature $signature
    // *@return SignatureRessource
    // */
    public function show( Signature $signature)
    {
      return new SignatureResource($signature);
    }

    // /**
    // * Validate and save a new signature to the database.
    // *
    // * @param Request $request
    // * @return SignatureRessource
    // */
    public function store(Request $request)
    {
       $signature = $this->validate($request,[
         'name' => 'required|min:3|max:50',
         'email' => 'required|email',
         'body' => 'required|min:3'
       ]);

       $signature = Signature::create($signature);

       return new SignatureResource($signature);
    }

}
