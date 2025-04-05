@section('title', 'เขียนบทความ')

{{-- //เพื่อบอกว่าใช้ layout/menubar.blade.php เป็นแม่แบบ --}}
@extends('layout/menubar')

{{-- //และให้แสดงเนื้อหาที่อยู่ใน section content --}}
@section('content')

    <h3>เขียนบทความ</h3>

    <form method="POST" action="/insert">

        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">ชื่อบทความ</label>
            <input type="text" class="form-control" name="title" placeholder="ชื่อบทความ">
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">เนื้อหา</label>
            <textarea class="form-control" name="content" rows="3" placeholder="ชื่อบทความ"></textarea>
            @error('content')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary">บันทึก</button>
        <a href="/blog" class="btn btn-warning">ย้อนกลับ</a>

    </form>

@endsection
