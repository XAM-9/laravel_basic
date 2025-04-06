@section('title', 'เกี่ยวกับฉัน')
@extends('layouts.app')

@section('content')

    <h3>เกี่ยวกับฉัน</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae dolor, dolore cumque id eius temporibus, et
        ut praesentium, accusantium sapiente assumenda? Facere necessitatibus consequuntur tenetur tempore, voluptas
        recusandae illo natus.</p>

@endsection

@section('about')
    <p>ผู้พัฒนาระบบ : {{ $name }}</p>
    <p>วันที่พัฒนาระบบโปรเจค : {{ $date }}</p>
@endsection
