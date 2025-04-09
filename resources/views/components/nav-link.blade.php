@props(['active'=> false ])

<a {{$attributes}} class="rounded-md  {{ $active ? 'bg-gray-900 text-white' : ''}} px-3 py-2 text-sm font-medium hover:bg-gray-700 text-gray-300 hover:text-white" aria-current="page">{{$slot}}</a>


