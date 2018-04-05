
<div class="row">
    aaaaaaa
    <div class="{{$viewClass['label']}}"><h4 class="pull-right">{{ $label }}</h4></div>
    <div class="{{$viewClass['field']}}"></div>
</div>

<hr style="margin-top: 0px;">

<form class="form-horizontal">
        <div class="row">
           <div class="form-group">
            <label class="col-sm-2">Quarter</label>
            <div class="col-sm-10"><input type="text" class="form-control" /></div>
            </div>
       </div>
        <div class="row">
            <div class="form-group">
            <label class="col-sm-2">Address</label>
            <div class="col-sm-5"><input type="text" class="form-control" /></div>
            </div>
            <div class="form-group">
            <label class="col-sm-2">Addr. №</label>
            <div class="col-sm-3"><input type="text" class="form-control" /></div>
            </div>
        </div>
        <div class="row">
             <div class="form-group">
            <label class="col-sm-2">Block name/Number</label>
            <div class="col-sm-1"><input type="text" class="form-control" /></div>
            </div>
            <div class="form-group">
            <label class="col-sm-1">Entrance</label>
            <div class="col-sm-1"><input type="text" class="form-control" /></div>
             </div>
             <div class="form-group">
            <label class="col-sm-1">Floor</label>
            <div class="col-sm-1"><input type="text" class="form-control" /></div>
             </div>
             <div class="form-group">
            <label class="col-sm-2">Apartament</label>
            <div class="col-sm-3"><input type="text" class="form-control" /></div>
            </div>
        </div>
    </form>

<div id="has-many-{{$column}}" class="has-many-{{$column}}">

    <div class="form-horizontal">
        
    </div>
    

    <table border="1" class="table table-responsive table-bordered">
        <tr>
        @foreach($forms as $pk => $form)
            @foreach($form->fields() as $field)
                @if(!$field->isHidden())
                    <th>{!! $field->label() !!}
                    {!! $field->getRenderStyle() !!}
                </td>
                @endif
            @endforeach
            <th>Xóa</th>
        @endforeach
        </tr>


        @foreach($forms as $pk => $form)
        <tr class="has-many-{{$column}}-form fields-group">
            @foreach($form->fields() as $field)
                @if(!$field->isHidden())
                    <td>{!! $field->render() !!}</td>
                @endif
            @endforeach

            <td>
                <div class="form-group">
                    <label class="{{$viewClass['label']}} control-label"></label>
                    <div class="{{$viewClass['field']}}">
                        <div class="remove btn btn-warning btn-sm pull-right"><i class="fa fa-trash">&nbsp;</i>{{ trans('admin.remove') }}</div>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
        

    </table>



    <div class="has-many-{{$column}}-forms">

        @foreach($forms as $pk => $form)

            <div class="has-many-{{$column}}-form fields-group">

                @foreach($form->fields() as $field)
                    {!! $field->render() !!}
                @endforeach

                <div class="form-group">
                    <label class="{{$viewClass['label']}} control-label"></label>
                    <div class="{{$viewClass['field']}}">
                        <div class="remove btn btn-warning btn-sm pull-right"><i class="fa fa-trash">&nbsp;</i>{{ trans('admin.remove') }}</div>
                    </div>
                </div>

                <hr>
            </div>

        @endforeach
    </div>

    <template class="{{$column}}-tpl">
        <div class="has-many-{{$column}}-form fields-group">

            {!! $template !!}

            <div class="form-group">
                <label class="{{$viewClass['label']}} control-label"></label>
                <div class="{{$viewClass['field']}}">
                    <div class="remove btn btn-warning btn-sm pull-right"><i class="fa fa-trash"></i>&nbsp;{{ trans('admin.remove') }}</div>
                </div>
            </div>
            <hr>
        </div>
    </template>

    <div class="form-group">
        <label class="{{$viewClass['label']}} control-label"></label>
        <div class="{{$viewClass['field']}}">
            <div class="add btn btn-success btn-sm"><i class="fa fa-save"></i>&nbsp;{{ trans('admin.new') }}</div>
        </div>
    </div>

</div>