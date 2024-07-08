{{-- extends quy định master layout kế thừa --}}
@extends('layouts.client')

{{-- section: dùng để định nghĩa nội dung của section --}}
@section('content')
    <h1>Day la trang Client</h1>
    <button class="btn btn-success" onclick="onSubmit()">Submit</button>

    <h1>{{$content}}</h1>
    {{-- Hiển thị mã HTML --}}
    <h1>{!! $text !!}</h1>

    @php
        $flag = true;
    @endphp

    {{-- Vòng lặp for --}}
    @for ($i = 1; $i <= 3; $i++)
        <p> Index: {{ $i }} </p>
    @endfor

    @foreach ($dataArr as $arr)
        <P> Phần tử: {{$arr}} </P>
    @endforeach

    @forelse ($dataArr as $item)
        <P> Phần tử: {{$item}} </P>
    @empty
        <p> Không có phần tử nào trong mảng</p>
    @endforelse
    
@endsection

@section('title')
    {{-- Hiển thị dữ liệu trong blade --}}
    {{ $title }}
@endsection

{{-- Nơi để các đường dẫn file css và thư viện css dùng riêng cho cả trang layout  --}}
@section('css')
   <style>
        /* .content {
            background-color: aqua;
        } */
   </style>
   {{-- Hàm asset() dùng để trỏ đường dẫn trong Laravel --}}

   <link rel="stylesheet" href="{{ asset('assets/clients/css/index.css') }}">
@endsection

{{-- Nơi để các đường dẫn file JS và thư viện JS dùng riêng cho cả trang layout  --}}
@section('JS')
    <script>
        // function onSubmit(){
        //     alert (12345);
        // }
    </script>
    <script src="{{asset('assets/clients/js/index.js')}}"></script>
@endsection


