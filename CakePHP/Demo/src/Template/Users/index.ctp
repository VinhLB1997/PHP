<h1>Users</h1>
<?= $this->Html->link('Add User', ['action' => 'add']) ?>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Username</th>
        <th>Password</th>
        <th>Action</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($users as $user): ?>
    <tr>
        <td>
            <?= $this->Html->link($user->name, ['action' => 'view',$user->id]) ?>
        </td>
        <td>
            <?= $user->email?>
        </td>
        <td>
            <?= $user->username?>
        </td>
        <td>
            <?= $user->password?>
        </td>
        <td>
            <?= $this->Form->postLink(
                    'Delete',
                    ['action' => 'delete', $user->id],
                    ['confirm' => 'Are you sure?'])
                ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
