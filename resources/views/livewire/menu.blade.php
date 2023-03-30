{{--  <div class="mx-auto container bg-[#fedfed]">  --}}
<div class="mx-auto container ">
    <div class="sticky top-0 z-10 bg-gray-50 pt-5 rounded-b-3xl px-2 stroke-slate-800">
        <div class="search-bar ">
        </div>
        <div class="category-list mt-4 overflow-x-scroll">
            <div class="flex flex-nowrap mb-2 ">
                @foreach ($categories as $category)
                    {{--  <div class="bg-gray-200 rounded-full px-4 mx-1 py-1 " style="white-space: nowrap;">  --}}
                    <div class="bg-[#ff0073] font-bold rounded-full px-4 mx-1 py-1 " style="white-space: nowrap;">
                        <a href="#c{{ $category->id }}" class="text-white">
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
                    <div class="text-left font-bold p-5  mb-1">{{ $category->name }}</div>
                    <div class="items flex flex-col" id="c{{ $category->id }}">
                        @foreach ($category->menuItems as $menuItem)
                            <div class="w-full rounded-2xl bg-[#ff0073] p-5 text-white mb-5">
                                <div class="flex w-full">
                                    {{--  <img src="https://sky-lounge.ir/assets/img/menu-items/IMG_1619.JPG" alt=""  --}}

                                    @isset($menuItem->image_path)
                                        <img src="{{ asset('storage/' . $menuItem->image_path) }}" alt=""
                                            class=" w-32 h-32 bg-cover bg-center object-cover inline-block mr-[10px] rounded-xl">
                                    @endisset
                                    <div class="flex flex-col justify-between w-full">
                                        <div class="">
                                            <span class="w-full block">
                                                {{ $menuItem->name }}
                                            </span>
                                            <span class="mt-0.5 text-gray-100 text-xs block">
                                                {{ $menuItem->description }}
                                            </span>
                                        </div>
                                        <span
                                            class="w-full inline-block text-right">{{ number_format($menuItem->price) }}
                                            T</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

        </div>
    </div>

</div>
