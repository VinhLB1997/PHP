<!-- File: src/Template/Articles/add.ctp -->

<h1>Add User</h1>
<?php
    echo $this->Form->create($user);
    // Hard code the user for now.
    echo $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);
    echo $this->Form->control('name');
    echo $this->Form->control('email');
    echo $this->Form->control('username');
    echo $this->Form->control('password');
    echo $this->Form->button(__('Save User'));
    echo $this->Form->end();
?>
