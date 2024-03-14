{{-- prima pagina di atterraggio del utente con estenzione del pirmo layouts --}}

@extends('layouts.LayoutBase')


@section('titolo')
    <div class="m-5">

        <h1>movies</h1>
    </div>

    <div class="container flex-wrap d-flex ">

        @foreach ($movies as $element)
            <div class="card">

                <div class="card-body">
                    <h4 class="card-title">{{ $element['title'] }}</h4>
                    <p class="card-text">{{ $element['original_title'] }}</p>
                    <div class="d-flex flex-column ">
                        <span>{{ $element['nationality'] }}</span>
                        <span>{{ $element['date'] }}</span>
                        <span>{{ $element['vote'] }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
