@extends('admin.layouts.admin_master')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <h3 class="mb-0 text-center">Edit Jasa</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('jasa.update', $jasa->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="d-flex align-items-start align-items-sm-center gap-4">
                    <img src="{{ asset('storage/' . $jasa->gambar) }}" alt="{{ $jasa->nama }}"
                        class="d-block rounded" height="250" width="250" id="img-preview">
                    <div class="button-wrapper">
                        <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Pilih Gambar</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input type="file" id="upload" name="gambar" class="account-file-input" hidden
                                accept="image/png, image/jpeg">
                        </label>
                        <button type="button" class="btn btn-outline-secondary mb-4" id="reset">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Reset</span>
                        </button>
                    </div>
                </div>

                <hr class="my-4">

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="nama" class="form-label">Nama Jasa</label>
                        <input class="form-control" type="text" id="nama" name="nama" value="{{ $jasa->nama }}">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="harga" class="form-label">Harga</label>
                        <input class="form-control" type="number" id="harga" name="harga" value="{{ $jasa->harga }}">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4">{{ $jasa->deskripsi }}</textarea>
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-success me-2">Simpan Perubahan</button>
                    <a href="{{ route('jasa.index') }}" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let imgPreview = document.getElementById('img-preview');
            let inputFile = document.getElementById('upload');
            let resetBtn = document.getElementById('reset');

            inputFile.addEventListener('change', function() {
                if (inputFile.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        imgPreview.src = event.target.result;
                    };
                    reader.readAsDataURL(inputFile.files[0]);
                }
            });

            resetBtn.addEventListener('click', function() {
                imgPreview.src = "{{ asset('storage/' . $jasa->gambar) }}";
                inputFile.value = '';
            });

            ClassicEditor
                .create(document.querySelector('#deskripsi'), {
                    toolbar: [
                        'bold', 'italic', 'link', 'bulletedList', 'numberedList',
                        'blockQuote', 'insertTable', 'mediaEmbed', 'undo', 'redo'
                    ]
                })
                .catch(error => {
                    console.error(error);
                });
        });
    </script>

    <style>
        .ck-editor__editable {
            min-height: 200px !important;
            max-height: 400px;
        }
    </style>
@endpush
