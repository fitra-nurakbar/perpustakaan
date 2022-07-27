@extends('layouts.add')

@section('add')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah</h1>
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
                                <h3 class="card-title">Tambah Petugas</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="/insert-petugas" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="foto">Foto Profile</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="foto">Pilih foto profile</label>
                                                <input type="file" class="custom-file-input" name="foto"
                                                    value="" id="foto">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama Petugas :</label>
                                        <input type="text" class="form-control" name="nama" id="nama"
                                            placeholder="Nama Petugas" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="tugas">Tugas :</label>
                                        <select class="form-control" name="tugas_id" id="tugas" required>
                                            <option value="" disabled selected>Pilih</option>
                                            @foreach ($tugas as $tugas)
                                                <option value="{{ $tugas->id }}">
                                                    {{ $tugas->tugas }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="hari">Hari :</label>
                                        <select class="form-control" name="hari_id" id="hari" required>
                                            <option value="" disabled selected>Pilih</option>
                                            @foreach ($hari as $hari)
                                                <option value="{{ $hari->id }}">
                                                    {{ $hari->hari }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="shift">Shift :</label>
                                        <select class="form-control" name="shift_id" id="shift" required>
                                            <option value="" disabled selected>Pilih</option>
                                            @foreach ($shift as $shift)
                                                <option value="{{ $shift->id }}">
                                                    {{ $shift->shift }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                    <button type="reset" class="btn btn-warning">Reset</button>
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
