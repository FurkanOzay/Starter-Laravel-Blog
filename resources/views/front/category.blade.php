@extends('front.layouts.master')
@section('title', $category->name.' Kategorisi |'.count($articles). ' Yazı Bulundu')
@section('content')

    <div class="col-md-8 col-lg-8 col-xl-7">
        @include('front.widgets.articleList')
    </div>
    @include('front.widgets.categoryWidget')
@endsection
