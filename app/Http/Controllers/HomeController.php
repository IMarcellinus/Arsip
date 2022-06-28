<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promosi;
use App\Models\Penghargaan;
use App\Models\Disiplin;
use App\Models\Prestasi;
use App\Models\Kesehatan;
use App\Models\Cuti;
use App\Models\Tunjangan;
use App\Models\Pensiun;
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
    public function index(Request $request)
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

    public function getPromosi(Request $request)
    {
        if ($request) {
            $promosi = Promosi::where('namafile', 'like', '%'.$request->cari.'%')->get();
            $promosi = Promosi::where('namafile', 'like', '%'.$request->cari.'%')->get();
        } else {
            $promosi = Promosi::all();
        }
        return view('pengendaliankarir.promosi', compact('promosi', 'request'));
    }

    public function getDisiplin()
    {
        $disiplin = Disiplin::all();
        return view('pengendaliankarir.disiplinpegawai', compact('disiplin'));
    }

    public function getPenghargaan()
    {
        $penghargaan = Penghargaan::all();
        return view('pengendaliankarir.tandapenghargaan', compact('penghargaan'));
    }

    public function getPrestasi()
    {
        $prestasi = Prestasi::all();
        return view('pengendaliankarir.penilaianprestasi', compact('prestasi'));
    }

    public function getKesehatan()
    {
        $kesehatan = Kesehatan::all();
        return view('kesejahteraanpegawai.kesehatan', compact('kesehatan'));
    }

    public function getCuti()
    {
        $cuti = Cuti::all();
        return view('kesejahteraanpegawai.cuti', compact('cuti'));
    }

    public function getTunjangan()
    {
        $tunjangan = Tunjangan::all();
        return view('kesejahteraanpegawai.tunjangan', compact('tunjangan'));
    }
    public function getPensiun()
    {
        $pensiun = Pensiun::all();
        return view('kesejahteraanpegawai.pensiun', compact('pensiun'));
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

    public function simpanDisiplin(Request $request)
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

        $data = new Disiplin;
        $data->date = $request->date;
        $data->namafile = $request->namafile;
        $data->kode = $request->kode;
        $data->file = $nama_dokumen;
        $data->save();
        // Session::flash('sukses','Data berhasil di simpan');
        return Redirect('/disiplinpegawai');
        // dd($nama_dokumen);
    }

    public function simpanPenghargaan(Request $request)
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

        $data = new Penghargaan;
        $data->date = $request->date;
        $data->namafile = $request->namafile;
        $data->kode = $request->kode;
        $data->file = $nama_dokumen;
        $data->save();
        // Session::flash('sukses','Data berhasil di simpan');
        return Redirect('/tandapenghargaan');
        // dd($nama_dokumen);
    }

    public function simpanPrestasi(Request $request)
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

        $data = new Prestasi;
        $data->date = $request->date;
        $data->namafile = $request->namafile;
        $data->kode = $request->kode;
        $data->file = $nama_dokumen;
        $data->save();
        // Session::flash('sukses','Data berhasil di simpan');
        return Redirect('/penilaianprestasi');
        // dd($nama_dokumen);
    }
    
    public function simpanKesehatan(Request $request)
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

        $data = new Kesehatan;
        $data->date = $request->date;
        $data->namafile = $request->namafile;
        $data->kode = $request->kode;
        $data->file = $nama_dokumen;
        $data->save();
        // Session::flash('sukses','Data berhasil di simpan');
        return Redirect('/kesehatan');
        // dd($nama_dokumen);
    }

    public function simpanCuti(Request $request)
    {
        $this->validate($request, [
            'date' => 'required',
            'namafile' => 'required',
            'kode' => 'required',
            'file' => 'mimes:doc,docx,pdf,xls,xlsx,pdf,ppt,pptx'
        ]);
        $dokumen = $request->file;
        $nama_dokumen = time().'.'.$dokumen->getClientOriginalExtension();
        $dokumen->move('dokumen',$nama_dokumen);

        $data = new Cuti;
        $data->date = $request->date;
        $data->namafile = $request->namafile;
        $data->kode = $request->kode;
        $data->file = $nama_dokumen;
        $data->save();
        // Session::flash('sukses','Data berhasil di simpan');
        return Redirect('/cuti');
        // dd($nama_dokumen);
    }

    public function simpanTunjangan(Request $request)
    {
        $this->validate($request, [
            'date' => 'required',
            'namafile' => 'required',
            'kode' => 'required',
            'file' => 'mimes:doc,docx,pdf,xls,xlsx,pdf,ppt,pptx'
        ]);
        $dokumen = $request->file;
        $nama_dokumen = time().'.'.$dokumen->getClientOriginalExtension();
        $dokumen->move('dokumen',$nama_dokumen);

        $data = new Tunjangan;
        $data->date = $request->date;
        $data->namafile = $request->namafile;
        $data->kode = $request->kode;
        $data->file = $nama_dokumen;
        $data->save();
        // Session::flash('sukses','Data berhasil di simpan');
        return Redirect('/tunjangan');
        // dd($nama_dokumen);
    }

    public function simpanPensiun(Request $request)
    {
        $this->validate($request, [
            'date' => 'required',
            'namafile' => 'required',
            'kode' => 'required',
            'file' => 'mimes:doc,docx,pdf,xls,xlsx,pdf,ppt,pptx'
        ]);
        $dokumen = $request->file;
        $nama_dokumen = time().'.'.$dokumen->getClientOriginalExtension();
        $dokumen->move('dokumen',$nama_dokumen);

        $data = new Pensiun;
        $data->date = $request->date;
        $data->namafile = $request->namafile;
        $data->kode = $request->kode;
        $data->file = $nama_dokumen;
        $data->save();
        // Session::flash('sukses','Data berhasil di simpan');
        return Redirect('/pensiun');
        // dd($nama_dokumen);
    }

    // public function updatePromosi(Request $request, $id)
    // {
    //     $data = Promosi::find($id);
    //     $input = $request->all();
    //     $data->fill($input)->save();

    //     return redirect('/promosi');
    // }

    public function searchPromosi(Request $request)
    {
        $cari = $request->kata;
        $promosi = Promosi::where('kode', 'like', '%'.$cari.'%');
        return view('pengendaliankarir.promosi', compact('promosi','cari'));
    }

    public function tampilpromosi($id)
    {
        $data = Promosi::find($id);
        return view('pengendaliankarir.promosi', compact('data'));
    }
    
    public function updatepromosi(Request $request, $id)
    {
        $data = Promosi::find($id);
        $data->update($request->all());
        return redirect()->route('promosi')->with('success','Data berhasil diupdate');
    }
    
    public function deletepromosi($id)
    {
        $data = Promosi::find($id);
        $data->delete();
        return redirect()->route('promosi')->with('success','Data berhasil dihapus');
    }
}
