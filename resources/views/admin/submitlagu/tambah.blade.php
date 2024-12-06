<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="modal-tambah" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
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
                            <div class="form-group">
                                <label for="jenis_karya">Jenis Karya</label>
                                <select class="form-control @error('jenis_karya') is-invalid @enderror"
                                    name="jenis_karya">
                                    <option value="">Pilih Jenis Karya</option>
                                    <option value="Musik" {{ old('jenis_karya') == 'Musik' ? 'selected' : '' }}>Musik
                                    </option>
                                    <option value="Lirik" {{ old('jenis_karya') == 'Lirik' ? 'selected' : '' }}>Lirik
                                    </option>
                                </select>
                                @error('jenis_karya')
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
                                <label for="url_spotify_utama">URL Spotify Utama</label>
                                <input type="text"
                                    class="form-control @error('url_spotify_utama') is-invalid @enderror"
                                    name="url_spotify_utama" placeholder="URL Spotify Utama"
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
                                <label for="artwork">Artwork</label>
                                <input type="file" class="form-control @error('artwork') is-invalid @enderror"
                                    name="artwork" placeholder="">
                                @error('artwork')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tanggal_rilis">Tanggal Rilis</label>
                                <input type="date"
                                    class="form-control @error('tanggal_rilis') is-invalid @enderror"
                                    name="tanggal_rilis" placeholder="Tanggal Rilis"
                                    value="{{ old('tanggal_rilis') }}">
                                @error('tanggal_rilis')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="genre_musik">Genre Musik</label>
                                <input type="text" class="form-control @error('genre_musik') is-invalid @enderror"
                                    name="genre_musik" placeholder="Genre Musik" value="{{ old('genre_musik') }}">
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
                                    name="bahasa_judul" placeholder="Bahasa Judul"
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
                                    name="bahasa_lirik" placeholder="Bahasa Lirik"
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
                                    name="nama_label" placeholder="Nama Label" value="{{ old('nama_label') }}">
                                @error('nama_label')
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
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="nama_pencipta">Nama Pencipta</label>
                                <input type="text"
                                    class="form-control @error('nama_pencipta') is-invalid @enderror"
                                    name="nama_pencipta" placeholder="Nama Pencipta"
                                    value="{{ old('nama_pencipta') }}">
                                @error('nama_pencipta')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama_komposer">Nama Komposer</label>
                                <input type="text"
                                    class="form-control @error('nama_komposer') is-invalid @enderror"
                                    name="nama_komposer" placeholder="Nama Komposer"
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
                                    name="nama_pemegang_hak_cipta" placeholder="Nama Pemegang Hak Cipta"
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
                                    name="upc" placeholder="UPC" value="{{ old('upc') }}">
                                @error('upc')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="additional_credits">Additional Credits</label>
                                <textarea class="form-control @error('additional_credits') is-invalid @enderror" name="additional_credits"
                                    placeholder="Additional Credits">{{ old('additional_credits') }}</textarea>
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
                                <label for="detik_mulai">Detik Mulai</label>
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
                                <input type="text" class="form-control @error('saya_adalah') is-invalid @enderror"
                                    name="saya_adalah" placeholder="Saya Adalah" value="{{ old('saya_adalah') }}">
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
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
