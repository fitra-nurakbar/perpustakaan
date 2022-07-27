@extends('layouts.show')

@section('show')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Petugas</h1>
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
                                <h3 class="card-title">Data Tabel Petugas</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>FOTO PROFILE</th>
                                            <th>NAMA PETUGAS</th>
                                            <th>TUGAS</th>
                                            <th>HARI</th>
                                            <th>SHIFT</th>
                                            <th>KELOLA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($data as $petugas)
                                            <tr>
                                                <th>{{ $no++ }}</th>
                                                <td>
                                                    <img src="{{ asset('FotoProfile/'.$petugas->foto) }}" alt="{{ $petugas->foto }}" class="img-fluid img-thumbnail rounded-circle" width="40px"/>
                                                </td>
                                                <td>{{ $petugas->nama }}</td>
                                                <td>{{ $petugas->tugas->tugas }}</td>
                                                <td>{{ $petugas->hari->hari }}</td>
                                                <td>{{ $petugas->shift->shift }}</td>
                                                <td>
                                                    <a class="badge bg-success" href="/edit-petugas/{{ $petugas->id }}">Edit</a>
                                                    <a class="badge bg-danger" href="/delete-petugas/{{ $petugas->id }}"
                                                        onclick="return confirm('Apakah data mau di hapus?')">Hapus</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>NO</th>
                                            <th>FOTO PROFILE</th>
                                            <th>NAMA PETUGAS</th>
                                            <th>TUGAS</th>
                                            <th>HARI</th>
                                            <th>SHIFT</th>
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
