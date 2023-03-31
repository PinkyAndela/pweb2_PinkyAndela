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
    <div class="col-md-12">
      <h3>Tambah Data Alumni</h3>
      &nbsp;
      <div class="card border-0 shadow rounded">
        <div class="card-body">
          @if (auth()->user()->role_id == '1')
          <a href="/tambah-alumni" class="btn btn-md btn-success mb-3">TAMBAH ALUMNI</a>
          @endif

          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">NAMA</th>
                <th scope="col">TAHUN LULUS</th>
                <th scope="col">JURUSAN</th>
                <th scope="col">ALAMAT</th>
                @if (auth()->user()->role_id == '1')
                <th scope="col">ACTIONS</th>
                @endif
              </tr>
            </thead>
            <tbody>
              @forelse ($alumni as $post)
              <tr>
                <td>{{ $post->nama }}</td>
                <td>{{ $post->th_lulus }}</td>
                <td>{{ $post->jurusan }}</td>
                <td>{{ $post->alamat }}</td>
                <td class="text-center">
                  @if (auth()->user()->role_id == '1')
                  <a href="/edit-alumni/{{$post->id}}" class="btn btn-sm btn-primary">EDIT</a>
                  @csrf
                  @method('DELETE')
                  <a href="/hapus-alumni/{{ $post->id }}">
                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                  </a>
                  @endif
                  <!-- <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="" method="POST"> -->

                  <!-- </form> -->
                </td>
              </tr>
              @empty
              <div class="alert alert-danger">
                Data Alumni belum Tersedia.
              </div>
              @endforelse
            </tbody>
          </table>
          {{ $alumni->links() }}
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