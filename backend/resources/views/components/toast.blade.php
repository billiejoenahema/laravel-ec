@props(['color' => $color])

@if(session('message'))
<div class="mb-5">
    <div class="flex w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md">
        <div class="flex items-center justify-center w-4 bg-{{$color}}">
        </div>

        <div class="px-4 py-2 -mx-3">
            <div class="mx-3">
                <span class="font-semibold text-{{$color}}">{{session('message')}}
            </div>
        </div>
    </div>
</div>
@endif
