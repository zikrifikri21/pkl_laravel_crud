<?php

namespace App\Http\Controllers;

use App\Models\Jurnals;
use Illuminate\Http\Request;

class JurnalsController extends Controller
{
    public function index()
    {
        $jurnals = Jurnals::all();

        return view('jurnals.index',compact('jurnals'));
    }

    public function store(Request $request)
    {
        try{
            $request->validate([
                'hari' => 'required|date',
                'jenis' => 'required',
                'solusi' => 'nullable',
                'alat' => 'required',
                'masalah' => 'nullable',
            ]);

            Jurnals::create([
                'hari_tgl' => $request->hari,
                'jenis_pekerjaan' => $request->jenis,
                'solusi' => $request->solusi,
                'alat' => $request->alat,
                'masalah' => $request->masalah,
            ]);

            return back()->with('success', 'Data Berhasil');
        } catch (\Exception $e) {
            return back()->withErrors([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function edit($id)
    {
       $jurnal = Jurnals::find($id);

       return view('jurnals.edit',compact('jurnal'));
    }

    public function update(Request $request, $id)
    {
        $jurnal = Jurnals::find($id);

        $jurnal->update([
            'hari_tgl' => $request->hari,
            'jenis_pekerjaan' => $request->jenis,
            'solusi' => $request->solusi,
            'alat' => $request->alat,
            'masalah' => $request->masalah,
        ]);

        return back()->with('success', 'Data Berhasil');
    }

    public function destroy($id)
    {
        $jurnal = Jurnals::find($id);
        $jurnal->delete();
        return back()->with('success', 'Data Berhasil');
    }

}
