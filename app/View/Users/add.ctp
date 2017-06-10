<?php
/* display message saved in session if any */
echo $this->Session->flash();
?>
<div class="row" style="margin-top:30px">
    <div class="col-xs-4 col-sm-offset-2 col-md-offset-3">
        <?php echo $this->Form->create('User'); ?>
        <fieldset>
            <legend><?php echo __('Sign Up'); ?></legend>
            <?php
            echo $this->Form->input('username');
            echo $this->Form->input('password');
            ?>
        </fieldset>
        <?php echo $this->Form->end(__('Submit')); ?>
    </div>
</div>