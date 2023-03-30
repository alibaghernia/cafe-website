<div class="w-full mt-16">
    {{--  if shown only tablet/mobile  --}}
    <section id="bottom-navigation" class="md:hidden block fixed inset-x-0 bottom-0 z-10 bg-white shadow">
        {{--  if shown all size  --}}
        {{--  <section id="bottom-navigation" class="block fixed inset-x-0 bottom-0 z-10 bg-white shadow">  --}}
        <div id="tabs" class="flex justify-between">
            <a href="{{ route('home') }}"
                class="w-full focus:text-[#ff0073] hover:text-[#ff0073] justify-center inline-block text-center pt-2 pb-1
            @if (request()->url() === route('home')) text-[#ff0073] @endif
            ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 inline-block mb-1">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>

                <span class="tab tab-home block text-xs">Home</span>
            </a>
            <a href="{{ route('menu') }}"
                class="w-full focus:text-[#ff0073] hover:text-[#ff0073] justify-center inline-block text-center pt-2 pb-1
            @if (request()->url() === route('menu')) text-[#ff0073] @endif">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 inline-block mb-1">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                </svg>

                <span class="tab tab-kategori block text-xs">Menu</span>
            </a>
            <a href="{{ route('events') }}"
                class="w-full focus:text-[#ff0073] hover:text-[#ff0073] justify-center inline-block text-center pt-2 pb-1
            @if (request()->url() === route('events')) text-[#ff0073] @endif
            ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 inline-block mb-1">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                </svg>

                <span class="tab tab-explore block text-xs">Events</span>
            </a>
            {{--  <a href="{{ route('blog') }}"
                class="w-full focus:text-[#ff0073] hover:text-[#ff0073] justify-center inline-block text-center pt-2 pb-1
            @if (request()->url() === route('blog')) text-[#ff0073] @endif
            ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 inline-block mb-1">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                </svg>

                <span class="tab tab-whishlist block text-xs">Blog</span>
            </a>  --}}
        </div>
    </section>
</div>
