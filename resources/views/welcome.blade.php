@section('title', 'หน้าแรกของเว็บไซต์')

{{-- //เพื่อบอกว่าใช้ layout/menubar.blade.php เป็นแม่แบบ --}}
@extends('layouts.app') 

{{-- //และให้แสดงเนื้อหาที่อยู่ใน section content --}}
@section('content')
<h3>หน้าแรกของเว็บไซต์</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae dolor, dolore cumque id eius temporibus, et
    ut praesentium, accusantium sapiente assumenda? Facere necessitatibus consequuntur tenetur tempore, voluptas
    recusandae illo natus.</p>
@endsection

