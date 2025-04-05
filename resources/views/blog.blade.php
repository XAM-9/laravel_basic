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
                    <th scope="col">ชื่อบทความ</th>
                    <th scope="col">เนื้อหา</th>
                    <th scope="col">สถานะ</th>
                    <th scope="col">แก้ไข</th>
                    <th scope="col">ลบ</th>
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($blogs as $items)
                    <tr>
                        <td>{{ $items->title }}</td>
                        <td>{{ Str::limit($items->content, 30) }}</td>
                        <td>
                            @if ($items->status)
                                <a href="{{ route('changeStatus', $items->id) }}" class="btn btn-success">เผยแพร่</a>
                            @else
                                <a href="{{ route('changeStatus', $items->id) }}" class="btn btn-secondary">ฉบับร่าง</a>
                            @endif
                        </td>
                        <td><a href="{{route('edit', $items->id) }}" class="btn btn-warning">แก้ไข</a>
                        </td>
                        <td><a href="{{ route('delete', $items->id) }}" class="btn btn-danger"
                                onclick="return confirm('ยืนยันการลบบทความ {{ $items->title }} หรือไม่ ?')">ลบ</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
