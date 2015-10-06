<h1>Edit User</h1>
<?php
    echo $this->Form->create('User');
    echo $this->Form->label(__('username'));
    echo $this->Form->input('username',array('value'=>$user['User']['username'],'label'=>false));
    echo $this->Form->label(__('pass'));
    echo $this->Form->input('password',array('tupe'=>'password','label'=>false));
    echo $this->Form->label(__('role'));
    echo $this->Form->input('role',array('type'=>'select','options'=>array('admin'=>'admin','author'=>'author'),'selected'=>$user['User']['role'],'label'=>false));
    echo $this->Form->end(__('create_u'));
?>