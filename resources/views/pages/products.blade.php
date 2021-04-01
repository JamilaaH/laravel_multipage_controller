@extends('layout.index')

@section('content')
    @foreach ($products as $product)
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex {{$product->value1}} rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper">{{$product->titre}}</span>
                                <span class="section-heading-lower">{{$product->soustitre}}</span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src={{$product->photo}}
                        alt="">
                    <div class="product-item-description d-flex {{$product->value2}}">
                        <div class="bg-faded p-5 rounded">
                            <p class="mb-0">{{$product->texte}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endforeach
@endsection
