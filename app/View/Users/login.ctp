<div class="row" style="margin-top:30px">
    <div class="col-xs-4 col-sm-offset-2 col-md-offset-3">
        <?php echo $this->Session->flash('auth'); ?>
        <?php echo $this->Form->create('User'); ?>
        <fieldset>
            <legend><?php echo __('Sign In'); ?></legend>
            <?php echo $this->Form->input('username');
            echo $this->Form->input('password');
            ?>
        </fieldset>
        <?php echo $this->Form->end(__('Login')); ?>
    </div>
</div>
