<h1><?php echo __('edit')?> Post</h1>
<?php
    echo $this->Form->create('Post');
    echo $this->Form->label(__('title'));
    echo $this->Form->input('title',array('value'=>$data['Post']['title'],'label'=>false));
    echo $this->Form->label(__('body'));
    echo $this->Form->input('body',array('value'=>$data['Post']['body'],'label'=>false));
    echo $this->Form->input('id',array('type'=>'hidden','value'=>$data['Post']['id']));
    echo $this->Form->end(__('save'));
?>