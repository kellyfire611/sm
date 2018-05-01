

<form id="conditionForm" method="post" action="{{ route('store.print', ['view' => 'bieumau_report_bangkenhapkho_theonguonvon']) }}">
    {{ csrf_field() }}
    <div class="row">
    <div class="col-sm-6">
  <div class="form-group">
    <label for="tuNgay">Từ ngày</label>
    <input type="date" class="form-control" id="tuNgay" name="tuNgay">
  </div>
  </div>
  <div class="col-sm-6">
  <div class="form-group">
    <label for="denNgay">Từ ngày</label>
    <input type="date" class="form-control" id="denNgay" name="denNgay">
  </div>
  </div>
  <div class="col-sm-12">
  <div class="form-group">
    <label for="nguoncungcap_id">Nguồn cung cấp</label>
    <select class="form-control" style="width: 100%;" name="nguoncungcap_id" id="nguoncungcap_id">
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
  <button type="submit" class="btn btn-primary">Submit</button>
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