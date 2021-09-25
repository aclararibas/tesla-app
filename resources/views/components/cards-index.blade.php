<div class="row row-cols-3 p-5 m-4">
    @component('components.card-index', [
        'imageUrl' => 'https://wallpaperaccess.com/full/1152733.jpg',
        'title' => 'Lorem Ipsum',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Ut blandit tristique consequat. Pellentesque luctus eros vel feugiat finibus.
        Pellentesque magna ligula, luctus venenatis sem hendrerit, egestas finibus diam lacus et massa.',
        'buttonText' => 'Order Now'
    ])
    @endcomponent

    @component('components.card-index', [
        'imageUrl' => 'https://i.pinimg.com/originals/cb/b9/0d/cbb90d0dc8b3025be96ec2d5cce16aae.jpg',
        'title' => 'Maecenas Sapien',
        'description' => 'Aliquam lacinia, nunc vel dictum dignissim, ipsum turpis facilisis leo,
        nec scelerisque eros mi eu sem. Cras blandit massa nec sollicitudin ornare.
        Nullam dictum tortor ante. Nam efficitur sit amet lacus et faucibus.',
        'buttonText' => 'Learn More'
    ])
    @endcomponent

    @component('components.card-index', [
        'imageUrl' => 'https://i.redd.it/b6ynq3vdx0a61.jpg',
        'title' => 'Suspendisse Potenti',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Curabitur porttitor euismod arcu, vel dictum odio sagittis id.
        Nullam scelerisque faucibus mauris, vitae lobortis ligula.
        Suspendisse fermentum sit amet ante eget ornare.',
        'buttonText' => 'Custom Order'
    ])
    @endcomponent
</div>
