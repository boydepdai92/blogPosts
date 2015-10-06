<h1><?php echo __('add')?></h1>
<?php
    echo $this->Form->create('Post');
    echo $this->Form->label(__('title'));
    echo $this->Form->input('title',array('label'=>false));
    echo $this->Form->label(__('body'));
    echo $this->Form->input('body',array('label'=>false));
    echo $this->Form->end(__('add'));
?>