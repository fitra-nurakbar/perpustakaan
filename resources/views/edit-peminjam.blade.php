@extends('layouts.add')

@section('add')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pinjam</h1>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="col d-flex">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Pinjam Buku</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="/update-peminjam/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="pengunjung_id">Pengunjung :</label>
                                        <select class="form-control" name="pengunjung_id" id="pengunjung_id" required>
                                            <option value="" disabled selected>Pilih</option>
                                            @foreach ($pengunjung as $pengunjung)
                                                <option value="{{ $pengunjung->id }}" {{ $pengunjung->id === $data->pengunjung_id ? "selected" : "" }}>
                                                    {{ $pengunjung->nama }} : {{ $pengunjung->hp }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="buku_id">Buku :</label>
                                        <select class="form-control" name="buku_id" id="buku_id" required>
                                            <option value="" disabled selected>Pilih</option>
                                            @foreach ($buku as $buku)
                                                <option value="{{ $buku->id }}" {{ $buku->id === $data->buku_id ? "selected" : ""}}>
                                                    {{ $buku->serial }} : {{ $buku->judul }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                    <button href="/peminjam" class="btn btn-danger">Back</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
