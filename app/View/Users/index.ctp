<h1><?php echo __('user_m')?></h1>
<table>
    <tr>
        <th><?php echo __('id_u');?></th>
        <th><?php echo __('username');?></th>
        <th><?php echo __('edit');?></th>
        <th><?php echo __('delete');?></th>
        <th><?php echo __('created');?></th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->
    <?php
        echo $this->Html->link(__('create1'),array('controller'=>'users','action'=>'add'))."<br>";
        echo $this->Html->link(__('login'),array('controller'=>'users','action'=>'login'));
    ?>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user['User']['id']; ?></td>
            <td>
                <?php echo $this->Html->link($user['User']['username'],
                    array('controller' => 'users', 'action' => 'view', $user['User']['id']));
                ?>
            </td>
            <td>
                <?php
                echo $this->Html->link(__('edit'), array('controller'=>'users','action'=>'edit',$user['User']['id']));
                ?>
            </td>
            <td>
                <?php
                echo $this->Html->link(__('delete'), array('controller'=>'users','action'=>'delete',$user['User']['id']),array('confirm'=>__('message_u')));
                ?>
            </td>
            <td><?php echo $user['User']['created']; ?></td>
        </tr>
    <?php endforeach; ?>
    <?php unset($user); ?>
</table>
