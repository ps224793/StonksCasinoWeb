@extends('layouts.app')
@section('titel', 'StonksCasino')
@section('nav-Home', 'active')
    @section('content')
        <div class="container ">
            <div class="row mx-auto">
                <div class="col-12 my-5 card-registreer p-0 m-0 card card-body ">
                    <div class="Titelbar-accounts">
                        <h3 class="p-2 m-0">Geld storten</h3>
                    </div>
                    
                    <div class="container account-info">
                        <div class="row">
                            <div class="col-md-6">
                                <br>
                                <p class="m-0">Huidig saldo: €1000</p>
                                <br>
                                <label for="token">Geld Storten</label>
                                <input type="text" id="token"  class="form-control" name="token" placeholder="Voer hier uw bedrag in">
                             <br>
                        <button type="submit" class="btn btn-lg btn-groen ">Betalen</button>

                            </div>
                            <div class="col-md-6">
                                <br>
                                <p class="paymend-method">Betaalmethode's</p>
                                <div class="row img-payment">
                                    <div class="col-auto"><img src="{{ asset('img/ideal.png') }}" alt=""></div>
                                    <div class="col-auto"><img src="{{ asset('img/paypal.png') }}" alt=""></div>
                                    
                                </div>
                            </div>
                         
                        </div>
                    </div>
                    <br>
                </div>
            </div>
                <div class="row mx-auto ">
                <div class="col-12 card-registreer mb-5 p-0 m-0 card card-body ">
                    <div class="Titelbar-accounts">
                        <h3 class="p-2 m-0">Account informatie</h3>
                    </div>
                    
                    <div class="container account-info">
                        <div class="row w-100">
                            <div class="col-auto">
                                <br>
                                <h3>
                                    Gebruikersnaam: Mylo
                                </h3>
                                <a href="" class="groen">Verander mijn gebruikersnaam</a>
                                <br> <br>
                                <h3>
                                    E-mailadres: rongenmylo@gmail.com
                                </h3>
                                <a href="" class="groen">Verander mijn e-mailadres</a>
                                <br>
                                <a href="" class="groen">Verander mijn wachtwoord</a>
                                    <br><br>
                            </div>
                            <div class="col d-none  d-md-block jusitfy-content-center ">
                                <br>
                                <img class="account-logo d-flex mx-auto " src="{{ asset('img/accountlogo.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
        