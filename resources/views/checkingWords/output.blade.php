@extends('layouts.index')

@section('content')
    <section class="content-header">
        <h1>
            Hasil Count
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Hasil Count</a></li>
        </ol>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="box box-primary">
                        <div class="box-header">
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="hasil_output">Hasil Output</label>
                                        <input type="text" id="hasil_output" name="hasil_output" class="form-control"
                                            value="{{ $count_input1 }} %" readonly>
                                        <h1 class="text-red">
                                            Ada {{ $count_input1 }} % kata yang sama dengan input 1 dari input 2
                                            <br />
                                            yaitu kata :
                                            @foreach ($feedback as $f)
                                                <br />
                                                {{ $f }}
                                            @endforeach
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
