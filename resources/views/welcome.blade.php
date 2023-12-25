@extends('components.layout')

@section('content')

    @include('components.carousel')

    <section>
        <div class="container py-5">
            <div class="row pb-4">
                <div class="col-md-12 text-center">
                    <h2 class="mb-4">{{__('links.events')}}</h2>
                </div>
            </div>
            <div class="row">
{{--                <div class="col d-flex justify-content-center p-4">--}}
{{--                    @include('components.card', ['title' => $event->title, 'eventId' => $event->id])--}}
{{--                </div>--}}
{{--                <div class="col d-flex justify-content-center p-4">--}}
{{--                    @include('components.card', ['title' => $event->title, 'eventId' => $event->id])--}}
{{--                </div>--}}
{{--                <div class="col d-flex justify-content-center p-4">--}}
{{--                    @include('components.card', ['title' => $event->title, 'eventId' => $event->id])--}}
{{--                </div>--}}
            </div>
        </div>
    </section>

    <section style="background-color: #F8F9FA">
        <div class="container py-5">
            <div class="row pb-4">
                <div class="col-md-12 text-center">
                    <h2 class="mb-4">{{__('links.reports')}}</h2>
                </div>
            </div>
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
        </div>
    </section>
@endsection
