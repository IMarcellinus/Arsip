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
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;
use PDF;
use Illuminate\Support\Facades\Storage;

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
        $data = User::all();
        $role = Auth::user()->role;
        return view('manajemenuser' , compact('data' , 'role'));
    }

    public function getPromosi(Request $request)
    {
        $role = Auth::user()->role;
        if ($request) {
            $promosi = Promosi::where('namafile', 'like', '%'.$request->search.'%')->get();
        } else {
            $promosi = Promosi::all();
        }
        return view('pengendaliankarir.promosi', compact('promosi', 'request' , 'role'));
    }

    public function getDisiplin(Request $request)
    {
        if ($request) {
            $disiplin = Disiplin::where('namafile', 'like', '%'.$request->search.'%')->get();
        } else {
            $disiplin = Disiplin::all();
        }
        $role = Auth::user()->role;
        return view('pengendaliankarir.disiplinpegawai', compact('disiplin' , 'role'));
    }

    public function getPenghargaan()
    {
        $penghargaan = Penghargaan::all();
        $role = Auth::user()->role;
        return view('pengendaliankarir.tandapenghargaan', compact('penghargaan' , 'role'));
    }

    public function getPrestasi()
    {
        $prestasi = Prestasi::all();
        $role = Auth::user()->role;
        return view('pengendaliankarir.penilaianprestasi', compact('prestasi' , 'role'));
    }

    public function getKesehatan()
    {
        $kesehatan = Kesehatan::all();
        $role = Auth::user()->role;
        return view('kesejahteraanpegawai.kesehatan', compact('kesehatan' , 'role'));
    }

    public function getCuti()
    {
        $cuti = Cuti::all();
        $role = Auth::user()->role;
        return view('kesejahteraanpegawai.cuti', compact('cuti' , 'role'));
    }

    public function getTunjangan()
    {
        $tunjangan = Tunjangan::all();
        $role = Auth::user()->role;
        return view('kesejahteraanpegawai.tunjangan', compact('tunjangan' , 'role'));
    }
    public function getPensiun()
    {
        $pensiun = Pensiun::all();
        $role = Auth::user()->role;
        return view('kesejahteraanpegawai.pensiun', compact('pensiun' , 'role'));
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
    
    public function updatepromosi(Request $request, $id)
    {
        $data = Promosi::find($id);
        if($request->has('file')){
            $this->validate($request, [
                'file' => 'mimes:doc,docx,pdf,xls,xlsx,pdf,ppt,pptx'
            ]);
            $dokumen = $request->file;
            $nama_dokumen = time().'.'.$dokumen->getClientOriginalExtension();
            $dokumen->move('dokumen',$nama_dokumen);
            $data->date = $request->date;
            $data->namafile = $request->namafile;
            $data->kode = $request->kode;
            $data->file = $nama_dokumen;
            $data->update();
        } else{
            $data->date = $request->date;
            $data->namafile = $request->namafile;
            $data->kode = $request->kode;
            $data->update();
        }
        return Redirect('/promosi');
    }
    
    public function updatedisiplin(Request $request, $id)
    {
        $data = Disiplin::find($id);
        if($request->has('file')){
            $this->validate($request, [
                'file' => 'mimes:doc,docx,pdf,xls,xlsx,pdf,ppt,pptx'
            ]);
            $dokumen = $request->file;
            $nama_dokumen = time().'.'.$dokumen->getClientOriginalExtension();
            $dokumen->move('dokumen',$nama_dokumen);
            $data->date = $request->date;
            $data->namafile = $request->namafile;
            $data->kode = $request->kode;
            $data->file = $nama_dokumen;
            $data->update();
        } else{
            $data->date = $request->date;
            $data->namafile = $request->namafile;
            $data->kode = $request->kode;
            $data->update();
        }
        return Redirect('/disiplinpegawai');
    }
    
    public function deletepromosi($id)
    {
        $data = Promosi::find($id);
        $data->delete();
        return redirect()->route('promosi')->with('success','Data berhasil dihapus');
    }
    
    public function deletedisiplin($id)
    {
        $data = Disiplin::find($id);
        $data->delete();
        return redirect()->route('disiplinpegawai');
    }
    
    public function tampildisiplin($id)
    {
        $data = Disiplin::find($id);
        return view('pengendaliankarir.promosi', compact('data'));
    }
    
    
    public function tampilpenghargaan($id)
    {
        $data = Penghargaan::find($id);
        return view('pengendaliankarir.tandapenghargaan', compact('data'));
    }
    
    public function deletepenghargaan($id)
    {
        $data = Penghargaan::find($id);
        $data->delete();
        return redirect()->route('tandapenghargaan');
    }
    
    public function updatepenghargaan(Request $request, $id)
    {
        $data = Penghargaan::find($id);
        if($request->has('file')){
            $this->validate($request, [
                'file' => 'mimes:doc,docx,pdf,xls,xlsx,pdf,ppt,pptx'
            ]);
            $dokumen = $request->file;
            $nama_dokumen = time().'.'.$dokumen->getClientOriginalExtension();
            $dokumen->move('dokumen',$nama_dokumen);
            $data->date = $request->date;
            $data->namafile = $request->namafile;
            $data->kode = $request->kode;
            $data->file = $nama_dokumen;
            $data->update();
        } else{
            $data->date = $request->date;
            $data->namafile = $request->namafile;
            $data->kode = $request->kode;
            $data->update();
        }
        return Redirect('/tandapenghargaan');
    }
    
    public function deleteprestasi($id)
    {
        $data = Prestasi::find($id);
        $data->delete();
        return redirect()->route('penilaianprestasi');
    }
    
    public function tampilprestasi($id)
    {
        $data = Prestasi::find($id);
        return view('pengendaliankarir.penilaianprestasi', compact('data'));
    }
    
    public function updateprestasi(Request $request, $id)
    {
        $data = Prestasi::find($id);
        if($request->has('file')){
            $this->validate($request, [
                'file' => 'mimes:doc,docx,pdf,xls,xlsx,pdf,ppt,pptx'
            ]);
            $dokumen = $request->file;
            $nama_dokumen = time().'.'.$dokumen->getClientOriginalExtension();
            $dokumen->move('dokumen',$nama_dokumen);
            $data->date = $request->date;
            $data->namafile = $request->namafile;
            $data->kode = $request->kode;
            $data->file = $nama_dokumen;
            $data->update();
        } else{
            $data->date = $request->date;
            $data->namafile = $request->namafile;
            $data->kode = $request->kode;
            $data->update();
        }
        return Redirect('/penilaianprestasi');
    }
    
    public function deletekesehatan($id)
    {
        $data = Kesehatan::find($id);
        $data->delete();
        return redirect('/kesehatan');
    }
    
    public function updatedkesehatan(Request $request, $id)
    {
        $data = Kesehatan::find($id);
        if($request->has('file')){
            $this->validate($request, [
                'file' => 'mimes:doc,docx,pdf,xls,xlsx,pdf,ppt,pptx'
            ]);
            $dokumen = $request->file;
            $nama_dokumen = time().'.'.$dokumen->getClientOriginalExtension();
            $dokumen->move('dokumen',$nama_dokumen);
            $data->date = $request->date;
            $data->namafile = $request->namafile;
            $data->kode = $request->kode;
            $data->file = $nama_dokumen;
            $data->update();
        } else{
            $data->date = $request->date;
            $data->namafile = $request->namafile;
            $data->kode = $request->kode;
            $data->update();
        }
        return Redirect('/kesehatan');
    }
    
    public function tampilkesehatan($id)
    {
        $data = Kesehatan::find($id);
        return view('kesejahteraanpegawai.kesehatan', compact('data'));
    }
    
    public function deletecuti($id)
    {
        $data = Cuti::find($id);
        $data->delete();
        return redirect('/cuti');
    }
    
    public function updatecuti(Request $request, $id)
    {
        $data = Cuti::find($id);
        if($request->has('file')){
            $this->validate($request, [
                'file' => 'mimes:doc,docx,pdf,xls,xlsx,pdf,ppt,pptx'
            ]);
            $dokumen = $request->file;
            $nama_dokumen = time().'.'.$dokumen->getClientOriginalExtension();
            $dokumen->move('dokumen',$nama_dokumen);
            $data->date = $request->date;
            $data->namafile = $request->namafile;
            $data->kode = $request->kode;
            $data->file = $nama_dokumen;
            $data->update();
        } else{
            $data->date = $request->date;
            $data->namafile = $request->namafile;
            $data->kode = $request->kode;
            $data->update();
        }
        return Redirect('/cuti');
    }
    
    public function tampilcuti($id)
    {
        $data = Cuti::find($id);
        return view('kesejahteraanpegawai.cuti', compact('data'));
    }
    
    public function deletetunjangan($id)
    {
        $data = Tunjangan::find($id);
        $data->delete();
        return redirect('/tunjangan');
    }
    
    public function updatetunjangan(Request $request, $id)
    {
        // $data = Tunjangan::find($id);
        // $data->update($request->all());
        // return redirect('/tunjangan');
        $data = Tunjangan::find($id);
        if($request->has('file')){
            $this->validate($request, [
                'file' => 'mimes:doc,docx,pdf,xls,xlsx,pdf,ppt,pptx'
            ]);
            $dokumen = $request->file;
            $nama_dokumen = time().'.'.$dokumen->getClientOriginalExtension();
            $dokumen->move('dokumen',$nama_dokumen);
            $data->date = $request->date;
            $data->namafile = $request->namafile;
            $data->kode = $request->kode;
            $data->file = $nama_dokumen;
            $data->update();
        } else{
            $data->date = $request->date;
            $data->namafile = $request->namafile;
            $data->kode = $request->kode;
            $data->update();
        }
        return Redirect('/tunjangan');
    }
    
    public function tampiltunjangan($id)
    {
        $data = Tunjangan::find($id);
        return view('kesejahteraanpegawai.tunjangan', compact('data'));
    }

    public function deletepensiun($id)
    {
        $data = Pensiun::find($id);
        $data->delete();
        return redirect('/pensiun');
    }

    public function deleteuser($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('/manajemenuser');
    }
    
    public function updatepensiun(Request $request, $id)
    {
        $data = Pensiun::find($id);
        if($request->has('file')){
            $this->validate($request, [
                'file' => 'mimes:doc,docx,pdf,xls,xlsx,pdf,ppt,pptx'
            ]);
            $dokumen = $request->file;
            $nama_dokumen = time().'.'.$dokumen->getClientOriginalExtension();
            $dokumen->move('dokumen',$nama_dokumen);
            $data->date = $request->date;
            $data->namafile = $request->namafile;
            $data->kode = $request->kode;
            $data->file = $nama_dokumen;
            $data->update();
        } else{
            $data->date = $request->date;
            $data->namafile = $request->namafile;
            $data->kode = $request->kode;
            $data->update();
        }
        return Redirect('/pensiun');
    }
    
    public function tampilpensiun($id)
    {
        $data = Pensiun::find($id);
        return view('kesejahteraanpegawai.pensiun', compact('data'));
    }
    public function tambahuser(Request $data)
    {
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'nim' => $data['nim'],
            'username' => $data['username'],
            'role' => $data['role'],
            'password' => Hash::make($data['password']),
        ]);
        return redirect("/manajemenuser");
    }

    public function updateuser(Request $request, $id)
    {
        $data = User::find($id);
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->update();
        return redirect('/manajemenuser');
    }

    public function downloadpdf()
    {
        $data = Promosi::limit(20)->get();
        $pdf = PDF::loadview('penjualan-pdf', compact('data'));
        $pdf->setPaper('A4', 'potrait');
	    return $pdf->stream('penjualan.pdf');
    }

    public function showpdfpromosi($id)
    {
        $data = Promosi::find($id);
        return view('viewpdf', compact('data'));
    }
}