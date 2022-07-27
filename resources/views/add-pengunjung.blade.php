@extends('layouts.add')

@section('add')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar</h1>
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
                            <h3 class="card-title">Daftar Pengunjung</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/insert-pengunjung" method="POST" enctype="multipart/form-data">
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
                                    <label for="nama">Nama Pengunjung :</label>
                                    <input type="text" class="form-control" name="nama" id="nama"
                                        placeholder="Nama Pengunjung" required />
                                </div>
                                <div class="form-group">
                                    <label for="nik">NIK :</label>
                                    <input type="number" class="form-control" name="nik" id="nik"
                                        placeholder="NIK Pengunjung" required />
                                </div>
                                <div class="form-group">
                                    <label for="hp">NO HP :</label>
                                    <input type="number" class="form-control" name="hp" id="hp"
                                        placeholder="NO HP Pengunjung" required />
                                </div>
                                <div class="form-group">
                                    <label for="petugas">Petugas :</label>
                                    <select class="form-control" name="petugas_id" id="petugas" required>
                                        <option value="" disabled selected>Pilih</option>
                                        @foreach ($petugas as $petugas)
                                            <option value="{{ $petugas->id }}">
                                                {{ $petugas->nama }}
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