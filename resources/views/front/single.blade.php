@extends('front.layouts.master')
@section('title', $article->title)
@section('bg',$article->image)
@section('content')

    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-8">
                <div class="col-md-8 col-lg-8 col-xl-8">
                    <p>{{ $article->content }}</p>
                </div>
                @include('front.widgets.categoryWidget')
            </div>
        </div>
    </article>
    <div class="col-md-4">
        <h6>Okunma Sayısı: <span class="text-success"  >{{ $article->hit }}</span> </h6>
    </div>
@endsection
