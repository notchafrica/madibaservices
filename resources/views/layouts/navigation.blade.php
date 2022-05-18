<header class="bg-primary-800 py-3 px-2">
    <div class="flex max-w-screen-xl mx-auto bg-white px-3 py-2 rounded-md items-center">
        <div class="flex-none">
            <a href="{{route('home')}}"><img class="h-8 sm:h-10" src="{{url('/logo.png')}}"
                    alt="{{config('app.name')}}"></a>
        </div>
        <div class="grow h-8"></div>
        <div class="flex-none item-center">
            <x-w-icon name="view-grid" class="h-8 text-primary-900 lg:hidden"></x-w-icon>
            <nav class="hidden pr-5 space-x-8 lg:block">

                @foreach(navitems('main') as $nav)
                    <a href="{{$nav->url}}" class="text-base   hover:text-gray-800  @if($nav->active) text-gray-800 font-semibold @else text-primary-800 font-medium @endif">
                        {{$nav->name}}
                    </a>
                @endforeach
            </nav>
        </div>
    </div>
</header>
