<div class="mx-auto container">
    @foreach ($weekdayes as $weekday)
        @if ($weekday->events->count() === 0)
            @continue
        @endif
        <div class="text-center mt-4">
            {{ $weekday->name }}
        </div>
        <hr class="w-16 mx-auto mb-1">
        @foreach ($weekday->events as $event)
            <div class="shadow rounded mx-8 p-4">
                <div class="flex justify-between">
                    <div class="">{{ $event->name }}</div>
                    <div class="">
                        {{ date('H:i', strtotime($event->start)) }}
                        @if (!is_null($event->end))
                            - {{ date('H:i', strtotime($event->end)) }}
                        @endif
                    </div>
                </div>

                @if (!empty($event->description))
                    <div class="mt-2">
                        {{ $event->description }}
                    </div>
                @endif


            </div>
        @endforeach
    @endforeach
</div>
