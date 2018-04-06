
<div class="row">
    <div class="{{$viewClass['label']}}"><h4 class="pull-right">{{ $label }}</h4></div>
    <div class="{{$viewClass['field']}}"></div>
</div>
<hr style="margin-top: 0px;">
<div id="has-many-{{$column}}" class="has-many-{{$column}} has-many-{{ $viewMode }}">
    <div class="has-many-{{$column}}-forms has-many-{{ $viewMode }}-forms">
        @if(!empty($form))
        <div>
            <?php
            $form = reset($forms);
            ?>
            @foreach($form->fields() as $field)
                @if(!$field->isHidden()) 
                <th width="">{!! $field->label() !!}</th>
                @endif
            @endforeach
            <th>Xóa</th>
        </div>
        @endif

        @foreach($forms as $pk => $form)
        <div class="has-many-{{$column}}-form fields-group row">
            <div class="col-sm-11">
                <div class="row">
                @foreach($form->fields() as $field)
                    {!! $field->render() !!}
                @endforeach
                </div>
            </div>

            <div class="col-sm-1">
                <div class="form-group">
                    <div class="col-sm-12">
                        <div class="remove btn btn-warning btn-sm"><i class="fa fa-trash">&nbsp;</i></div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
        <div>
            <p>Tổng thành tiền:</p>
            <p>
                1500000000
            </p>
        </div>
    </div>

    <template class="{{$column}}-tpl">
        <tr class="has-many-{{$column}}-form fields-group">
            {!! $template !!}

            <td>
                <div class="form-group">
                    <label class="{{$viewClass['label']}} control-label"></label>
                    <div class="{{$viewClass['field']}}">
                        <div class="remove btn btn-warning btn-sm pull-right"><i class="fa fa-trash"></i>&nbsp;</div>
                    </div>
                </div>
            </td>
        </tr>
    </template>

    <div class="form-group">
        <label class="{{$viewClass['label']}} control-label"></label>
        <div class="{{$viewClass['field']}}">
            <div class="add btn btn-success btn-sm"><i class="fa fa-save"></i>&nbsp;{{ trans('admin.new') }}</div>
        </div>
    </div>

</div>