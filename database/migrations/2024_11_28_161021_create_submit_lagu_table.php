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
        Schema::create('submit_lagu', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            // $table->foreignId('paket_id')->constrained()->onDelete('cascade');
            $table->string('email');
            $table->string('judul_rilisan');
            $table->string('tipe_rilisan');
            $table->string('jenis_karya');
            $table->string('nama_artis_utama');
            $table->string('url_spotify_utama')->nullable();
            $table->string('url_apple_music_artis_utama')->nullable();
            $table->string('artis_featuring')->nullable();
            $table->string('url_spotify_artis_featuring')->nullable();
            $table->string('url_apple_music_artis_featuring')->nullable();
            $table->string('url_youtube')->nullable();
            $table->string('url_sosial_media')->nullable();
            $table->string('artwork');
            $table->date('tanggal_rilis')->nullable();
            $table->string('genre_musik');
            $table->string('sub_genre');
            $table->boolean('lagu_tanpa_vocal');
            $table->string('bahasa_judul');
            $table->string('bahasa_lirik');
            $table->string('nama_label');
            $table->string('file_lagu');
            $table->string('nama_pencipta');
            $table->string('nama_produser');
            $table->string('nama_komposer');
            $table->string('nama_pemegang_hak_cipta');
            $table->string('upc')->nullable();
            $table->text('additional_credits')->nullable();
            $table->boolean('konten_dewasa');
            $table->string('tambahan_lirik_file')->nullable();
            $table->string('detik_mulai');
            $table->string('saya_adalah');
            $table->string('url_sosial_media_artis');
            $table->string('url_web_artis');
            $table->string('kota_asal');
            $table->string('no_hp');
            $table->string('jenis_layanan');
            $table->string('upload_ktp');
            $table->string('jasa_tambahan')->nullable();
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submit_lagu');
    }
};
