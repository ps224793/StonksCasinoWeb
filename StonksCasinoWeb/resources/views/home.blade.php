@extends('layouts.app')

@section('titel', 'StonksCasino')
@section('nav-Home', 'active')
@section('content')
<div class="container">
    <div class="row card-layout">
        <div class="col-12 col-md-6 col-lg-4 d-table card-margin">
            <div class="card-home card card-body d-table-cell align-middle">
                
                <div class="row">
                    <div class="col-12">
                        <label class="titel-card">Download de StonksCasino app nu!</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <img class="img-fluid" src="{{ asset('img/stonks.png') }}" alt="">
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <input type="button" class="btn btn-success btn-lg btn-download" value="Download">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 d-table card-margin">
            <div class="card-home card card-body d-table-cell align-middle">

            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 d-table card-margin">
            <div class="card-home card card-body d-table-cell align-middle">

            </div>
        </div>
    </div>
</div>

@endsection
    
