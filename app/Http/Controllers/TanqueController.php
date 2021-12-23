<?php

namespace App\Http\Controllers;

use App\Models\Tanque;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TanqueController extends Controller
{
    public function index()
    {
        $registros = Tanque::all();

        return view('tanque.index', compact('registros'));
    }

    public function create()
    {

        $tanque = Tanque::all()->last();
        $time1 = new Carbon($tanque->Hora);
        $time2 = Carbon::now();
        $minuteDiff = $time1->diffInMinutes($time2);
        if ($minuteDiff > 370) {
            return view('tanque.create');
        }else{
            return view('tanque.edit', compact('tanque'));
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'Hora' => 'required',
            'Golpes' => 'required',
            'NIVPKT03' => 'required',
            'ControlConsistencia' => 'required',
            'NivelCuba' => 'required',
            'TanqueAgua' => 'required',
            'VacioTrans' => 'required',
            'Presion' => 'required',
        ]);

        Tanque::create($request->all());

        return redirect()->route('tanques.index');
    }

    public function show(Tanque $tanque)
    {

    }

    public function edit(Tanque $tanque)
    {
        return view('tanque.edit', compact('tanque'));
    }

    public function update(Request $request, Tanque $tanque)
    {
        $request->validate([
            'Hora' => 'required',
            'Golpes' => 'required',
            'NIVPKT03' => 'required',
            'ControlConsistencia' => 'required',
            'NivelCuba' => 'required',
            'TanqueAgua' => 'required',
            'VacioTrans' => 'required',
            'Presion' => 'required',
        ]);

        $tanque->update($request->all());

        return redirect()->route('tanques.index');
    }

    public function destroy(Tanque $tanque)
    {
        $tanque->delete();

        return redirect()->route('tanques.index');
    }

}
