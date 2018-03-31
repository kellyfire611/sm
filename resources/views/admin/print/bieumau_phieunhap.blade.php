@extends('print.layout.paper')

@section('title')
Biểu mẫu Phiếu nhập kho
@endsection

@section('paper-size') A4 @endsection
@section('paper-class') A4 @endsection

@section('content')
<section class="sheet padding-10mm">
    <article>
        <h1>{{ $bag['meta']['title'] }}</h1>

    <h2>Số phiếu nhập: {{ $bag['data']->result[0]->so_phieunhap }}</h2>

    Các sản phẩm: <br />
    {{ $bag['data']->detail[0]->dongianhap }}
    </article>
</section>
@endsection