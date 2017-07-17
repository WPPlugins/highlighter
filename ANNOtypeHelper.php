<?php
class ANNOtypeHelper
{
	function radioBoxes($name, $options)
	{
		$default = get_option('ANNOtype_'.$name);
		
		foreach($options as $value) {
			$checked = ($default == $value) ? 'checked="checked"' : '';
			echo '<span><input type="radio" name="'.$name.'" value="'.$value.'" '.$checked.' /> '.$value.'</span>';
		}
	}
	
	function checkbox($name)
	{
		$default = get_option('ANNOtype_'.$name);
		
		$checked = ($default == 'On') ? 'checked="checked"' : '';
		echo '<span><input type="hidden" name="'.$name.'" value="Off" /><input type="checkbox" id="'.$name.'" name="'.$name.'" value="'.$default.'" '.$checked.' /></span>';
	}
	
	function text($name)
	{
		$default = get_option('ANNOtype_'.$name);
		
		//$checked = ($default == 'On') ? 'checked="checked"' : '';
		echo '<input type="text" id="'.$name.'" name="'.$name.'" value="'.$default.'" />';
	}

	function dropdown($name, $options)
	{
		$default = get_option('ANNOtype_'.$name);
		
		echo '<select id="'.$name.'" name="'.$name.'">';
		foreach($options as $id => $value) {
			$checked = ($default == $value) ? 'selected="selected"' : '';
			echo '<option value="'.$value.'" '.$checked.'>'.$value.'</option>';
		}
		echo '</select>';
	}
}