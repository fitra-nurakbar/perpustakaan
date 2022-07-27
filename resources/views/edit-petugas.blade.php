@extends('layouts.add')

@section('add')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper ">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit</h1>
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
                                <h3 class="card-title">Ubah Info Petugas</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="/update-petugas/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <img src="{{ asset("/FotoProfile/$data->foto") }}" alt="{{ $data->foto }}"
                                        class="img-fluid img-thumbnail mb-3" width="100px">
                                    <div class="form-group">
                                        <label for="foto">Foto Profile</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="foto">Pilih foto profile</label>
                                                <input type="file" class="custom-file-input" name="foto"
                                                    id="foto" value="{{ $data->foto }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama Petugas :</label>
                                        <input type="text" class="form-control" name="nama" id="nama"
                                            value="{{ $data->nama }}" placeholder="Nama Petugas" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tugas_id">Tugas :</label>
                                        <select class="form-control" name="tugas_id" id="tugas_id" required>
                                            <option value="" selected disabled>Pilih</option>
                                            @foreach ($tugas as $tugas)
                                                <option value="{{ $tugas->id }}"
                                                    {{ $tugas->id === $data->tugas_id ? 'selected' : '' }}>
                                                    {{ $tugas->tugas }}
                                                </option>
                                            @endforeach


                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="hari_id">Hari :</label>
                                        <select class="form-control" name="hari_id" id="hari_id" required>
                                            <option value="" selected disabled>Pilih</option>
                                            @foreach ($hari as $hari)
                                                <option value="{{ $hari->id }}"
                                                    {{ $hari->id === $data->hari_id ? 'selected' : '' }}>
                                                    {{ $hari->hari }}
                                                </option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="shift_id">Shift :</label>
                                        <select class="form-control" name="shift_id" id="shift_id" required>
                                            <option value="" selected disabled>Pilih</option>
                                            @foreach ($shift as $shift)
                                            <option value="{{ $shift->id }}" {{ $shift->id === $data->shift_id ? "selected" : '' }}>
                                                {{ $shift->shift }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                    <button href="/petugas" class="btn btn-danger">Back</button>
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
