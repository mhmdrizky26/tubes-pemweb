@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Tag</h1>
            </div>

            <div class="section-body">

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-tags"></i> Edit Tag</h4>
                    </div>

                    <div class="card-body">
                        <form action="" method="">
                            <div class="form-group">
                                <label>NAMA TAG</label>
                            </div>

                            <button class="btn btn-primary mr-1 btn-submit" type=""><i class="fa fa-paper-plane"></i>
                                UPDATE</button>
                            <button class="btn btn-warning btn-reset" type=""><i class="fa fa-redo"></i>
                                RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
