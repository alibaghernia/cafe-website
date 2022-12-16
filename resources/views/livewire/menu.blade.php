<div class="mx-auto container">
    <div class="sticky top-0 z-10 bg-gray-50 pt-5 rounded-b-3xl px-2 stroke-slate-800">
        <div class="search-bar ">
            {{--  <div class="bg-gray-200 w-full rounded-full py-0.5 flex">
                <input type="search" name="search" placeholder="Search..."
                class="inline-block bg-transparent flex-1 border-none">
                <button class="inline-block mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                      </svg>
                </button>
            </div>  --}}
        </div>
        <div class="category-list mt-4 overflow-x-scroll">
            <div class="flex flex-nowrap mb-2 ">
                @foreach ($categories as $category)
                    <div class="bg-gray-200 rounded-full px-4 mx-1 py-1 " style="white-space: nowrap;">
                        <a href="#c{{ $category->id }}">
                            {{ $category->name }}
                        </a>
                    </div>
                @endforeach
            </div>
            {{--  <div class="h-4"></div>  --}}
        </div>
    </div>

    <div class="px-5">
        <div class="categories mt-4">
            @foreach ($categories as $category)
                <div class="category mt-8">
                    <div class="text-center">{{ $category->name }}</div>
                    <div class="items flex flex-wrap" id="c{{ $category->id }}">
                        @foreach ($category->menuItems as $item)
                            <div class="item basis-1/2 md:basis-1/3 p-1 relative">
                                <div
                                    class="absolute bottom-2 left-1 text-white shadow-2xl bg-gradient-to-r from-gray-500 to-transparent">
                                    <div class="pl-2">
                                        <div class="">{{ $item->name }}</div>
                                        <div class="">{{ number_format($item->price) }} T</div>
                                    </div>
                                </div>
                                <img src="https://picsum.photos/300/300" alt=""
                                    class="rounded-md w-full min-w-[100px] ">
                                {{--  <img src="{{ asset('storage/'.$item->image_path) }}" alt="" class="rounded-md object-cover">  --}}
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

        </div>
    </div>

</div>
