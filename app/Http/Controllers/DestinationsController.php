<?php

namespace App\Http\Controllers;

use App\Destination;
use Illuminate\Http\Request;

class DestinationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // $destinations = Destination::all();
        // $destinations = Destination::whereDate('end', '<=','2019-08-30')->get();
        // $max = Destination::max('end');
        // //dd($max);
        // $min = Destination::min('start');
        // $countries = Destination::select('start','country')
        //     ->whereDate('start','<',$max)
        //     ->get();

        $destinations = Destination::with('customers')->get();
        
        // $destinations = Destination::with('customers')
        //     ->whereHas(
        //         'customers', function($query) {
        //             return $query->select('first_name','last_name')
        //                 ->groupBy('first_name','last_name')
        //                 ->havingRaw('COUNT(*) > 1');
        //         })->get();
            
        dd($destinations);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function show(Destination $destination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function edit(Destination $destination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destination $destination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destination $destination)
    {
        //
    }
}
