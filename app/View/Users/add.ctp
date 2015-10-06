<h1><?php echo __('create_u')?></h1>
<?php
    echo $this->Form->create('User');
    echo $this->Form->label(__('username'));
    echo $this->Form->input('username',array('label'=>false));
    echo $this->Form->label(__('pass'));
    echo $this->Form->input('password',array('tupe'=>'password','label'=>false));
    echo $this->Form->label(__('role'));
    echo $this->Form->input('role',array('options'=>array('admin'=>'admin','author'=>'author'),'label'=>false));
    echo $this->Form->end(__('create_u'));
?>