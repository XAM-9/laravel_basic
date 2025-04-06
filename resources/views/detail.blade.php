@section('title')
    {{ $blog->title }}
@endsection

{{-- //เพื่อบอกว่าใช้ layout/menubar.blade.php เป็นแม่แบบ --}}
@extends('layouts.app')

{{-- //และให้แสดงเนื้อหาที่อยู่ใน section content --}}
@section('content')
    <h3>{{ $blog->title }}</h3>
    <hr>
    <p>{{ $blog->content }}</p>
@endsection
