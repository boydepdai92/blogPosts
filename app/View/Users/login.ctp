<div class="users form">
    <?php //echo $this->Flash->render('auth');?>
    <?php echo $this->Form->create('Login');?>
        <fieldset>
            <legend>
                <?php
                    echo __('message_login');
                ?>
            </legend>
            <?php
                echo $this->Form->label(__('username'));
                echo $this->Form->input('username',array('label'=>false));
                echo $this->Form->label(__('pass'));
                echo $this->Form->input('password',array('type'=>'password','label'=>false));
            ?>
        </fieldset>
    <?php echo $this->Form->end(__('login'));?>
</div>