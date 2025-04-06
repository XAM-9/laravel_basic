@section('title', 'เขียนบทความ')

@extends('layouts.app')

@section('content')
    <h3>เขียนบทความ</h3>

    <form method="POST" action="/author/insert">
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
            <textarea class="form-control" name="content" rows="3" placeholder="เนื้อหาบทความ" id="editor"></textarea>
            @error('content')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary"
            onclick="return confirm('ยืนยันการเพิ่มบทความหรือไม่ ?')">บันทึก</button>
        <a href="/author/blog" class="btn btn-warning">ย้อนกลับ</a>
    </form>

    <!-- เพิ่ม CDN ของ CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/44.3.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|', 'undo', 'redo'],
                height: 300
            })
            .then(editor => {
                console.log('Editor เริ่มทำงานแล้ว!', editor);
            })
            .catch(error => {
                console.error('เกิดข้อผิดพลาด:', error);
            });
    </script>
@endsection