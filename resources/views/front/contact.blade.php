@extends('front.layouts.master')
@section('title', 'İletişim')
@section('bg','https://www.okida.com/en/wp-content/uploads/2018/04/cu.jpg')
@section('content')
    <div class="col-md-10 col-lg-8 col-xl-7">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </div>
            @endif
        <p>Bizimle İletişime Geçebilirsiniz</p>
        <div class="my-5">

            <form id="contactForm" method="post" action="{{ route('contact.post') }}">
                @csrf
                <div class="form-floating">
                    <input class="form-control" name="name" value="{{ old('name') }}" id="name" type="text" required placeholder="Adınızı ve Soyadınızı Girin"/>
                    <label for="name">Ad Soyad</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" name="email" value="{{ old('email') }}" id="email" type="email" required placeholder="Mail Adresiniz"/>
                    <label for="email">Email Adresi</label>
                </div>

                <div class="form-floating">
                    <textarea class="form-control" id="message" name="message" placeholder="Mesajınız" style="height: 12rem">{{ old('message') }}</textarea>
                    <label for="message">Mesajınız</label>
                </div>
                <br />
                <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Gönder</button>
            </form>
        </div>
    </div>
@endsection






