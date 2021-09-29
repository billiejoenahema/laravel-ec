<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-toast color="{{session('toast-color')}}" />
                    <div class="flex justify-end mb-4">
                        <button onClick="location.href='{{route('owner.images.create')}}'"
                            class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">新規登録</button>
                    </div>
                    <div class="flex flex-wrap">
                        @foreach ($images as $image)
                        <div class="w-1/4 p-4">
                            <a href="{{route('owner.images.edit', ['image' => $image->id])}}">
                                <div class="border rounded-md p-4">
                                    <div class="text-xl">
                                        {{$image->name}}
                                    </div>
                                    <x-thumbnail :filename="$image->filename" path="products" />
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    {{$images->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
