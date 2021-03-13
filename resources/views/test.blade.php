@extends('layout.app')

@section('content')
  <section>
    <div class="container">
      @foreach ($types_list as $type => $pasta)
          <div>
            <h2>Le {{$type}}</h2>
          </div>
        <div>
          {{-- ciclo l'array di pasta normalmente come in scheda prodotti ma per tipologia --}}
            @foreach ($pasta as $key => $pasta_type)
                <div>
                  <img src="{{ $pasta_type['src'] }}">
                    <a>
                      {{ $pasta_type['titolo'] }}
                    </a>
            @endforeach

        </div>
      @endforeach
    </div>
  </section>
@endsection
