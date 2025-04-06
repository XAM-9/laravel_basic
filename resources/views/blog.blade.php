@section('title', 'กล่องข้อความ')

@extends('layouts.app')

{{-- //และให้แสดงเนื้อหาที่อยู่ใน section content --}}
@section('content')

    @if (count($blogs) > 0)
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

        {{ $blogs->links() }}
        
    </div>
    @else
        <h2 class="text-center">ไม่มีบทความ</h2>
    @endif

@endsection
