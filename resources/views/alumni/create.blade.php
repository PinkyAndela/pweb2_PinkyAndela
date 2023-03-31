@extends('main')
@section('title','Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">

    </div>
    <div class="col-sm-8">

    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">
    <div class="row">
        <!-- yield -->
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <h3>Tambah Data Alumni</h3>
                    &nbsp;
                    <form action="{{route('storealumni')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="font-weight-bold">NAMA ALUMNI</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Alumni">

                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">TAHUN LULUS</label>
                            <input type="text" class="form-control" name="th_lulus" placeholder="Masukkan Tahun Lulus">

                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">JURUSAN</label>
                            <input type="text" class="form-control" name="jurusan" placeholder="Masukkan Jurusan">


                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">ALAMAT</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat">

                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">NO HP/WHATSAPP</label>
                            <input type="text" class="form-control" name="no_hp" placeholder="Masukkan WhatsApp">
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        <a href="/daftar-alumni">
                            <button type="button" class="btn btn-md btn-warning">KEMBALI</button>
                        </a>

                    </form>
                </div>
            </div>
        </div>
    </div>

    </html>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</div>

</div>
@endsection