@extends('layouts.index')

@section('content')
    <section class="content-header">
        <h1>
            Admin
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active">Tambah</li>
        </ol>
    </section>

    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h4 class="box-title">Tambah Admin</h4>
                        </div>
                        <form action="{{ route('admin.store') }}" method="POST"
                            onsubmit="return confirm('Pastikan semua data sudah benar?')">
                            @csrf
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" id="username" name="username"
                                                class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}"
                                                placeholder="Masukkan Username" value="{{ old('username') }}">
                                            <small class="text-danger">{{ $errors->first('username') }}</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="number" name="phone" id="phone"
                                                class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}"
                                                placeholder="Masukkan Nomor Telepon" value="{{ old('phone') }}"></input>
                                            <small class="text-danger">{{ $errors->first('phone') }}</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="role">Role</label>
                                            <select name="role" id="role" class="form-control">
                                                <option value="0">Admin</option>
                                                <option value="1">Operator</option>
                                            </select>
                                            <small class="text-danger">{{ $errors->first('role') }}</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" id="email" name="email"
                                                class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                                placeholder="Masukkan Email" value="{{ old('email') }}">
                                            <small class="text-danger">{{ $errors->first('email') }}</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" id="password" name="password"
                                                class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                                placeholder="Masukkan Password" value="{{ old('password') }}">
                                            <small class="text-danger">{{ $errors->first('password') }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
