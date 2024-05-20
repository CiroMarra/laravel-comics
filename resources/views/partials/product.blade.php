<section class="product">

    <div class="container-fluid bg-primary justify-content-center">
        <div class="row justify-content-center">
            @foreach ($card as $cards)
            <div class="col-6 col-md-4 col-lg-3 col-xl-2 py-3">
                <div class="card ">
                    <img src="{{ Vite::asset('resources/img/buy-' . $cards['src']) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">{{ $cards['text'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>