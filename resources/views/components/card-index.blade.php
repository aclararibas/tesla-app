{{--@php--}}
{{--    $imageUrl = 'https://i.pinimg.com/originals/39/fe/a7/39fea76d74a1b9c48d0c455f7d9ec27b.png';--}}
{{--    $title = 'random';--}}
{{--    $description = 'lorem';--}}
{{--    $buttonText = 'sign up';--}}
{{--@endphp--}}

<div class="col">
    <div class="card h-100 text-center mt-4">
        <img src="{{$imageUrl}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title mb-4">{{$title}}</h5>
            <p class="card-text m-2">{{$description}}</p>
            <a href="#" class="btn btn-danger mt-3">{{$buttonText}}</a>
        </div>
    </div>
</div>
