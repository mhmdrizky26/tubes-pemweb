@extends('layouts.app')

@section('content')

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah User</h1>
            </div>
            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-book-open"></i> Tambah User</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>NAMA</label>
                                <input id="name" class="form-control" type="text" name="name" placeholder="Masukkan Nama" :value="old('name')" required autofocus autocomplete="name">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                <label>EMAIL</label>
                                <input id="email" class="form-control" type="email" name="email" placeholder="Masukkan Email" :value="old('email')" required autocomplete="username" >
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                <label>PASSWORD</label>
                                <input id="password" class="form-control" type="password" name="password" placeholder="Masukkan Password" required autocomplete="new-password"  >
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                <label>CONFIRM PASSWORD</label>
                                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" placeholder="Masukkan Password" required autocomplete="new-password" >
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
                                SIMPAN</button>
                            <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i>
                                RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@stop
