@extends('layouts/app')

@section('content')

<div class="container py-5">
    <h1>Trenitalia</h1>

    {{-- @dump($trains) --}}
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
            <tr>
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