<?php

namespace App\Http\Controllers;

use App\Models\Carriers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarriersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carriers  $carriers
     * @return \Illuminate\Http\Response
     */
    public function find(Request $request)
    {
        $zip_from = stristr($request->zip_from, '-', true);
        $zip_to = stristr($request->zip_to, '-', true);

        $googleMap = 'https://www.google.com/maps/dir/'.$request->zip_from.'/'.$request->zip_to.'/';

        $availableCarriers = DB::table('carriers')->where('zip1',$zip_from)
            ->orWhere('zip2',$zip_from)
            ->orWhere('zip3',$zip_from)
            ->orWhere('zip4',$zip_from)
            ->orWhere('zip5',$zip_from)
            ->orWhere('zip1',$zip_to)
            ->orWhere('zip2',$zip_to)
            ->orWhere('zip3',$zip_to)
            ->orWhere('zip4',$zip_to)
            ->orWhere('zip5',$zip_to)
            ->get();

        return view('index', compact('availableCarriers',['googleMap']));
    }

}
