@extends('layouts.main')
@section('title', 'Liste des marches')
@section('content')
@include('partials.header')
<div class="page-header" id="banner">
    <div class="row">
        <div class="col-lg-8 col-md-7 col-sm-6">
        <a href="{{ route('procurments.create') }}" class="me-2 btn btn-success fw-bolder">Ajouter marche</a>
            <h2>Liste des participants </h2>
        </div>
    </div>
</div>

test
@endsection
