@extends('layouts/app')

@section('content')

<div class="container py-5">
    <h1 class="mb-4">Trenitalia</h1>

    @dump($trains)

    <h2>Treni per oggi</h2>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Compagnia</th>
            <th scope="col">Partenza da</th>
            <th scope="col">Arrivo a</th>
            <th scope="col">Orario Partenza</th>
            <th scope="col">Orario Arrivo</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
            <tr class="{{ $train->is_on_time ? 'table-warning' : '' }} {{$train->is_cancelled ? 'table-danger' : ''}}">
                <td>{{$train->company}}</td>
                <td>{{$train->departure_station}}</td>
                <td>{{$train->arrival_station}}</td>
                <td>
                    @php

                    // creare un oggetto datetime
                    $datetime = DateTime::createFromFormat("Y-m-d H:i:s", $train->departure);
                    echo $datetime->format('H:i');
                        
                    @endphp 
                </td>
                <td>
                    @php

                    // creare un oggetto datetime
                    $datetime = DateTime::createFromFormat("Y-m-d H:i:s", $train->arrival);
                    echo $datetime->format('H:i');
                        
                    @endphp 
                </td>
            </tr>
                
            @endforeach
        </tbody>
      </table>
</div>

@endsection