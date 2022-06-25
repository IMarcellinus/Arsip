<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }

    
    public function kesehatanpegawai()
    {
        return view('kesejahteraanpegawai.kesehatan');
    }
    public function cutipegawai()
    {
        return view('kesejahteraanpegawai.cuti');
    }
    public function tunjanganpegawai()
    {
        return view('kesejahteraanpegawai.tunjangan');
    }
    public function pensiunpegawai()
    {
        return view('kesejahteraanpegawai.pensiun');
    }
    public function promosi()
    {
        return view('pengendaliankarir.promosi');
    }
    public function disiplinpegawai()
    {
        return view('pengendaliankarir.disiplinpegawai');
    }
    public function tandapenghargaan()
    {
        return view('pengendaliankarir.tandapenghargaan');
    }
    public function penilaianprestasi()
    {
        return view('pengendaliankarir.penilaianprestasi');
    }
    public function manajemenuser()
    {
        return view('manajemenuser');
    }
}
