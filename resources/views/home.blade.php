@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <div class = 'cekong-header'>
        <h1></h1>
        <p class=lead>
        </p>
    </div> --}}

{{-- Home --}}
    <div class="bg-image">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center pt-5">
            <div class="d-flex justify-content-center align-items-center">
                <div class="button">
                    <div class="text-center mt-5 pt-5">
                        <a class="btn btn-primary mt-5 text-white" href="#about">Let's Check</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-section text-center" id="about">
        <div class="card">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Cek Ongkirmu Disini!</h4>
            </div>
            <div class="card-body">
                <form action="">
                    @csrf
                    <div class="form-row">
                        <div class="col">
                            <h5 class="text-muted">Asal Pengirim:</h5>
                            <div class="form-group">
                                <label for="">Provinsi</label>
                                <select name="origin_province" id="provinsi" class="form-control">
                                    <option value="#">-</option>
                                    @foreach ($province as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- <div class="form-group">
                                <label for="">Kota/Kabupaten</label>
                                <select name="origin_city" id="" class="form-control">
                                    <option value="#">-</option>
                                </select>
                            </div>
                            <h5 class="text-muted">Tujuan Pengirim:</h5>
                            <div class="form-group">
                                <label for="">Kota/Kabupaten</label>
                                <select name="destination_city" id="destination_city" class="form-control">
                                    <option value="#">-</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <h5 class="text-muted">Pilih Expedisi:</h5>
                            @foreach ($courier as $key => $value)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="courier-{{ $key }}" name="courier[]" value="{{ $value->code }}">
                                <label class="form-check-label" for="courier-{{ $key }}">{{ $value->title }}</label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div> --}}
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
