<h1><?php echo __('blog_posts'); ?></h1>
    <table>
        <tr>
            <th><?php echo __('id'); ?></th>
            <th><?php echo __('title'); ?></th>
            <th><?php echo __('edit'); ?></th>
            <th><?php echo __('delete'); ?></th>
            <th><?php echo __('created'); ?></th>
        </tr>

        <!-- Here is where we loop through our $posts array, printing out post info -->
        <?php
            echo $this->Html->link(__('add'),array('controller'=>'posts','action'=>'add'));
        ?>
        <?php foreach ($posts as $post): ?>
        <tr>
            <td><?php echo $post['Post']['id']; ?></td>
            <td>
                <?php echo $this->Html->link($post['Post']['title'],
                        array('controller' => 'posts', 'action' => 'view', $post['Post']['id']));
                ?>
            </td>
            <td>
                <?php
                    echo $this->Html->link(__('edit'), array('controller'=>'posts','action'=>'edit',$post['Post']['id']));
                ?>
            </td>
            <td>
                <?php
                    echo $this->Html->link(__('delete'), array('controller'=>'posts','action'=>'delete',$post['Post']['id']),array('confirm'=>__('message')));
                ?>
            </td>
            <td><?php echo $post['Post']['created']; ?></td>
        </tr>
        <?php endforeach; ?>
        <?php unset($post); ?>
    </table>