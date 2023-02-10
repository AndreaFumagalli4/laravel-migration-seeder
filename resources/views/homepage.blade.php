@extends('layouts.app')

@section('title', 'Trains')

@section('main-content')
    <div class="container">
        <div class="row">

            @forelse ($trains as $train)
                <div class="col-3">
                    <div class="card p-3 mb-3">
                        <p>
                            Company: {{ $train->company }}
                        </p>
                        <p>
                            Train: {{ $train->train_code }}
                        </p>
                        <p>
                            From: {{ $train->departure_station }}
                        </p>
                        <p>
                            To: {{ $train->arrival_station }}
                        </p>
                        <p>
                            Arrival time: {{ $train->time_of_arrival }}
                        </p>
                    </div>
                </div>
            @empty
                <p>
                    Non ci sono treni in arrivo
                </p>
            @endforelse ()
            
        </div>
    </div>
@endsection
