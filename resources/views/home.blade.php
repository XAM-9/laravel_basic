@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/author/blog" class="btn btn-primary">บทความทั้งหมด</a>
                    <a href="/author/create" class="btn btn-primary">เขียนบทความ</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
