@extends('plantilla')
@section('perimetro')
<div class="row">
    <div class="col-lg-4">
        <h1>Calcular Area:</h1>

        @error('radio')
            <div class="alert alert-danger">
                El radio es obligatorio
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
        <form action="{{ route('area') }}" method="post">
            @csrf
            <input type="number" step="0.01" name="radio" placeholder="Ingrese el radio" value="{{ old('radio') }}">
                <label for="">metros</label>
                <button class="btn btn-dark btn-block btn-sm" type="submit">Area</button>
            </form>
        </div>
        <div class="col-lg-4">
            <div class="mt-5">
                @if (session('area'))
                <div class="alert alert-success">
                    {{ session('area') }}
                </div>
                @endif
                </div>
            </div>
        </div>
        <!--Perimetro-->
        <div class="row">
            <div class="col-lg-4">
                <h1>Calcular Perimetro:</h1>
                @error('radio2')
                    <div class="alert alert-danger">
                        El radio es obligatorio
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @enderror
                <form action="{{ route('perimetro') }}" method="post">
                    @csrf
                    <input type="number" step="0.01" name="radio2" placeholder="Ingrese el radio" value="{{ old('radio2') }}">
                        <label for="">metros</label>
                        <button class="btn btn-primary btn-block btn-sm" type="submit">Perimetro</button>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="mt-5">
                        @if (session('perimetro'))
                        <div class="alert alert-secondary">
                            {{ session('perimetro') }}
                        </div>
                        @endif
                        </div>
                    </div>
                </div>
@endsection