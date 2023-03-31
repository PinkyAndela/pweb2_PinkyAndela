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
  <!-- <h4>Selamat Datang <b></b>, Anda Login sebagai <b></b>.</h4> -->

  @if (auth()->user()->role_id == '1')
  <h4>Selamat Datang Admin</h4>
  @endif

  @if (auth()->user()->role_id == '2')
  <h4>Selamat Datang Alumni</h4>
  @endif

  </html>
  </body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</div>

</div>
@endsection