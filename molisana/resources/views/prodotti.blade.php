@extends("layouts.main")

@section("title")
  Prodotti
@endsection


@section("mainContent")
  <main class="home-main">
    <h1>Pagina Prodotti</h1>
    <div class="wrapper">

      @foreach($paste as $key => $tipo)

      <h2>{{strtoupper($key)}}</h2>
      <ul class="main-list">
        @foreach ($tipo as $product)
        <li>
          <div class="layover">
            <div class="layover-icon">
              <h3><a href="{{route('prodotto-singolo', $product["id"])}}">{{$product["titolo"]}}</a></h3>
              <a href="{{route('prodotto-singolo', $product["id"])}}"><img class="icona" src="{{asset('img/icon.svg')}}" alt=""></a>
            </div>
            <img class="img-prodotto" src="{{$product['src']}}" alt="img_pasta_lunga">
          </div>
        </li>
        @endforeach
      </ul>

      @endforeach
  </main>

@endsection