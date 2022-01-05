<div>
    <div class="relative">
        <input type="text" wire:model.debounce.500ms="search" class="bg-gray-800 rounded-full w-64 px-6 py-1
        foucs:outline-none  foucs:shadow-outline" placeholder="Search">
    </div>

    @if(strlen($search) >= 2)

    <div class="absolute text-sm bg-gray-800 rounded w-64 mt-4">
        @if($searchResults->count() > 0)
         <ul>
             @foreach ($searchResults as $result )
             <li class="border-b border-gray-700">
                <a href="{{ route('movies.show' , $result['id']) }}" class="block hover:bg-gray-700 px-3 py-3
                flex items-center ">
                <img src="{{ 'https://image.tmdb.org/t/p/w92/' . $result['poster_path'] }}"
                class="w-8">
                <span class="ml-4">
                    {{ $result['title'] }}
                </span>
            </a>
            </li>
             @endforeach
         </ul>

         @else
            <div class="px-3 py-3">No result</div>
         @endif
    </div>
    @endif

</div>
