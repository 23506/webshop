@extends('admin.master')

@section('content')
    <form method="post" action="{{route('products.store')}}">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="name" class="col-12 col-sm-3 text-sm-right mt-1">Naam</label>
            <div class="col-12 col-sm-9">
                <input id="name" type="text" placeholder="Naam..." name="name" required autocomplete="off"
                       class="form-control" autofocus>
            </div>
        </div>

        <div class="form-group row">
            <label for="genre" class="col-12 col-sm-3 text-sm-right mt-1">Genre</label>
            <div class="col-12 col-sm-9">
                <select class="form-control" id="genre" name="genre" required>
                    <option name="RPG">RPG</option>
                    <option name="MMO">MMO</option>
                    <option name="Shooter">Shooter</option>
                    <option name="FPS">FPS</option>
                    <option name="Platformer">Platformer
                    </option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="studio" class="col-12 col-sm-3 text-sm-right mt-1">Studio</label>
            <div class="col-12 col-sm-9">
                <input id="studio" type="text" placeholder="Studio..." name="studio" required autocomplete="off"
                       class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label for="price" class="col-12 col-sm-3 text-sm-right mt-1">Prijs (in centen)</label>
            <div class="col-12 col-sm-9">
                <input id="price" type="number" name="price" required autocomplete="off" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label for="release_date" class="col-12 col-sm-3 text-sm-right mt-1">Uitgebracht op</label>
            <div class="col-12 col-sm-9">
                <input id="release_date" type="date" placeholder="Datum..." name="release_date" required
                       autocomplete="off" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-12 col-sm-3 text-sm-right mt-1">Beschrijving</label>
            <div class="col-12 col-sm-9">
                <textarea rows="7" id="description" placeholder="Beschrijving..." required
                          class="form-control" name="description"></textarea>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-primary mx-auto" type="submit">
                Opslaan
            </button>
        </div>
    </form>
@endsection