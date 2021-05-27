@extends('layouts.app')
@section('titel', 'StonksCasino')
@section('nav-Home', 'active')
    @section('content')
        <div class="container">
            <div class="row   w-lg-50 mx-auto">
                <div class="col my-5 card-registreer card card-body ">                            
                    <form action="/accounts" method="POST">
                        @csrf 
                        <div class="form-group">
                            <label for="firstname">Voornaam</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Voer je voornaam in.">
                            @error('firstname') <div class="alert alert-danger"> {{ $message }}</div>@enderror
                        </div>

                        <div class="form-group">
                            <label for="lastname">Achternaam</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Voer je achternaam in.">
                        </div>

                        <div class="form-group">
                            <label for="username">Gebruikersnaam</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Voer je gebruikersnaam in.">
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Voer je e-mailadres in.">
                        </div>

                        <div class="form-group">
                            <label for="password">Wachtwoord</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Voer een wachtwoord in.">
                        </div>

                        <div class="form-group">
                            <label for="dateofbirth">Geboortedatum</label>
                            <input type="date" class="form-control" id="dateofbirth" name="dateofbirth">
                        </div>
                       <div class="col text-center">
                        <button type="submit" class="btn btn-groen ">Registreren</button>
                       </div>                                       
                    </form>    
                    <br>
                    <p class="text-center">Heb je een account? <a href="" class="groen">Inloggen.</a></p>         
                </div>
            </div>
        </div>
    @endsection