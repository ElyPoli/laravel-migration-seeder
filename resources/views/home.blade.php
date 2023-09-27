@extends('layouts.public')

@section('content')
    <div class="main-home">
        <div class="container pt-5 pb-5">
            <h1 class="pb-5 m-0 text-center text-white">Treni in partenza a partire da oggi:</h1>
            <div class="table-responsive">
                <table class="table my-table table-striped align-middle text-center">
                    <thead> 
                        <tr class="text-nowrap">
                            <th scope="col" class="custom-width">Azienda</th>
                            <th scope="col" class="custom-width">Stazione di partenza</th>
                            <th scope="col" class="custom-width">Stazione di arrivo</th>
                            <th scope="col" class="custom-width">Data di partenza</th>
                            <th scope="col" class="custom-width">Orario di partenza</th>
                            <th scope="col" class="custom-width">Orario di arrivo</th>
                            <th scope="col" class="custom-width">Numero di carrozze</th>
                            <th scope="col" class="custom-width">Codice treno</th>
                            <th scope="col" class="custom-width">Note</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trainsList as $train)
                            <tr class="{{ $train->cancellato == 1 ? 'table-danger' : '' }}">
                                <td>{{ $train->azienda }}</td>
                                <td>{{ $train->stazione_di_partenza }}</td>
                                <td>{{ $train->stazione_di_arrivo }}</td>
                                <td>{{ $train->data_di_partenza }}</td>
                                <td>{{ substr($train->orario_di_partenza, 0, 5) }}</td>
                                <td>{{ substr($train->orario_di_arrivo, 0, 5) }}</td>
                                <td>{{ $train->numero_carrozze }}</td>
                                <td class="text-uppercase">{{ $train->codice_treno }}</td>
                                <td class="fw-bold fst-italic">
                                    {{ $train->in_orario == 1 ? null : 'Treno in ritardo' }}
                                    {{ $train->cancellato == 1 ? 'Cancellato' : null }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
