<div class="row mt-5 mb-5">
    @if ($block->input('reverse'))
    <div class="col">
        <img width="100%" src="{{$block->image('image','default')}}" class="img-fluid" alt="">
    </div>
    <div class="col p-4">
        <h3 class="mb-4">Title</h3>
        {!! $block->input('text') !!}
        @if ($block->input('button'))
        <a href="{{$block->input('url')}}" class="btn btn-primary">{{ $block->input('button') }}</a>
        @endif
    </div>
    @else
    <div class="col p-4">
        <h3 class="mb-4">Title</h3>
        {!! $block->input('text') !!}
        @if ($block->input('button'))
        <a href="{{$block->input('url')}}" class="btn btn-primary">{{ $block->input('button') }}</a>
        @endif
    </div>
    <div class="col">
        <img width="100%" src="{{$block->image('image','default')}}" class="img-fluid" alt="">
    </div>
    @endif

</div>
