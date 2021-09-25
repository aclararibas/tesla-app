{{--@php--}}
{{--$imageRight = true;--}}
{{--$imageUrl = "https://www.wallpapertip.com/wmimgs/5-53557_wallpaper-hd-1080p-mikael-gustafsson.jpg";--}}
{{--$text = "lorem lorem";--}}
{{--@endphp--}}

@if ($imageRight)
    <div class="container px-4 py-5">
        <div class="row flex-lg-row-reverse text-justify">

            <div class="col-10 col-sm-8 col-lg-6">
                <img src="{{$imageUrl}}" class="d-block mx-lg-auto img-fluid" alt="" loading="lazy">
            </div>

            <div class="col-lg-6">
                <div class="lc-block mt-5">
                    <div editable="rich">
                        <p class="lead">{{$text}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@else
    <div class="container px-4 py-0">
        <div class="row flex-lg-row-reverse text-justify">

            <div class="col-lg-6">
                <div class="lc-block mt-5">
                    <div editable="rich">
                        <p class="lead">{{$text}}</p>
                    </div>
                </div>
            </div>

            <div class="col-10 col-sm-8 col-lg-6">
                <img src="{{$imageUrl}}" class="d-block mx-lg-auto img-fluid" alt="" loading="lazy">
            </div>

        </div>
    </div>
@endif
