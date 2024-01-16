@extends('components.layout')

@section('content')

<main style="background-color: #F8F9FA">
    @include('components.carousel')

    <div class="container py-5">

        {!! $data->renderBlocks() !!}

        {{-- <section>
            <div class="container py-5">
                <div class="row pb-4">
                    <div class="col-md-12 text-center">
                        <h2 class="mb-4">{{__('links.events')}}</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach ($events as $event)
                    <div class="col d-flex justify-content-center p-4">
                        @include('components.card', ['event' => $event])
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section>
            <div class="row">
                <div class="col">
                    <img src="{{asset('assets/images/slika1.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col p-4">
                    <h3 class="mb-4">Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, adipisci alias aliquid
                        architecto asperiores aspernatur atque autem blanditiis commodi consequatur cumque cupiditate
                        delectus deleniti dicta dignissimos dolor doloremque doloribus ducimus ea earum eius eligendi
                        error esse est et eum eveniet excepturi exercitationem expedita explicabo facere fugiat fugit
                        harum hic id illum impedit.
                    </p>
                    <a href="#" class="btn btn-primary">{{__('links.see_more')}}</a>
                </div>
            </div>
        </section>

        @include('components.team')

        <section style="margin-bottom: 100px;">
            <div class="row">
                <div class="col p-4">
                    <h3 class="mb-4">Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, adipisci alias aliquid
                        architecto asperiores aspernatur atque autem blanditiis commodi consequatur cumque cupiditate
                        delectus deleniti dicta dignissimos dolor doloremque doloribus ducimus ea earum eius eligendi
                        error esse est et eum eveniet excepturi exercitationem expedita explicabo facere fugiat fugit
                        harum hic id illum impedit.
                    </p>
                    <a href="#" class="btn btn-primary">{{__('links.see_more')}}</a>
                </div>
                <div class="col">
                    <img src="{{asset('assets/images/slika1.jpg')}}" class="img-fluid" alt="">
                </div>
            </div>
        </section>

        @include('site.blocks.contact-form') --}}

    </div>

</main>
@endsection
