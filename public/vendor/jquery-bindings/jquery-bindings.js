// Group checkbox
$('input[type="checkbox"][group]').on('change', function() {
    var that = this;
    var groupKey = $(this).attr('group');
    var groupEles = $("input[type='checkbox'][group='" + groupKey +"']");
    groupEles.not(that).each(function() {
        if($(this).attr('id') === $('#setai_num_many').attr('id'))
        {
            $(this).prop('checked', false);
            //EnableOrDisableSetaiNumMany($(this));
        }
        else {
            $(this).prop('checked', false);
        }
    });
});