<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Api\BandsModel;

class BandController extends Controller
{
    public function __construct()
    {
        $this->bands = new BandsModel();
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required'
        ]);

        return response()->json($request->all());
    } 

    public function getByGenderId($id)
    {
        $bands = $this->bands->getByGenderId($id);

        return response()->json($bands);
    } 

    public function getById($id)
    {
        $bands = $this->bands->getById($id);

        return response()->json($bands);
    } 

    public function getAll(Request $request)
    {
        $bands = $this->bands->getAll();

        return response()->json($bands);
    } 

}
