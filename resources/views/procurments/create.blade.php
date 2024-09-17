@extends('layouts.main')
@section('title', 'Liste des marches')
@section('content')
@include('partials.header')

<div class="row">
    <div class="col-md-12 mx-auto">
        <form action="{{ route('procurments.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="lang" id="lang"  value="fr">
        <div class="row">


                <div class="col-md-12">
                    <div class="bs-component">
                        <div class="card mb-3">
                            <h3 class="card-header text-center">Données relatives à la fonction</h3>
                            <div class="card-body">
                                <div class="row g-3">
									<div class="col-md-6">
										<div class="form-group">
											<label for="title">Titre</label>
											<input type="text" name="objet" id="objet" class="form-control @error('objet')is-invalid @enderror" value="{{ old('objet') }}">
											@error('objet')
											<div class="text-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
                                    <div class="col-md-6">
										<div class="form-group">
											<label for="title">description</label>
											<input type="text" name="description" id="description" class="form-control @error('description')is-invalid @enderror" value="{{ old('description') }}">
											@error('description')
											<div class="text-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
                                    <div class="col-md-4">
										<div class="form-group">

                                            <button class="btn btn-success">Ajouter </button>

										</div>
									</div>



                                </div>
                                <br/>
                            </div>
						</div>
                    </div>
                </div>

			</div>
        </form>
    </div>
</div>
@endsection
