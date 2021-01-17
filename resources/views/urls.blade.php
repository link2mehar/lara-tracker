@extends('layouts.app')


@section('content')

<div id="container" class="m-5">
    <div class="w-full mx-auto px-6">
        <div class="flex justify-center p-4 px-3 py-10">
            <div class="w-full">
                <div class="bg-white shadow-md rounded-lg px-3 py-2 mb-8">
                    <div class="py-3 text-sm">
                        @foreach ($urls as $url)
                            <div class="flex justify-start cursor-pointer text-gray-700 hover:text-blue-400 hover:bg-blue-100 rounded-md px-2 py-2 my-2">
                                <div class="flex-grow font-medium px-2">
                                    <form action="/urls" method="post" style="display: flex; justify-content:space-between;align-items:center">
                                        @csrf
                                        <p>{{$url->page}}</p>
                                        <input type="hidden" name="url" value="{{$url->page}}">
                                        <input type="submit" class="uppercase px-8 py-2 bg-blue-600 text-blue-50 max-w-max shadow-sm hover:shadow-lg cursor-pointer" value="View">
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{ $urls->links() }}
            </div>
        </div>
    </div>
</div>



@endsection