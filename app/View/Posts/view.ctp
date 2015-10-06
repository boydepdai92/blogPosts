<h1><?php echo __('title')?>:</h1>
<h1><?php echo h($post['Post']['title']);?></h1>
<p><?php echo __('created');?>: <?php echo $post['Post']['created'];?></p>
<h1><?php echo __('body')?>:</h1>
<span><?php echo $post['Post']['body'];?></span>