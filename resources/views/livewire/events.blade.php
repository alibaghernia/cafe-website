@section('page_title', 'ایونت ها')
@php
    $fa_weekdays=[
        'Saturday'=>'شنبه',
    'Sunday'=>'یکشنبه',
    'Monday'=>'دوشنبه',
    'Tuesday'=>'سه‌شنبه',
    'Wednesday'=>'چهارشنبه',
    'Thursday'=>'پنجشنبه',
    'Friday'=>'جمعه',
    ]
@endphp

<div class="mx-auto container">
    @foreach ($weekdayes as $weekday)
        @if ($weekday->events->count() === 0)
            @continue
        @endif
        <div class="text-center mt-4 ">
            {{ $fa_weekdays[$weekday->name] }}
        </div>
        <hr class="w-16 mx-auto mb-1">
        @foreach ($weekday->events as $event)
            <div class="shadow rounded-2xl mx-5 p-4 bg-[#2c4d41] mt-1 text-white">
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
