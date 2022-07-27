@extends('layouts.show')

@section('show')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Peminjam</h1>
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
                                <h3 class="card-title">Data Tabel Peminjam</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>PEMINJAM</th>
                                            <th>BUKU</th>
                                            <th>TANGGAL PINJAM</th>
                                            <th>KELOLA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($data as $peminjam)
                                            <tr>
                                                <th>{{ $no++ }}</th>
                                                <td>{{ $peminjam->pengunjung->nama }}</td>
                                                <td>{{ $peminjam->buku->judul }}</td>
                                                <td>{{ $peminjam->created_at }}</td>
                                                <td>
                                                    <a class="badge bg-success"
                                                        href="/edit-peminjam/{{ $peminjam->id }}">Edit</a>
                                                    <a class="badge bg-danger" href="/delete-peminjam/{{ $peminjam->id }}"
                                                        onclick="return confirm('Apakah data mau di hapus?')">Hapus</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>NO</th>
                                            <th>PEMINJAM</th>
                                            <th>BUKU</th>
                                            <th>TANGGAL PINJAM</th>
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
