@section('title', 'กล่องข้อความ')

{{-- //เพื่อบอกว่าใช้ layout/menubar.blade.php เป็นแม่แบบ --}}
@extends('layout/menubar')

{{-- //และให้แสดงเนื้อหาที่อยู่ใน section content --}}
@section('content')

    <h3>กล่องข้อความ</h3>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum cumque accusantium fugit dolor illum? Velit id natus
        repellat consectetur, autem molestias, cumque eos est tempore unde dolorem porro soluta laboriosam!</p>
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ชื่อบทความ</th>
                    <th scope="col">เนื้อหา</th>
                    <th scope="col">ผู้เขียน</th>
                    <th scope="col">สถานะ</th>
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($blogs as $items)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $items['title'] }}</td>
                        <td>{{ $items['content'] }}</td>
                        <td>{{ $items['author'] }}</td>
                        <td>
                            @if ($items['status'])
                                <a href="#" class="btn btn-success">เผยแพร่</a>
                            @else
                                <a href="#" class="btn btn-warning">ฉบับร่าง</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
