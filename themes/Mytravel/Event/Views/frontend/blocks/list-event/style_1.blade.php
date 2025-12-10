<div class="bravo-list-event product-card-block product-card-v2 border-bottom border-color-8" 
 style="background-image: url('uploads/0000/6/2024/12/12/top-destrination-bg.png') !important"
 >
    <div class="container space-1">
        <!--d-flex  align-items-end-->
        @if(!empty($title))
            <div class="justify-content-between mb-3 pt-md-3 mt-1 pb-md-3 mb-md-2 align-items-center align-center text-center">
                <div class="font-weight-bold font-size-xs-20 font-size-30 mb-0 text-lh-sm">
                    {{$title}}
                    <small class="font-size-xs-14 font-size-14 mb-0 text-lh-sm d-block mt-1">
                        {{ $desc }}
                    </small>
                </div>
                {{--<a href="{{ route("event.search") }}" class="font-weight-bold d-flex text-lh-1 mb-md-2 ml-2 align-items-right align-right text-right d-none">{{ __("More") }}
                    <i class="flaticon-right-arrow ml-2"></i>
                </a>--}}
            </div>
        @endif
        <div class="row">
            @foreach($rows as $row)
                <div class="col-md-6 col-lg-{{$col ?? 3}} col-xl-{{$col ?? 3}} mb-3 mb-md-4 pb-1">
                    @include('Event::frontend.layouts.search.loop-grid')
                </div>
            @endforeach
        </div>
        <div class="row text-center">
            <a href="{{ route("event.search") }}" class="font-weight-bold text-lh-1 mb-md-2 ml-2 align-items-center align-center text-center">{{ __("More") }}
                    <i class="flaticon-right-arrow ml-2"></i>
                </a>
        </div>
    </div>
</div>