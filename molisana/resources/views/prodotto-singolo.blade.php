@extends("layouts.main")

@section("title")
  Prodotti
@endsection

@section("mainContent")

  <main id="single-product-main">
    <h1>{{$prodotto["titolo"]}}</h1>
    <div class="wrapper">
      <div class="img-top">
        <img src="{{$prodotto['src-h']}}" alt="">
      </div>
      <div class="img-btm">
        <img src="{{$prodotto['src-p']}}" alt="">
      </div>
      <div class="wrapper-description">
        <div class="description">
          <p>{!!$prodotto["descrizione"]!!}</p>
        </div>
      </div>
    </div>

    @if($id > 0)
      <a class="prev" href="{{route('prodotto-singolo', $id - 1)}}">
        <i class="fas fa-angle-left"></i>
      </a>
    @endif

    @if($id < $totale - 1)
      <a class="next" href="{{route('prodotto-singolo', $id + 1)}}">
        <i class="fas fa-angle-right"></i>
      </a>
    @endif

  </main>

@endsection