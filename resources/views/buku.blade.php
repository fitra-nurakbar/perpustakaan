@extends('layouts.show')

@section('show')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Buku</h1>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Tabel Buku</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>SERIAL</th>
                                            <th>JUDUL</th>
                                            <th>PENGARANG</th>
                                            <th>PENERBIT</th>
                                            <th>TAHUN TERBIT</th>
                                            <th>KATEGORI</th>
                                            <th>KELOLA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($data as $buku)
                                            <tr>
                                                <th>{{ $no++ }}</th>
                                                <td>{{ $buku->serial }}</td>
                                                <td>{{ $buku->judul }}</td>
                                                <td>{{ $buku->pengarang }}</td>
                                                <td>{{ $buku->penerbit }}</td>
                                                <td>{{ $buku->thn_terbit }}</td>
                                                <td>{{ $buku->kategori->kategori }}</td>
                                                <td>
                                                    <a class="badge bg-success"
                                                        href="/edit-buku/{{ $buku->id }}">Edit</a>
                                                    <a class="badge bg-danger" href="/delete-buku/{{ $buku->id }}"
                                                        onclick="return confirm('Apakah data mau di hapus?')">Hapus</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>NO</th>
                                            <th>SERIAL</th>
                                            <th>JUDUL</th>
                                            <th>PENGARANG</th>
                                            <th>PENERBIT</th>
                                            <th>TAHUN TERBIT</th>
                                            <th>KATEGORI</th>
                                            <th>KELOLA</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
