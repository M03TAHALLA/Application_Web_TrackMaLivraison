<?php

namespace App\Http\Controllers;

use App\Models\MobileTracking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrackingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $TrackingCode = $request->input('TrackingCode');



            $Ville = MobileTracking::where('NDOS', $TrackingCode)->value('Ville');
            
            $Destination = MobileTracking::where('NDOS', $TrackingCode)->value('DestinationFinal');

            $Tracking = DB::table('mobile_trackings')
            ->select('*')
            ->where('NDOS', '=', $TrackingCode)
            ->orderBy('DateDepart','ASC')
            ->get();



        return view('Track.tracking')->with([
            'TrackingCode'=>$TrackingCode,
            'Ville'=>$Ville,
            'Destination'=>$Destination,
            'CountCode' => MobileTracking::where('NDOS', $TrackingCode)->count(),
            'Tracking'=>$Tracking
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
