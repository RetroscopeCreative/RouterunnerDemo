<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.07.17.
 * Time: 8:51
 */
$debug =1;
?>
<label class="sr-only" for="<?php echo input("input-id"); ?>"><?php echo input("label"); ?></label>
<input type="text" class="form-control" name="<?php echo input("field"); ?>" id="<?php echo input("input-id"); ?>" placeholder="<?php echo input("label"); ?>" data-mandatory='<?php echo input("mandatory"); ?>' data-regexp='<?php echo input("regexp"); ?>' value="<?php echo input("value"); ?>">
