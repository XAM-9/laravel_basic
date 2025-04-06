@section('title', 'แก้ไขบทความ')

{{-- //เพื่อบอกว่าใช้ layout/menubar.blade.php เป็นแม่แบบ --}}
@extends('layouts.app')

{{-- //และให้แสดงเนื้อหาที่อยู่ใน section content --}}
@section('content')

    <h3>แก้ไขบทความ</h3>

    <form method="POST" action="{{ route('update', $blogs->id) }}">

        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">ชื่อบทความ</label>
            <input type="text" class="form-control" name="title" value="{{ $blogs->title }}">
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">เนื้อหา</label>
            <textarea class="form-control" name="content" rows="3"> {{ $blogs->content }}</textarea>
            @error('content')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary"
            onclick="return confirm('ยืนยันการเพิ่มอัพเดทหรือไม่ ?')">อัพเดท</button>
        <a href="/blog" class="btn btn-warning">ย้อนกลับ</a>

    </form>

@endsection
