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
    public function store(Request $request)
    {
        // Validasi data jika diperlukan
        $request->validate([
            'nama_lengkap' => 'required',
            'nama_panggilan' => 'required',
            'nik' => 'required',
            'no_kartu_keluarga' => 'required',
            'no_kartu_akta_lahir' => 'required',
            'tempat' => 'required',
            'tanggal_lahir' => 'required',
            'kewarganegaraan' => 'required',
            'berkebutuhan_khusus' => 'required',
            'jenis_kelamin' => 'required',
            'usia' => 'required',
            'alamat_tempat_tinggal' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'desa' => 'required',
            'kecamatan' => 'required',
            'lintang' => 'required',
            'bujur' => 'required',
            'kode_pos' => 'required',
            'tempat_tinggal' => 'required',
            'alat_transportasi' => 'required',
            'no_hp' => 'required',
            'email_anak' => 'required',
            'agama' => 'required',
            'hobi' => 'required',
            'cita_cita' => 'required',
            'anak_ke' => 'required',
            'jumlah_saudara_kandung' => 'required',
            'bahasa_sehari_hari' => 'required',
            'tinggi_badan' => 'required',
            'berat_badan' => 'required',
            'asal_tk_ra_sd_mi' => 'required',
            'npsn_tk_ra_sd_mi' => 'required',
            'nisn' => 'required',
            'penerima_kps_kph' => 'required',
            'kip' => 'required',
            'pip' => 'required',
            'diterima_di_kelas' => 'required',
            'tanggal_mendaftar' => 'required',
            'nama_ayah_kandung' => 'required',
            'nik_ayah' => 'required',
            'tempat_ayah' => 'required',
            'tanggal_lahir_ayah' => 'required',
            'pendidikan_terakhir_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'penghasilan_per_bulan_ayah' => 'required',
            'berkebutuhan_khusus_ayah' => 'required',
            'alamat_ayah' => 'nullable',
            'no_hp_ayah' => 'required',
            'nama_ibu_kandung' => 'required',
            'nik_ibu' => 'required',
            'tempat_ibu' => 'required',
            'tanggal_lahir_ibu' => 'required',
            'pendidikan_terakhir_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'penghasilan_per_bulan_ibu' => 'required',
            'berkebutuhan_khusus_ibu' => 'required',
            'alamat_ibu' => 'nullable',
            'no_hp_ibu' => 'required',
            'nama_wali' => 'required',
            'nik_wali' => 'required',
            'tempat_wali' => 'required',
            'tanggal_lahir_wali' => 'required',
            'pendidikan_terakhir_wali' => 'required',
            'pekerjaan_wali' => 'required',
            'penghasilan_per_bulan_wali' => 'required',
            'alamat_wali' => 'nullable',
            'no_hp_wali' => 'required',
        ]);

        // Mendapatkan nilai penghasilan dari formulir dan mengonversinya ke format yang diinginkan
        $penghasilan_ayah = $this->formatPenghasilan($request->input('penghasilan_per_bulan_ayah'));
        $penghasilan_ibu = $this->formatPenghasilan($request->input('penghasilan_per_bulan_ibu'));
        $penghasilan_wali = $this->formatPenghasilan($request->input('penghasilan_per_bulan_wali'));

        // Buat objek Pendaftaran dan simpan ke database
        Pendaftaran::create([
            'nama_lengkap' => $request->input('nama_lengkap'),
            'nama_panggilan' => $request->input('nama_panggilan'),
            'nik' => $request->input('nik'),
            'no_kartu_keluarga' => $request->input('no_kartu_keluarga'),
            'no_kartu_akta_lahir' => $request->input('no_kartu_akta_lahir'),
            'tempat' => $request->input('tempat'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'kewarganegaraan' => $request->input('kewarganegaraan'),
            'berkebutuhan_khusus' => $request->input('berkebutuhan_khusus'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'usia' => $request->input('usia'),
            'alamat_tempat_tinggal' => $request->input('alamat_tempat_tinggal'),
            'rt' => $request->input('rt'),
            'rw' => $request->input('rw'),
            'desa' => $request->input('desa'),
            'kecamatan' => $request->input('kecamatan'),
            'lintang' => $request->input('lintang'),
            'bujur' => $request->input('bujur'),
            'kode_pos' => $request->input('kode_pos'),
            'tempat_tinggal' => $request->input('tempat_tinggal'),
            'alat_transportasi' => $request->input('alat_transportasi'),
            'no_hp' => $request->input('no_hp'),
            'email_anak' => $request->input('email_anak'),
            'agama' => $request->input('agama'),
            'hobi' => $request->input('hobi'),
            'cita_cita' => $request->input('cita_cita'),
            'anak_ke' => $request->input('anak_ke'),
            'jumlah_saudara_kandung' => $request->input('jumlah_saudara_kandung'),
            'bahasa_sehari_hari' => $request->input('bahasa_sehari_hari'),
            'tinggi_badan' => $request->input('tinggi_badan'),
            'berat_badan' => $request->input('berat_badan'),
            'asal_tk_ra_sd_mi' => $request->input('asal_tk_ra_sd_mi'),
            'npsn_tk_ra_sd_mi' => $request->input('npsn_tk_ra_sd_mi'),
            'nisn' => $request->input('nisn'),
            'penerima_kps_kph' => $request->input('penerima_kps_kph'),
            'kip' => $request->input('kip'),
            'pip' => $request->input('pip'),
            'diterima_di_kelas' => $request->input('diterima_di_kelas'),
            'tanggal_mendaftar' => $request->input('tanggal_mendaftar'),
            'nama_ayah_kandung' => $request->input('nama_ayah_kandung'),
            'nik_ayah' => $request->input('nik_ayah'),
            'tempat_ayah' => $request->input('tempat_ayah'),
            'tanggal_lahir_ayah' => $request->input('tanggal_lahir_ayah'),
            'pendidikan_terakhir_ayah' => $request->input('pendidikan_terakhir_ayah'),
            'pekerjaan_ayah' => $request->input('pekerjaan_ayah'),
            'penghasilan_per_bulan_ayah' => $penghasilan_ayah,
            'berkebutuhan_khusus_ayah' => $request->input('berkebutuhan_khusus_ayah'),
            'alamat_ayah' => $request->input('alamat_ayah'),
            'no_hp_ayah' => $request->input('no_hp_ayah'),
            'nama_ibu_kandung' => $request->input('nama_ibu_kandung'),
            'nik_ibu' => $request->input('nik_ibu'),
            'tempat_ibu' => $request->input('tempat_ibu'),
            'tanggal_lahir_ibu' => $request->input('tanggal_lahir_ibu'),
            'pendidikan_terakhir_ibu' => $request->input('pendidikan_terakhir_ibu'),
            'pekerjaan_ibu' => $request->input('pekerjaan_ibu'),
            'penghasilan_per_bulan_ibu' => $penghasilan_ibu,
            'berkebutuhan_khusus_ibu' => $request->input('berkebutuhan_khusus_ibu'),
            'alamat_ibu' => $request->input('alamat_ibu'),
            'no_hp_ibu' => $request->input('no_hp_ibu'),
            'nama_wali' => $request->input('nama_wali'),
            'nik_wali' => $request->input('nik_wali'),
            'tempat_wali' => $request->input('tempat_wali'),
            'tanggal_lahir_wali' => $request->input('tanggal_lahir_wali'),
            'pendidikan_terakhir_wali' => $request->input('pendidikan_terakhir_wali'),
            'pekerjaan_wali' => $request->input('pekerjaan_wali'),
            'penghasilan_per_bulan_wali' => $penghasilan_wali,
            'alamat_wali' => $request->input('alamat_wali'),
            'no_hp_wali' => $request->input('no_hp_wali'),
            // Tambahan data lain yang perlu disimpan
        ]);

        // Redirect ke halaman yang sesuai atau kembali ke halaman sebelumnya
        return redirect('/')->with('success', 'Data Pendaftaran berhasil disimpan.');
    }

    private function formatPenghasilan($nilai)
    {
        switch ($nilai) {
            case 'Pilih':
                return 'Pilih';
            case '1':
                return 'Rp. 500.000';
            case '2':
                return 'Rp. 500.000,- s/d Rp. 999.999,-';
            case '3':
                return 'Rp. 1.000.000,- s/d Rp. 1.999.999,-';
            case '4':
                return 'Rp. 2.000.000,- s/d Rp. 4.999.999,-';
            case '5':
                return 'Rp. 5.000.000,- s/d Rp. 20.000.000,-';
            case '6':
                return 'Rp. 20.000.000,-';
            case '7':
                return 'Tidak Berpenghasilan';
            default:
                return '';
        }
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