<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promosi;
// use Symfony\Component\HttpFoundation\Session\Session;

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

    public function getPromosi()
    {
        $promosi = Promosi::all();
        return view('pengendaliankarir.promosi', compact('promosi'));
    }

    public function simpanPromosi(Request $request)
    {
        $this->validate($request, [
            'date' => 'required',
            'namafile' => 'required',
            'kode' => 'required',
            'file' => 'mimes:doc,docx,pdf,xls,xlsx,pdf,ppt,pptx'
        ]);
        // $dokumen = $request->file('file');
        $dokumen = $request->file;
        $nama_dokumen = time().'.'.$dokumen->getClientOriginalExtension();
        $dokumen->move('dokumen',$nama_dokumen);

        $data = new Promosi;
        $data->date = $request->date;
        $data->namafile = $request->namafile;
        $data->kode = $request->kode;
        $data->file = $nama_dokumen;
        $data->save();
        // Session::flash('sukses','Data berhasil di simpan');
        return Redirect('/promosi');
        // dd($nama_dokumen);
    }
    
    public function updatePromosi()
    {
        $data = Promosi::find($id);
        $input = $request->all();
        $data->fill($input)->save();

        return redirect('/promosi');
    }
}
