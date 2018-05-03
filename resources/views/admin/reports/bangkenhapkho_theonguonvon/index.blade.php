

<form id="conditionForm" method="post" action="{{ route('store.print', ['view' => 'bieumau_report_bangkenhapkho_theonguonvon']) }}">
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
    <label for="p_nguoncungcap_id">Nguồn cung cấp</label>
    <select class="form-control" style="width: 100%;" name="p_nguoncungcap_id" id="p_nguoncungcap_id">
        <option value=""></option>
        @foreach($nguonCungCap as $select => $option)
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

<script>
// // this is the id of the form
// $("#conditionForm").submit(function(e) {

//     // var url = "{{ route('store.ajax.reportBangKeNhapKhoTheoNguonVon') }}"; // the script where you handle the form input.
//     // $.ajaxSetup({
//     //     headers: {
//     //         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
//     //     }
//     // });

//     // $.ajax({
//     //     type: "POST",
//     //     url: url,
//     //     data: $("#conditionForm").serialize(), // serializes the form's elements.
//     //     beforeSend: function(){
//     //         $('<div />').attr('class', 'loading').appendTo('body');
//     //     },
//     //     success: function(data)
//     //     {
//     //         alert(data); // show response from the php script.
//     //     },
//     //     error: function(data) {
//     //         console.log(data);
//     //     }
//     // }).done(function(data) {
//     //     $('.loading').remove();
//     // });

//     e.preventDefault(); // avoid to execute the actual submit of the form.
// });
</script>