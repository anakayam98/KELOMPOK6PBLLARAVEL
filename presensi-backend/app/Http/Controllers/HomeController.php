<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presensi;
use App\Models\User;
use Carbon\Carbon;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $presensis = Presensi::select('presensis.*', 'users.name')
                        ->join('users', 'presensis.user_id', '=', 'users.id')
                        ->get();
        foreach($presensis as $item) {
            $datetime = Carbon::parse($item->tanggal)->locale('id');

            $datetime->settings(['formatFunction' => 'translatedFormat']);

            $item->tanggal = $datetime->format('l, j F Y');
        }
        // dd($presensis);
        return view('home', [
            'presensis' => $presensis
        ]);
    }

    public function delete_presensi($id)
    {
        Presensi::whereId($id)->delete();
        return redirect('/home');
    }

    public function cetak_pdf()
    {
        $presensis = Presensi::select('presensis.*', 'users.name')
                        ->join('users', 'presensis.user_id', '=', 'users.id')
                        ->get();
        foreach($presensis as $item) {
            $datetime = Carbon::parse($item->tanggal)->locale('id');

            $datetime->settings(['formatFunction' => 'translatedFormat']);

            $item->tanggal = $datetime->format('l, j F Y');
        }

        $pdf = PDF::loadview('cetak_pdf',['presensi'=>$presensis]);
    	return $pdf->download('rekap-presensi-pdf.pdf');
    }
}
