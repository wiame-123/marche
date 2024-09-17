<?php

namespace App\Http\Controllers;

use App\Models\Procurment;
use App\Http\Requests\StoreProcurmentRequest;

use Illuminate\Http\Request;

class ProcurmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $procurments='';
        return view('procurments.index', ['procurments' => $procurments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('procurments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProcurmentRequest $request)
    {

        $procurment = new Procurment();

        $procurment->objet                 = $request->objet;
        $procurment->description           = $request->description;
        $procurment->save();
        //Mail::to( $attendee->email )->send(new Dattendee($attendee));
        //Mail::to( $attendee->email )->queue(new Dattendee($attendee,''));
        return to_route('procurments.index')->with('status', 'seccesful !');
    }


    /**
     * Display the specified resource.
     */
    public function show(Procurment $procurment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Procurment $procurment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Procurment $procurment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Procurment $procurment)
    {
        //
    }
}
