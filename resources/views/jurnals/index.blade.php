@extends('template')
@section('content')
    <section class="container">
        <div class="row mb-4">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <h5 class="card-title">Create jurnal</h5>
                    <form action="{{ route('jurnals.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="hari" class="form-label">Hari/Tanggal</label>
                                    <input type="date" name="hari" class="form-control" id="hari">
                                </div>
                                <div class="mb-3">
                                    <label for="jenis" class="form-label">Jenis Pekerjaan</label>
                                    <input type="text" name="jenis" class="form-control" id="jenis">
                                </div>
                                <div class="mb-3">
                                    <label for="solusi" class="form-label">Solusi</label>
                                    <textarea class="form-control" name="solusi" id="solusi" cols="10" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="jenis" class="form-label">Alat Bahan</label>
                                    <input type="text" name="alat" class="form-control" id="jenis">
                                </div>
                                <div class="mb-3">
                                    <label for="masalah" class="form-label">Masalah</label>
                                    <textarea class="form-control" name="masalah" id="masalah" cols="10" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">List jurnal</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Hari/Tanggal</th>
                                    <th scope="col">Jenis Pekerjaan</th>
                                    <th scope="col">Solusi</th>
                                    <th scope="col">Alat Bahan</th>
                                    <th scope="col">Masalah</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jurnals as $no => $jurnal)
                                    <tr>
                                        <th scope="row">{{ $no + 1 }}</th>
                                        <td>{{ $jurnal->hari_tgl }}</td>
                                        <td>{{ $jurnal->jenis_pekerjaan }}</td>
                                        <td>{{ $jurnal->solusi }}</td>
                                        <td>{{ $jurnal->alat }}</td>
                                        <td>{{ $jurnal->masalah }}</td>
                                        <td>
                                            <a href="{{ route('jurnals.edit', $jurnal->id) }}">edit</a>
                                            <form action="{{ route('jurnals.destroy', $jurnal->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
