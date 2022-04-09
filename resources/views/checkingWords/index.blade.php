@extends('layouts.index')

@section('content')
    <section class="content-header">
        <h1>
            Fungsi Count
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Fungsi Count</a></li>
        </ol>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="box box-primary">
                        <div class="box-header">
                        </div>
                        <form action="{{ route('FunctionName') }}" method="POST"
                            onsubmit="return confirm('lakukan pengecekan ?')">
                            @csrf
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="input_1">Input 1</label>
                                            <input type="text" id="input_1" name="input_1"
                                                class="form-control {{ $errors->has('input_1') ? 'is-invalid' : '' }}"
                                                placeholder="Masukkan Input 1" value="{{ old('input_1') }}">
                                            <small class="text-danger">{{ $errors->first('input_1') }}</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="input_2">Input 2</label>
                                            <input type="text" id="input_2" name="input_2"
                                                class="form-control {{ $errors->has('input_2') ? 'is-invalid' : '' }}"
                                                placeholder="Masukkan Input 2" value="{{ old('input_2') }}">
                                            <small class="text-danger">{{ $errors->first('input_2') }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button class="btn btn-primary" type="submit">Check</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
