@extends('layouts.main')

@section('content')

   <div class="container">
      <h1>Film</h1>
      <div class="d-flex flex-wrap">
         @forelse ($travels as $travel)
            
            <div class="card m-2" style="width: 18rem;">
                  <div class="card-body">
                     <h4 class="card-title">{{ $travel->hotel_name }}</h4>
                     <h5 class="card-subtitle mb-2 text-muted">Cittá: {{ $travel->city }}</h5>
                     <p class="card-text">Nazione: {{ $travel->country }}</p>
                     <p class="card-text">Indirizzo: {{ $travel->address }}</p>
                     <p class="card-text">Stelle: {{ $travel->stars }}</p>
                  </div>
            </div>
         @empty
            <h3>Nessun film trovato</h3>
         @endforelse
      </div>
   </div>
   
@endsection