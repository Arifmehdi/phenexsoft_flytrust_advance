@if($list_item)
    <div class="bravo-featured-item {{$style ?? ''}} @if(empty($border_none)) border-bottom @endif" 
    style="background-image: url('uploads/0000/6/2024/12/26/why-choose-us-2.jpg') !important; background-size: cover; background-position: center; background-repeat: no-repeat; height:100%; width: 100%;">
        <div class="container text-center" style="
        margin-top:10px;
        margin-bottom:30px;
        "> {{-- space-1 --}}
            <div class="w-md-80 w-lg-50 text-center mx-md-auto pb-1 pt-5"> {{-- pt-3 --}}
                <h2 class="section-title text-black font-size-30 font-weight-bold">{{ $title ?? '' }}</h2>
            </div>
            <div class="row">
                @foreach($list_item as $item)
                    <div class="col-md-4">
                        <div style="background-image: url('images/card-bg.png'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 20px; height:100%; width: 100%;">
                            <div class="d-flex align-items-center gap-3 p-3 mt-3">
                                <i class="{{ $item['icon'] }} text-success font-size-40"></i>
                                <div class="pe-5">
                                    <h5 class="font-size-17 text-black font-weight-bold mb-1"><a href="{{ $item['link'] ?? '#' }}">{{ $item['title'] ?? '' }}</a></h5>
                                    <p class="text-black px-xl-2 font-size-12 px-uw-7"><i>{{ $item['sub_title'] ?? '' }}</i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
