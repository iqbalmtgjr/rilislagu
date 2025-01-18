<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Paket</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('paket.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <label for="nama_paket">Nama Paket</label>
                        <input type="text" class="form-control @error('nama_paket') is-invalid @enderror"
                            name="nama_paket" id="nama_paket" placeholder="Masukkan nama paket..." value="">
                        @error('nama_paket')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga"
                            placeholder="Masukkan jumlah harga..." value="" id="harga">
                        @error('harga')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $('.edit').click(function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        let url = '{{ route('paket.edit', ':id') }}';
        url = url.replace(':id', id);
        $.ajax({
            url: url,
            type: 'GET',
            success: function(data) {
                console.log(data);
                $('#id').val(data.id);
                $('#nama_paket').val(data.nama_paket);
                $('#harga').val(data.harga);
            }
        });
    });
</script>
