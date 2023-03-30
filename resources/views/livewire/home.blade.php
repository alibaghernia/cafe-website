<div class="mx-auto container">
    <div class="mt-2 mx-2">
        <img src="{{ asset('storage/' . $homePage->image) }}" alt="" class="rounded-xl shadow mx-auto">
    </div>

    <div class="mt-5">
        {!! $homePage->content !!}
    </div>
</div>
