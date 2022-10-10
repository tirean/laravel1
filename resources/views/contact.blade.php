@extends('layout')
@section('content')

pagina de contact


<form action="/contact" method="POST">
    @csrf

    <label for="nume">Nume</label>
    <input type="text" name="nume">


    <label for="telefon">Telefon</label>
    <input type="text" name="telefon">

    <input type="submit" name="submit" value="Trimite">

</form>

@endsection
