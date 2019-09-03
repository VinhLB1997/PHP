<!-- File: src/Template/Articles/view.ctp -->

<h1><?= ($user->name) ?></h1>
<p><?= ($user->email) ?></p>
<p><?= $this->Html->link('Edit', ['action' => 'edit', $user->id]) ?></p>
