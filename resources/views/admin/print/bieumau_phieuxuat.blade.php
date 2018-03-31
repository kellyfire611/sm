@extends('print.layout.paper')

@section('title')
Biểu mẫu Phiếu xuất kho
@endsection

@section('paper-size') A4 @endsection
@section('paper-class') A4 @endsection

@section('content')
<section class="sheet padding-10mm">
    <article>
        <h1>{{ $data['meta']['title'] }}</h1>
    </article>
</section>
@endsection