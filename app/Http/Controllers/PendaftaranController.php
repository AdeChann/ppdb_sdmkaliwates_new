<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard');
    }

    public function home() {
        return view('dashboard');
    }

    public function index() {
        $datas =Pendaftaran::get();
        return view('people.index',compact('datas'));
    }

    public function create(){
        return view('pendaftaran.pendaftaran');
    }
    public function store(Request $request){
        // $request->validate([
        //     'nama_lengkap' => 'required|max:255',
        //     'nama_panggilan' => 'required|max:50',
        //     'nik' => 'required|numeric',
        //     'no_kartu_keluarga' => 'required|numeric',
        //     'no_kartu_akta_lahir' => 'required|numeric',
        //     'tempat' => 'required|max:50',
        //     'tanggal_lahir' => 'required|date',
        //     'kewarganegaraan' => 'required|max:100',
        //     'berkebutuhan_khusus' => 'required|max:100',
        //     'jenis_kelamin' => 'required|max:10',
        //     'usia' => 'required|integer',
        //     'alamat_tempat_tinggal' => 'required|max:255',
        //     'rt' => 'required|integer',
        //     'rw' => 'required|integer',
        //     'desa' => 'required|max:50',
        //     'kecamatan' => 'required|max:50',
        //     'lintang' => 'required|numeric',
        //     'bujur' => 'required|numeric',
        //     'kode_pos' => 'required|numeric',
        //     'tempat_tinggal' => 'required|max:50',
        //     'alat_transportasi' => 'required|max:100',
        //     'no_hp' => 'required|numeric',
        //     'email_anak' => 'required|email',
        //     'agama' => 'required|max:50',
        //     'hobi' => 'required|max:50',
        //     'cita_cita' => 'required|max:50',
        //     'anak_ke' => 'required|integer',
        //     'jumlah_saudara_kandung' => 'required|integer',
        //     'bahasa_sehari_hari' => 'required|max:255',
        //     'tinggi_badan' => 'required|integer',
        //     'berat_badan' => 'required|integer',
        //     'asal_tk_ra_sd_mi' => 'required|max:255',
        //     'npsn_tk_ra_sd_mi' => 'required|max:255',
        //     'nisn' => 'required|numeric',
        //     'penerima_kps_kph' => 'required|max:30',
        //     'kip' => 'required|max:30',
        //     'pip' => 'required|max:30',
        //     'diterima_di_kelas' => 'required|max:30',
        //     'tanggal_mendaftar' => 'required|date',
        //     'nama_ayah_kandung' => 'required|max:255',
        //     'nik_ayah' => 'required|numeric',
        //     'tempat_ayah' => 'required|max:100',
        //     'tanggal_lahir_ayah' => 'required|date',
        //     'pendidikan_terakhir_ayah' => 'required|max:255',
        //     'pekerjaan_ayah' => 'required|max:100',
        //     'penghasilan_per_bulan_ayah' => 'required',
        //     'berkebutuhan_khusus_ayah' => 'required|max:100',
        //     'alamat_ayah' => 'nullable|max:255',
        //     'no_hp_ayah' => 'required|numeric',
        //     'nama_ibu_kandung' => 'required|max:255',
        //     'nik_ibu' => 'required|max:255',
        //     'tempat_ibu' => 'required|max:100',
        //     'tanggal_lahir_ibu' => 'required|date',
        //     'pendidikan_terakhir_ibu' => 'required|max:255',
        //     'pekerjaan_ibu' => 'required|max:100',
        //     'penghasilan_per_bulan_ibu' => 'required',
        //     'berkebutuhan_khusus_ibu' => 'required|max:100',
        //     'alamat_ibu' => 'nullable|max:255',
        //     'no_hp_ibu' => 'required|numeric',
        //     'nama_wali' => 'required|max:255',
        //     'nik_wali' => 'required|numeric',
        //     'tempat_wali' => 'required|max:100',
        //     'tanggal_lahir_wali' => 'required|date',
        //     'pendidikan_terakhir_wali' => 'required|max:255',
        //     'pekerjaan_wali' => 'required|max:100',
        //     'penghasilan_per_bulan_wali' => 'required',
        //     'alamat_wali' => 'nullable|max:255',
        //     'no_hp_wali' => 'required|numeric',
        // ]);

        // dd($request->except('_token','submit'));
        Pendaftaran::create($request->except('_token','submit'));
        return redirect('/');

    }
   public function edit($id){
    $user = Pendaftaran::find($id);
    return view ('admin.edit',compact(['user']));
   }

   public function update($id, Request $request){
    $user = Pendaftaran::find($id);
    $user->update($request->except('_token','submit'));
    return redirect('/admin/dashboard');
   }

    public function destroy($id, Request $request){
        $user = Pendaftaran::find($id);
        $user->delete();
        return redirect('/admin/dashboard');

}
}