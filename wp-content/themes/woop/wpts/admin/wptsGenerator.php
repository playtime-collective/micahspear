<?php

class wptsGenerator {
	var $name;
	var $options;
	var $saved_options;

	function wptsGenerator($name, $options) {
		
		$this->name = $name;
		$this->options = $options;
		
		$this->save_options();
		$this->render();
	}
	
	function save_options() {
		$options = get_option(THEME_SLUG . '_' . $this->name);
				
		if (isset($_POST['save_theme_options'])) {
			
			foreach($this->options as $value) {
				
				if (isset($value['id']) && ! empty($value['id'])) {
					if (isset($_POST[$value['id']])) {
						if ($value['type'] == 'multidropdown') {
							if(empty($_POST[$value['id']])){
								$options[$value['id']] = array();
							}else{
								$options[$value['id']] = array_unique(explode(',', $_POST[$value['id']]));
							}
						} else {
							$options[$value['id']] = $_POST[$value['id']];
						}
					} else {
						$options[$value['id']] = false;
					}
				}
				if (isset($value['process']) && function_exists($value['process'])) {
					$options[$value['id']] = $value['process']($value,$options[$value['id']]);
				}
			}
			
			if ($options != $this->options) {
				update_option(THEME_SLUG . '_' . $this->name, $options);
				global $theme_options;
				$theme_options[$this->name] = $options;
				
				$this->save_skin_style();				
			}
			echo '<div id="message" class="updated fade"><p><strong>Updated Successfully</strong></p></div>';
		}
		
		$this->saved_options = $options;
	
	}
	
	function save_skin_style() {
			
	        $fhandle = fopen(ABSPATH.'wp-content/themes/woop/css/styles.css', 'w+');
			$content =  $this->get_include_contents(ABSPATH.'wp-content/themes/woop/css/styles.php');
			
            if ($fhandle) fwrite($fhandle, $content, strlen($content));
		
        return false;
    }
		
	function get_include_contents($filename) {
    if (is_file($filename)) {
        ob_start();
        include $filename;
        return ob_get_clean();
    }
    return false;
	}
		
	function render() {
		echo '<div class="wpts_wrap theme-options-page">';
		
		echo '<form method="post" action="">';
		
		foreach($this->options as $option) {
			if (method_exists($this, $option['type'])) {
				$this->$option['type']($option);
			}
		}
		echo '</form>';
		echo '</div>';
	}
	
	/**
	 * prints the options page title
	 */
	function title($value) {
		echo '<h2>' . $value['name'] . '</h2>';
		if (isset($value['desc'])) {
			echo '<p>' . $value['desc'] . '</p>';
		}
	}
	
	/**
	 * begins the group section
	 */
	function start($value) {
		echo '<div class="setting-block">';
		echo '<div class="block-title"><h2>' . $value['name'] . '</h2></div>';

	}
	
	function desc($value) {
		//echo '<tr><td scope="row" colspan="2">' . $value['desc'] . '</td></tr>';
	}
	
	/**
	 * closes the group section
	 */
	function end($value) {
		echo '<div class="save-bottom"><input type="submit" name="save_theme_options" class="button-primary autowidth" value="Save All Changes" /></div></div>';
	}
	
	/**
	 * displays a text input
	 */
	function text($value) {
	
	?>
	
	<div class="wpts_input wpts_text">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if (isset($this->saved_options[$value['id']])) {	echo stripslashes($this->saved_options[$value['id']]);	} else { echo $value['default'];} ?>" />
	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
	</div>
	
	<?php
	}
	
	/**
	 * displays a upload input
	 */
	function upload($value) {
	
	?>
	
	<div class="wpts_input wpts_text">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if (isset($this->saved_options[$value['id']])) {	echo stripslashes($this->saved_options[$value['id']]);	} else { echo $value['default'];} ?>" /><input id="upload_image_button" type="button" value="Upload Image" />
	<div class="clearfix"></div>
	</div>

	<?php
	}
	
	/**
	 * displays a colorpicker
	 */
	function color($value) {
	
	?>
	
	<div class="wpts_input wpts_text">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if (isset($this->saved_options[$value['id']])) {	echo stripslashes($this->saved_options[$value['id']]);	} else { echo $value['default'];} ?>" />
	<script type="text/javascript">addCP("#<?php echo $value['id']; ?>");</script>
	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
	</div>
	
	<?php
	}
	
	/**
	 * displays a textarea
	 */
	function textarea($value) {
	
	?>
	
	<div class="wpts_input wpts_textarea">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="textarea"><?php if (isset($this->saved_options[$value['id']])) {	echo stripslashes($this->saved_options[$value['id']]);	} else { echo $value['default'];} ?></textarea>
	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
	</div>

	<?php 
	
	}
	
	/**
	 * displays a select
	 */
	function select($value) {
	
	?>
		<div class="wpts_input wpts_select">
		<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>

		<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
		<?php
			if(isset($value['prompt'])){
				echo '<option value="">'.$value['prompt'].'</option>';
			}
			if (isset($value['options'])) {
				foreach($value['options'] as $key => $option) {
					echo "<option value='" . $key . "'";
					if (isset($this->saved_options[$value['id']])) {
						if (stripslashes($this->saved_options[$value['id']]) == $key) {
							echo ' selected="selected"';
						}
					} else if ($key == $value['default']) {
						echo ' selected="selected"';
					}
				
					echo '>' . $option . '</option>';
				}
			}
		?>
		</select>

			<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
		</div>
	<?php

	}
	
	/**
	 * displays a toggle checkbox
	 */
	function toggle($value) {
	
	?>
	<div class="wpts_input rm_checkbox">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>

	<?php $checked = '';
		if (isset($this->saved_options[$value['id']])) {
			if ($this->saved_options[$value['id']] == true) {
				$checked = 'checked="checked"';
			}
		} elseif ($value['default'] == true) {
			$checked = 'checked="checked"';
		} ?>
		<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />&nbsp;&nbsp;&nbsp;<span><?php echo $value['desc']; ?></span>

		<div class="clearfix"></div>
	 </div>
	<?php
		
	}
	
}
