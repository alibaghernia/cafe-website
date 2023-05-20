@section('page_title', 'منو')
{{--  <div class="mx-auto container bg-[#fedfed]">  --}}
<div class="mx-auto container">
    <div class="sticky top-0 z-10 pt-5 rounded-b-3xl px-2 stroke-slate-800 bg-[#e4ebe5]">
        <div class="search-bar ">
        </div>
        <div class="category-list mt-4 overflow-x-scroll scrollbar-hide">
            <div class="flex flex-nowrap mb-2 ">
                @foreach ($categories as $category)
                    {{--  <div class="bg-gray-200 rounded-full px-4 mx-1 py-1 " style="white-space: nowrap;">  --}}
                    <div class="bg-[#2c4d41] font-bold rounded-full px-4 mx-1 py-1 " style="white-space: nowrap;">
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
        <div class="categories">
            @foreach ($categories as $category)
                <div class="category">
                    <div class="text-start font-bold mr-1  mb-1 text-[#2c4d41] text-xl font-bold mt-5">
                        {{ $category->name }}</div>
                    <div class="items flex flex-col" id="c{{ $category->id }}">
                        @foreach ($category->menuItems as $menuItem)
                            <div class="w-full rounded-2xl bg-[#2c4d41] p-5 mt-5 text-white">
                                <div class="flex w-full">
                                    @isset($menuItem->image_path)
                                        <img src="{{ asset('storage/' . $menuItem->image_path) }}"
                                            alt="{{ $menuItem->name }}"
                                            class=" w-32 h-32 bg-cover bg-center object-cover inline-block ml-[10px] rounded-xl">
                                    @endisset
                                    <div class="flex flex-col justify-between w-full">
                                        <div class="">
                                            {{--                                            <span class="w-full block text-base font-extrabold"> --}}
                                            <span class="w-full block text-base font-extrabold">
                                                {{ $menuItem->name }}
                                            </span>
                                            <span class="mt-0.5 text-gray-200 text-xs block">
                                                {{--                                            <span class="mt-0.5 text-gray-100 text-xs block"> --}}
                                                {{ $menuItem->description }}
                                            </span>
                                        </div>
                                        <span class="w-full inline-block text-end">{{ number_format($menuItem->price) }}
                                            تومان
                                        </span>
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
