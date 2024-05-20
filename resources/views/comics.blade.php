@extends('layouts.app')

@section('page-title')
    comics
@endsection

@section('content')
    <section class="current-series">
        <div class="container pb-5">
            <div class="title rect py-3 curr">
                <div class="fs-5 me-5 text-white btn btn-primary curr">current series</div>
                <div class="row py-4 g-3">
                    
                    @foreach ($comics as $comic)
                        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="img-container">
                                <img src="{{ $comic['thumb'] }}"  alt="{{ $comic['series'] }}">
                            </div>
                            <div class="text pt-4">{{ $comic['series'] }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection