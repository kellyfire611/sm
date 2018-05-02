<form id="conditionForm" method="post" action="{{ route('store.print', ['view' => 'bieumau_report_nhapxuatton_chitiet']) }}">
    {{ csrf_field() }}
    <div class="row">
    <div class="col-sm-6">
  <div class="form-group">
    <label for="p_ngay_batdau">Từ ngày</label>
    <input type="date" class="form-control" id="p_ngay_batdau" name="p_ngay_batdau">
  </div>
  </div>
  <div class="col-sm-6">
  <div class="form-group">
    <label for="p_ngay_ketthuc">Từ ngày</label>
    <input type="date" class="form-control" id="p_ngay_ketthuc" name="p_ngay_ketthuc">
  </div>
  </div>
  <div class="col-sm-12">
  <div class="form-group">
    <label for="p_kho_id">Kho</label>
    <select class="form-control" style="width: 100%;" name="p_kho_id" id="p_kho_id">
        <option value=""></option>
        @foreach($kho as $select => $option)
            <option value="{{$select}}">{{$option}}</option>
        @endforeach
    </select>
    </div>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-12">
  <button type="submit" class="btn btn-primary">Lập báo cáo</button>
  </div>
  </div>
</form>

