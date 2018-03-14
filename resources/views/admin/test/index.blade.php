<h1>Hello Test</h1>
<div class="conrainter">
    <div class="row">
        <div class="col-sm-4">
            <form method="post" action="{{ route('store.print', ['view' => 'bieumau_phieunhap']) }}">
                {{ csrf_field() }}
                <button class="btn btn-sm btn-primary grid-refresh" type="submit"><i class="fa fa-refresh"></i> Test biểu mẫu phiếu Nhập</button>
            </form>
            <br />
            <form method="post" action="{{ route('store.print', ['view' => 'bieumau_phieuxuat']) }}">
                {{ csrf_field() }}
                <button class="btn btn-sm btn-primary grid-refresh" type="submit"><i class="fa fa-refresh"></i> Test biểu mẫu phiếu Xuất</button>
            </form>
        </div>

        <div class="col-sm-4">
            
        </div>

        <div class="col-sm-4">
        </div>
    </div>
</div>




