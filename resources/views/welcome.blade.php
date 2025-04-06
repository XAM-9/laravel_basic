@section('title', 'หน้าแรกของเว็บไซต์')

{{-- //เพื่อบอกว่าใช้ layout/menubar.blade.php เป็นแม่แบบ --}}
@extends('layouts.app')

{{-- //และให้แสดงเนื้อหาที่อยู่ใน section content --}}
@section('content')
    <h3>หน้าแรกของเว็บไซต์</h3>
    <h2>บทความล่าสุด</h2>
    <hr>
    <div class="d-flex flex-row justify-content-center ">
        @foreach ($blogs as $item)
            <div class="card" style="width: 22rem; margin-right: 1rem;">
                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                <div class="card-body">
                    <h5 class="card-title">
                        <h2>{{ $item->title }}</h2>
                    </h5>
                    <p class="card-text">
                    <p>{{ Str::limit($item->content, 50) }}</p>
                    </p>
                    <a href="/detail/{{ $item->id }}" class="btn btn-primary">อ่านเพิ่มเติม</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
