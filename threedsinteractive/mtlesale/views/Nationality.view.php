<div class="ajax">
    {{ Form::open([
        "url" => "Mtlesale/Nationality",
        "method" => "POST",
        "files" => true,
        'class' => 'form-example',
    ]) }}
        <div class="box">
            <h2 style="text-align:center;">Dropdown List : AJAX</h2>
            <table align="center">
                <tr>
                    <td style="text-align:right;">{{ Form::label('id', 'สัญชาติ') }}</td>
                    <td>{{ Form::select('id', $Nationality, Input::old('id'),
                        array('class' => 'form-control')) }}</td>
                </tr>
            </table>
        </div>   
    {{ Form::close() }}
</div>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script>
    jQuery(function($) {
        jQuery('body').on('change','#province_id',function(){
            jQuery.ajax({
                'type':'POST',
                'url':'http://localhost/laravel_demo/public/example/model',
                'cache':false,
                'data': {province_id:$("#province_id").val()},
                'success':function(html){
                    $("#city_id").html(html);
                }
            });
            return false;
        });
    });
</script>