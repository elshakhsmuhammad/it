<?php
if ($data['use_collective'] == 'yes') {
	$text = '
<div class="form-group">
    {!! Form::label(\'{Convention}\',trans(\'{lang}.{Convention}\'),[\'class\'=>\'col-md-3 control-label\']) !!}
    <div class="col-md-9">
        {!! Form::radio(\'{Convention}\', {Convention2} ,\'{val}\',[\'class\'=>\'form-control\',\'placeholder\'=>trans(\'{lang}.{Convention}\')]) !!}
    </div>
</div>
<br>
';
} else {
	$text = '
<div class="form-group">
    <label for="{Convention}" class="col-md-3 control-label">{{trans(\'{lang}.{Convention}\')}}</label>
    <div class="col-md-9">
        <input type="radio" id="{Convention}" name="{Convention}"
        @if({Convention2} == \'{val}\') checked @endif
        value="{val}" class="form-control" placeholder="{{trans(\'{lang}.{Convention}\')}}" />
    </div>
</div>
<br>
';
}
$checkex = @explode('#', $data['col_name_convention']);
if (count($checkex)) {
	$text = str_replace('{Convention}', $checkex[0], $text);
	$text = str_replace('{val}', $checkex[1], $text);
	$text = str_replace('{Convention2}', $data['col_name_convention2'], $text);
} else {
	$text = str_replace('{Convention}', 'No Name', $text);
	$text = str_replace('{val}', 'No value', $text);
	$text = str_replace('{Convention2}', '', $text);
}
$text = str_replace('{lang}', $data['lang_file'], $text);
echo $text;
?>