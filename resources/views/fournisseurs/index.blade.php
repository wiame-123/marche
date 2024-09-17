@extends('layouts.main')
@section('title', 'Liste des marches')
@section('content')
@include('partials.header')
<div class="page-header" id="banner">
    <div class="row">
        <div class="col-lg-8 col-md-7 col-sm-6">
        <a href="{{ route('fournisseurs.create') }}" class="me-2 btn btn-success fw-bolder">Ajouter fournisseur</a>


                      </div>

    </div>
</div>
<div class="row mt-1">
<div class="
col-md-12 mb-4">
    <table class="table table-hover">
        <thead>
        <tr class="table-success">
            <th scope="col">id</th>
            <th scope="col">nom</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
            @foreach($fournisseurs as $fournisseur)
            <tr>

                <td>{{ $fournisseur->id }}</td>
                <td>{{ $fournisseur->name }}</td>

                <td><a type="button" class="btn btn-success"  href="{{ route('fournisseurs.show', ['fournisseur' => $fournisseur->id]) }}"> voir details </a> </td>
                <td><a type="button" class="btn btn-success"  href="{{ route('fournisseurs.edit', ['fournisseur' => $fournisseur->id]) }}"> modifier </a> </td>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection
