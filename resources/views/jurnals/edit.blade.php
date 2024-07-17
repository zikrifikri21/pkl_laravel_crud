@extends('template')
@section('content')
    <section class="container">
        <form action="{{ route('jurnals.update', $jurnal->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="hari" class="form-label">Hari/Tanggal</label>
                                <input type="date" name="hari" class="form-control" id="hari"
                                    value="{{ $jurnal->hari_tgl }}">
                            </div>
                            <div class="mb-3">
                                <label for="jenis" class="form-label">Jenis Pekerjaan</label>
                                <input type="text" name="jenis" class="form-control" id="jenis"
                                    value="{{ $jurnal->jenis_pekerjaan }}">
                            </div>
                            <div class="mb-3">
                                <label for="solusi" class="form-label">Solusi</label>
                                <textarea class="form-control" name="solusi" id="solusi" cols="10" rows="3">{{ $jurnal->solusi }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="jenis" class="form-label">Alat Bahan</label>
                                <input type="text" name="alat" class="form-control" id="jenis"
                                    value="{{ $jurnal->alat }}">
                            </div>
                            <div class="mb-3">
                                <label for="masalah" class="form-label">Masalah</label>
                                <textarea class="form-control" name="masalah" id="masalah" cols="10" rows="3">{{ $jurnal->masalah }}</textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
