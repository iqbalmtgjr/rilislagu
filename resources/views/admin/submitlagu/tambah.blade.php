<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="modal-tambah" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Submit Lagu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('submit.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" placeholder="Email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="judul_rilisan">Judul Rilisan</label>
                                <input type="text" class="form-control @error('judul_rilisan') is-invalid @enderror"
                                    name="judul_rilisan" placeholder="Judul Rilisan" value="{{ old('judul_rilisan') }}">
                                @error('judul_rilisan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama_artis_utama">Nama Artis Utama</label>
                                <input type="text"
                                    class="form-control @error('nama_artis_utama') is-invalid @enderror"
                                    name="nama_artis_utama" placeholder="Nama Artis Utama"
                                    value="{{ old('nama_artis_utama') }}">
                                @error('nama_artis_utama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tipe_rilisan">Tipe Rilisan</label>
                                <select class="form-control @error('tipe_rilisan') is-invalid @enderror"
                                    name="tipe_rilisan">
                                    <option value="">Pilih Tipe Rilisan</option>
                                    <option value="Single" {{ old('tipe_rilisan') == 'Single' ? 'selected' : '' }}>
                                        Single
                                    </option>
                                    <option value="EP" {{ old('tipe_rilisan') == 'EP' ? 'selected' : '' }}>EP
                                    </option>
                                    <option value="Album" {{ old('tipe_rilisan') == 'Album' ? 'selected' : '' }}>Album
                                    </option>
                                </select>
                                @error('tipe_rilisan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- <div class="form-group">
                                <label for="jenis_karya">Jenis Karya</label>
                                <select class="form-control @error('jenis_karya') is-invalid @enderror"
                                    name="jenis_karya">
                                    <option value="">Pilih Jenis Karya</option>
                                    <option value="Original" {{ old('jenis_karya') == 'Original' ? 'selected' : '' }}>
                                        Original
                                    </option>
                                    <option value="Cover" {{ old('jenis_karya') == 'Cover' ? 'selected' : '' }}>Cover
                                    </option>
                                    <option value="Remix" {{ old('jenis_karya') == 'Remix' ? 'selected' : '' }}>Remix
                                    </option>
                                </select>
                                @error('jenis_karya')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div> --}}
                            <div class="form-group">
                                <label for="url_spotify_utama">URL Spotify Artis Utama</label>
                                <input type="text"
                                    class="form-control @error('url_spotify_utama') is-invalid @enderror"
                                    name="url_spotify_utama" placeholder="URL Spotify Artis Utama"
                                    value="{{ old('url_spotify_utama') }}">
                                @error('url_spotify_utama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="url_apple_music_artis_utama">URL Apple Music Artis Utama</label>
                                <input type="text"
                                    class="form-control @error('url_apple_music_artis_utama') is-invalid @enderror"
                                    name="url_apple_music_artis_utama" placeholder="URL Apple Music Artis Utama"
                                    value="{{ old('url_apple_music_artis_utama') }}">
                                @error('url_apple_music_artis_utama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="artis_featuring">Artis Featuring</label>
                                <input type="text"
                                    class="form-control @error('artis_featuring') is-invalid @enderror"
                                    name="artis_featuring" placeholder="Artis Featuring"
                                    value="{{ old('artis_featuring') }}">
                                @error('artis_featuring')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="url_spotify_artis_featuring">URL Spotify Artis Featuring</label>
                                <input type="text"
                                    class="form-control @error('url_spotify_artis_featuring') is-invalid @enderror"
                                    name="url_spotify_artis_featuring" placeholder="URL Spotify Artis Featuring"
                                    value="{{ old('url_spotify_artis_featuring') }}">
                                @error('url_spotify_artis_featuring')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="url_apple_music_artis_featuring">URL Apple Music Artis Featuring</label>
                                <input type="text"
                                    class="form-control @error('url_apple_music_artis_featuring') is-invalid @enderror"
                                    name="url_apple_music_artis_featuring" placeholder="URL Apple Music Artis Featuring"
                                    value="{{ old('url_apple_music_artis_featuring') }}">
                                @error('url_apple_music_artis_featuring')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="url_youtube">URL YouTube</label>
                                <input type="text" class="form-control @error('url_youtube') is-invalid @enderror"
                                    name="url_youtube" placeholder="Wajib Link Channel Original"
                                    value="{{ old('url_youtube') }}">
                                @error('url_youtube')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="url_sosial_media">URL Sosial Media</label>
                                <input type="text"
                                    class="form-control @error('url_sosial_media') is-invalid @enderror"
                                    name="url_sosial_media" placeholder="Bisa URL Instagram/Facebook"
                                    value="{{ old('url_sosial_media') }}">
                                @error('url_sosial_media')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <label for="tanggal_rilis">Tanggal Rilis Awal</label>
                            <div class="form-group input-group">
                                <input type="date"
                                    class="form-control @error('tanggal_rilis') is-invalid @enderror"
                                    name="tanggal_rilis" placeholder="Tanggal Rilis"
                                    value="{{ old('tanggal_rilis') }}">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-info btn-md" data-toggle="popover"
                                        data-placement="top"
                                        data-content="<p>Jika Anda mengupload rilis yang sebelumnya telah dirilis secara digital atau fisik, Anda dapat menentukan tanggal rilis awal di sini. Ini adalah tanggal yang akan ditampilkan di sebagian besar toko/platform. Namun, rilis tersebut akan ditayangkan di toko/platform pada tanggal yang ditentukan sebagai Tanggal Rilis. Jika ini adalah rilis baru, biarkan kosong.</p>">
                                        <i class="fas fa-info-circle"></i>
                                    </button>
                                </div>
                                @error('tanggal_rilis')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="genre_musik">Genre Musik</label>
                                <select class="form-control @error('genre_musik') is-invalid @enderror"
                                    name="genre_musik">
                                    <option value="">Pilih</option>
                                    <option value="Blues" {{ old('genre_musik') == 'Blues' ? 'selected' : '' }}>Blues
                                    </option>
                                    <option value="Musik Anak"
                                        {{ old('genre_musik') == 'Musik Anak' ? 'selected' : '' }}>Musik Anak</option>
                                    <option value="Lagu Kristen"
                                        {{ old('genre_musik') == 'Lagu Kristen' ? 'selected' : '' }}>Lagu Kristen
                                    </option>
                                    <option value="Klasik" {{ old('genre_musik') == 'Klasik' ? 'selected' : '' }}>
                                        Klasik</option>
                                    <option value="Komedi" {{ old('genre_musik') == 'Komedi' ? 'selected' : '' }}>
                                        Komedi</option>
                                    <option value="Country" {{ old('genre_musik') == 'Country' ? 'selected' : '' }}>
                                        Country</option>
                                    <option value="Easy Listening"
                                        {{ old('genre_musik') == 'Easy Listening' ? 'selected' : '' }}>Easy Listening
                                    </option>
                                    <option value="Educational"
                                        {{ old('genre_musik') == 'Educational' ? 'selected' : '' }}>Educational
                                    </option>
                                    <option value="Electronik"
                                        {{ old('genre_musik') == 'Electronik' ? 'selected' : '' }}>Electronik</option>
                                    <option value="Fitnes & Workout"
                                        {{ old('genre_musik') == 'Fitnes & Workout' ? 'selected' : '' }}>Fitnes &
                                        Workout</option>
                                    <option value="Folk" {{ old('genre_musik') == 'Folk' ? 'selected' : '' }}>Folk
                                    </option>
                                    <option value="Hip Hop/Rap"
                                        {{ old('genre_musik') == 'Hip Hop/Rap' ? 'selected' : '' }}>Hip Hop/Rap
                                    </option>
                                    <option value="Holiday Music"
                                        {{ old('genre_musik') == 'Holiday Music' ? 'selected' : '' }}>Holiday Music
                                    </option>
                                    <option value="Inspirasional"
                                        {{ old('genre_musik') == 'Inspirasional' ? 'selected' : '' }}>Inspirasional
                                    </option>
                                    <option value="Jazz" {{ old('genre_musik') == 'Jazz' ? 'selected' : '' }}>Jazz
                                    </option>
                                    <option value="Karaoke" {{ old('genre_musik') == 'Karaoke' ? 'selected' : '' }}>
                                        Karaoke</option>
                                    <option value="Oldies" {{ old('genre_musik') == 'Oldies' ? 'selected' : '' }}>
                                        Oldies</option>
                                    <option value="Pop" {{ old('genre_musik') == 'Pop' ? 'selected' : '' }}>Pop
                                    </option>
                                    <option value="R&B/Soul" {{ old('genre_musik') == 'R&B/Soul' ? 'selected' : '' }}>
                                        R&B/Soul</option>
                                    <option value="Reggae" {{ old('genre_musik') == 'Reggae' ? 'selected' : '' }}>
                                        Reggae</option>
                                    <option value="Rock" {{ old('genre_musik') == 'Rock' ? 'selected' : '' }}>Rock
                                    </option>
                                    <option value="Samba" {{ old('genre_musik') == 'Samba' ? 'selected' : '' }}>Samba
                                    </option>
                                    <option value="Soundtracks"
                                        {{ old('genre_musik') == 'Soundtracks' ? 'selected' : '' }}>Soundtracks
                                    </option>
                                    <option value="Spoken Word"
                                        {{ old('genre_musik') == 'Spoken Word' ? 'selected' : '' }}>Spoken Word
                                    </option>
                                    <option value="World" {{ old('genre_musik') == 'World' ? 'selected' : '' }}>World
                                    </option>
                                    <option value="Arabic" {{ old('genre_musik') == 'Arabic' ? 'selected' : '' }}>
                                        Arabic
                                    </option>

                                </select>
                                @error('genre_musik')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="sub_genre">Sub Genre</label>
                                <input type="text" class="form-control @error('sub_genre') is-invalid @enderror"
                                    name="sub_genre" placeholder="Sub Genre" value="{{ old('sub_genre') }}">
                                @error('sub_genre')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="lagu_tanpa_vocal">Lagu Tanpa Vocal</label>
                                <select class="form-control @error('lagu_tanpa_vocal') is-invalid @enderror"
                                    name="lagu_tanpa_vocal">
                                    <option value="">Pilih Lagu Tanpa Vocal</option>
                                    <option value="1" {{ old('lagu_tanpa_vocal') == '1' ? 'selected' : '' }}>Ya
                                    </option>
                                    <option value="0" {{ old('lagu_tanpa_vocal') == '0' ? 'selected' : '' }}>
                                        Tidak
                                    </option>
                                </select>
                                @error('lagu_tanpa_vocal')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="bahasa_judul">Bahasa Judul</label>
                                <input type="text"
                                    class="form-control @error('bahasa_judul') is-invalid @enderror"
                                    name="bahasa_judul" placeholder="Contoh: Indonesia, Inggris, Arab, Daerah"
                                    value="{{ old('bahasa_judul') }}">
                                @error('bahasa_judul')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="bahasa_lirik">Bahasa Lirik</label>
                                <input type="text"
                                    class="form-control @error('bahasa_lirik') is-invalid @enderror"
                                    name="bahasa_lirik" placeholder="Contoh: Indonesia, Inggris, Arab, Daerah"
                                    value="{{ old('bahasa_lirik') }}">
                                @error('bahasa_lirik')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama_label">Nama Label</label>
                                <input type="text" class="form-control @error('nama_label') is-invalid @enderror"
                                    name="nama_label" placeholder="Bebas Kustomisasi"
                                    value="{{ old('nama_label') }}">
                                @error('nama_label')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama_pencipta">Nama Pencipta</label>
                                <input type="text"
                                    class="form-control @error('nama_pencipta') is-invalid @enderror"
                                    name="nama_pencipta" placeholder="Isi sesuai identitas KTP"
                                    value="{{ old('nama_pencipta') }}">
                                @error('nama_pencipta')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama_produser">Nama Produser</label>
                                <input type="text"
                                    class="form-control @error('nama_produser') is-invalid @enderror"
                                    name="nama_produser" placeholder="Isi sesuai identitas KTP"
                                    value="{{ old('nama_produser') }}">
                                @error('nama_produser')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="nama_komposer">Nama Komposer/Arranger</label>
                                <input type="text"
                                    class="form-control @error('nama_komposer') is-invalid @enderror"
                                    name="nama_komposer" placeholder="Isi sesuai identitas KTP"
                                    value="{{ old('nama_komposer') }}">
                                @error('nama_komposer')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama_pemegang_hak_cipta">Nama Pemegang Hak Cipta</label>
                                <input type="text"
                                    class="form-control @error('nama_pemegang_hak_cipta') is-invalid @enderror"
                                    name="nama_pemegang_hak_cipta" placeholder="Boleh diisi nama label"
                                    value="{{ old('nama_pemegang_hak_cipta') }}">
                                @error('nama_pemegang_hak_cipta')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="upc">UPC</label>
                                <input type="text" class="form-control @error('upc') is-invalid @enderror"
                                    name="upc" placeholder="UPC (jika ada)" value="{{ old('upc') }}">
                                @error('upc')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="additional_credits">Additional Credits</label>
                                <textarea class="form-control @error('additional_credits') is-invalid @enderror" name="additional_credits"
                                    placeholder="Diisi dengan kontributor lagu contoh: Pengisi backing vocal, pemain gitar, pemain keyboard dan lain-lain">{{ old('additional_credits') }}</textarea>
                                @error('additional_credits')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="konten_dewasa">Konten Dewasa</label>
                                <select class="form-control @error('konten_dewasa') is-invalid @enderror"
                                    name="konten_dewasa">
                                    <option value="">Pilih</option>
                                    <option value="1" {{ old('konten_dewasa') == 1 ? 'selected' : '' }}>Ya
                                    </option>
                                    <option value="0" {{ old('konten_dewasa') == 0 ? 'selected' : '' }}>Tidak
                                    </option>
                                </select>
                                @error('konten_dewasa')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="file_lagu">File Lagu</label>
                                <input type="file" class="form-control @error('file_lagu') is-invalid @enderror"
                                    name="file_lagu" placeholder="File Lagu" accept=".wav">
                                @error('file_lagu')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <label for="artwork">Artwork</label>
                            <div class="form-group input-group">
                                <input type="file" class="form-control @error('artwork') is-invalid @enderror"
                                    name="artwork" placeholder="">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-info" data-toggle="popover"
                                        title="Informasi"
                                        data-content="<ul>
                                                      <li>Format file untuk Artwork harus dalam format JPG</li>
                                                      <li>Artwork berdimensi square (Kotak) berukuran minimal 3000×3000 pixels & maksimal 5000x5000 pixels</li>
                                                      <li>Ukuran file harus dibawah 36 mb</li>
                                                      <li>Desain berkualitas professional & mewakili musik (tidak blurry/ buram/ pecah)</li>
                                                      <li>Tidak mengandung text/ icon yang tidak ada hubungannya dengan rilisan. Misalnya: social media, web, porn images, info harga, kontak (email, no. telp, dll).</li>
                                                      <li>Tulisan di cover HARUS SAMA dengan data yang diinput pada metadata, tidak boleh berbeda, *misalnya penulisan nama artis atau label atau judul antara tulisan di cover dan di data perilisan harus sama.</li>
                                                      <li>Dilarang menggunakan STOCK Photo dari Google, web editor, AI Generated, Anime, tokoh terkenal dan sebagainya yang berhubungan dengan pelanggaran hak cipta.</li>
                                                      <li>Bisa mengandung text Nama Artis, Judul Lagu/ Album, Composer, Label, Produksi</li>
                                                      <li>Semua data text harus sesuai dengan metadata yang dimasukkan baik itu ejaan dan cara penulisannya</li>
                                                      </ul>">
                                        <i class="fas fa-info-circle"></i>
                                    </button>
                                </div>
                                @error('artwork')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tambahan_lirik_file">Tambahan Lirik File</label>
                                <input type="file"
                                    class="form-control @error('tambahan_lirik_file') is-invalid @enderror"
                                    name="tambahan_lirik_file" placeholder="Tambahan Lirik File"
                                    value="{{ old('tambahan_lirik_file') }}">
                                @error('tambahan_lirik_file')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="detik_mulai">Detik Mulai Preview</label>
                                <input type="text" class="form-control @error('detik_mulai') is-invalid @enderror"
                                    name="detik_mulai" value="{{ old('detik_mulai') }}"
                                    placeholder="jam:menit:detik (00:00:00)">
                                @error('detik_mulai')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="saya_adalah">Saya Adalah</label>
                                <select class="form-control @error('saya_adalah') is-invalid @enderror"
                                    name="saya_adalah">
                                    <option value="">-- Pilih Opsi --</option>
                                    <option value="Pihak Solo/Artist"
                                        {{ old('saya_adalah') == 'Pihak Solo/Artist' ? 'selected' : '' }}>Pihak
                                        Solo/Artist</option>
                                    <option value="Pihak Band"
                                        {{ old('saya_adalah') == 'Pihak Band' ? 'selected' : '' }}>Pihak Band</option>
                                    <option value="Personil Band"
                                        {{ old('saya_adalah') == 'Personil Band' ? 'selected' : '' }}>Personil Band
                                    </option>
                                    <option value="Pihak Management"
                                        {{ old('saya_adalah') == 'Pihak Management' ? 'selected' : '' }}>Pihak
                                        Management</option>
                                    <option value="Pihak Label"
                                        {{ old('saya_adalah') == 'Pihak Label' ? 'selected' : '' }}>Pihak Label
                                    </option>
                                    <option value="Agen" {{ old('saya_adalah') == 'Agen' ? 'selected' : '' }}>Agen
                                    </option>
                                </select>
                                @error('saya_adalah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="url_sosial_media_artis">URL Sosial Media Artis</label>
                                <input type="text"
                                    class="form-control @error('url_sosial_media_artis') is-invalid @enderror"
                                    name="url_sosial_media_artis" placeholder="URL Sosial Media Artis"
                                    value="{{ old('url_sosial_media_artis') }}">
                                @error('url_sosial_media_artis')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="url_web_artis">URL Web Artis</label>
                                <input type="text"
                                    class="form-control @error('url_web_artis') is-invalid @enderror"
                                    name="url_web_artis" placeholder="URL Web Artis"
                                    value="{{ old('url_web_artis') }}">
                                @error('url_web_artis')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="kota_asal">Kota Asal</label>
                                <input type="text" class="form-control @error('kota_asal') is-invalid @enderror"
                                    name="kota_asal" placeholder="Kota Asal" value="{{ old('kota_asal') }}">
                                @error('kota_asal')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No HP</label>
                                <input type="text" class="form-control @error('no_hp') is-invalid @enderror"
                                    name="no_hp" placeholder="No HP" value="{{ old('no_hp') }}">
                                @error('no_hp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="jenis_layanan">Jenis Layanan</label>
                                <input type="text"
                                    class="form-control @error('jenis_layanan') is-invalid @enderror"
                                    name="jenis_layanan" placeholder="Jenis Layanan"
                                    value="{{ old('jenis_layanan') }}">
                                @error('jenis_layanan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="upload_ktp">Upload KTP</label>
                                <input type="file" class="form-control @error('upload_ktp') is-invalid @enderror"
                                    name="upload_ktp" placeholder="Upload KTP" value="{{ old('upload_ktp') }}">
                                @error('upload_ktp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="jasa_tambahan">Jasa Tambahan</label>
                                <input type="text"
                                    class="form-control @error('jasa_tambahan') is-invalid @enderror"
                                    name="jasa_tambahan" placeholder="Jasa Tambahan"
                                    value="{{ old('jasa_tambahan') }}">
                                @error('jasa_tambahan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
