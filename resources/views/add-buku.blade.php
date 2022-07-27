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
                                <h3 class="card-title">Tambah Buku</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="/insert-buku" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="serial">Serial Buku :</label>
                                        <input type="text" class="form-control" name="serial" id="serial"
                                            placeholder="Serial Buku" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="judul">Judul :</label>
                                        <input type="text" class="form-control" name="judul" id="judul"
                                            placeholder="Judul Buku" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="pengarang">Pengarang :</label>
                                        <input type="text" class="form-control" name="pengarang" id="pengarang"
                                            placeholder="Pengarang Buku" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="penerbit">Penerbit :</label>
                                        <input type="text" class="form-control" name="penerbit" id="penerbit"
                                            placeholder="Penerbit Buku" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="thn_terbit">Tahun Terbit :</label>
                                        <input type="date" class="form-control" name="thn_terbit" id="thn_terbit"
                                            placeholder="Tahun Terbit" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="kategori">Kategori :</label>
                                        <select class="form-control" name="kategori_id" id="kategori" required>
                                            <option value="" disabled selected>Pilih</option>
                                            @foreach ($kategori as $kategori)
                                                <option value="{{ $kategori->id }}">
                                                    {{ $kategori->kategori }}
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
