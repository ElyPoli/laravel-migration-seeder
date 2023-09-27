@extends('layouts.public')

@section('content')
    <div class="container">
        <h1>Laravel - Migration-Seeder</h1>
        <div class="row row-cols-2 row-cols-md-3 gy-4">
            @foreach ($trainsList as $train)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <ul class="list-unstyled card-text">
                                <li><span class="fw-bold">Azienda</span> {{ $train->azienda }}</li>
                                <li><span class="fw-bold">Stazione di partenza: </span> {{ $train->stazione_di_partenza }}</li>
                                <li><span class="fw-bold">Stazione di arrivo: </span> {{ $train->stazione_di_arrivo }}</li>
                                <li><span class="fw-bold">Orario di partenza: </span> {{ $train->orario_di_partenza }}</li>
                                <li><span class="fw-bold">Orario di arrivo: </span> {{ $train->orario_di_arrivo }}</li>
                                <li><span class="fw-bold">Codice treno: </span> {{ $train->numero_carrozze }}</li>
                                <li><span class="fw-bold">Treno in orario: </span> {{ $train->in_orario }}</li>
                                <li><span class="fw-bold">Treno cancellato: </span> {{ $train->cancellato }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
