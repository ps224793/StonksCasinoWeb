@extends('layouts.app')
@section('titel', 'StonksCasino')
@section('nav-Home', 'active')
    @section('content')
        <div class="container width-login">
            <div class="row mx-auto">
                <div class="col my-5 card-registreer card card-body ">                            
                    <form action="/accounts" method="POST">
                        @csrf 
                        <div class="form-group">
                            <label for="username">Gebruikersnaam</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Voer je gebruikersnaam in.">
                            @error('username') <div class="alert alert-danger"> {{ $message }}</div>@enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Wachtwoord</label>
                            <input type="password" class="form-control" id="lastname" name="lastname" placeholder="Voer je wachtwoord in.">
                        </div>
                        <a href="" class="groen">Wachtwoord vergeten?</a>
                        <br>
                        <br>
                        <div class="row">

                     
                        <div class="col-auto d-flex align-items-center justify-content-center">
                            <input  type="checkbox" name="Remember" id="Remember"> 
                            <label class="m-0 ml-" for="Remember">Herriner mij</label>
                        </div>
                       <div class="col ">
                        <button type="submit" class="btn btn-groen ">Inloggen</button>
                       </div> 
                    </div>                           
                    </form>    
                    <br>
                    <p class="text-center">Heb je nog geen account? <a href="" class="groen">Registreer.</a></p>         
                </div>
            </div>
        </div>
    @endsection