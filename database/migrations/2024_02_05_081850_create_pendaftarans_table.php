<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string("nama_lengkap",255)->nullable();
            $table->string("nama_panggilan",50)->nullable();
            $table->bigInteger("nik")->nullable();
            $table->bigInteger("no_kartu_keluarga")->nullable();
            $table->bigInteger("no_kartu_akta_lahir")->nullable();
            $table->string("tempat",50)->nullable();
            $table->date("tanggal_lahir")->nullable();
            $table->string("kewarganegaraan",100)->nullable();
            $table->string("berkebutuhan_khusus",100)->nullable();
            $table->string("jenis_kelamin",10)->nullable();
            $table->integer("usia")->nullable();
            $table->string("alamat_tempat_tinggal",255)->nullable();
            $table->integer("rt")->nullable();
            $table->integer("rw")->nullable();
            $table->string("desa",50)->nullable();
            $table->string("kecamatan",50)->nullable();
            $table->bigInteger("lintang")->nullable();
            $table->bigInteger("bujur")->nullable();
            $table->bigInteger("kode_pos")->nullable();
            $table->string("tempat_tinggal",50)->nullable();
            $table->string("alat_transportasi",100)->nullable();
            $table->bigInteger("no_hp")->nullable();
            $table->string("email_anak")->nullable();
            $table->string("agama",50)->nullable();
            $table->string("hobi",50)->nullable();
            $table->string("cita_cita",50)->nullable();
            $table->integer("anak_ke")->nullable();
            $table->integer("jumlah_saudara_kandung")->nullable();
            $table->string("bahasa_sehari_hari")->nullable();
            $table->integer("tinggi_badan")->nullable();
            $table->integer("berat_badan")->nullable();
            $table->string("asal_tk_ra_sd_mi",255)->nullable();
            $table->string("npsn_tk_ra_sd_mi",255)->nullable();
            $table->bigInteger("nisn")->nullable();
            $table->string("penerima_kps_kph",30)->nullable();
            $table->string("kip",30)->nullable();
            $table->string("pip",30)->nullable();
            $table->string("diterima_di_kelas",30)->nullable();
            $table->date("tanggal_mendaftar")->nullable();
            $table->string("nama_ayah_kandung",255)->nullable();
            $table->bigInteger("nik_ayah")->nullable();
            $table->string("tempat_ayah",100)->nullable();
            $table->date("tanggal_lahir_ayah")->nullable();
            $table->string("pendidikan_terakhir_ayah",255)->nullable();
            $table->string("pekerjaan_ayah",100)->nullable();
            $table->bigInteger("penghasilan_per_bulan_ayah")->nullable();
            $table->string("berkebutuhan_khusus_ayah",100)->nullable();
            $table->string("alamat_ayah",255)->nullable();
            $table->bigInteger("no_hp_ayah")->nullable();
            $table->string("nama_ibu_kandung",255)->nullable();
            $table->string("nik_ibu",255)->nullable();
            $table->string("tempat_ibu",100)->nullable();
            $table->date("tanggal_lahir_ibu")->nullable();
            $table->string("pendidikan_terakhir_ibu",255)->nullable();
            $table->string("pekerjaan_ibu",100)->nullable();
            $table->bigInteger("penghasilan_per_bulan_ibu")->nullable();
            $table->string("berkebutuhan_khusus_ibu")->nullable();
            $table->string("alamat_ibu",255)->nullable();
            $table->bigInteger("no_hp_ibu")->nullable();
            $table->string("nama_wali",255)->nullable();
            $table->bigInteger("nik_wali")->nullable();
            $table->string("tempat_wali",100)->nullable();
            $table->date("tanggal_lahir_wali")->nullable();
            $table->string("pendidikan_terakhir_wali",255)->nullable();
            $table->string("pekerjaan_wali",100)->nullable();
            $table->bigInteger("penghasilan_per_bulan_wali")->nullable();
            $table->string("alamat_wali",255)->nullable();
            $table->bigInteger("no_hp_wali")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};