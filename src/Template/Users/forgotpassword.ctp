
							<h3>FORGOT PASSWORD</h3>
   <?= $this->Form->create('User') ?>
     <br />
    <fieldset>
<!--<legend class="text-primary"><?= __('FORGOT PASSWORD') ?></legend>-->
<br />
 <?= $this->Flash->render() ?>

<?= $this->Form->input('username',['label'=>'Your Email Address :','class'=>'form-control','required',
        'type'=>'email','placeholder'=>'Enter Your Email Address']) ?>
<br />

</fieldset>
       <br /><br />
<?= $this->Form->button('Submit',['class'=>'btn btn-large btn-primary']) ?>
       <p style="alignment-adjust: central" class="pull-right">
   
   <?= $this->Html->link('Login', ['controller'=>'Users','action' => 'login']) ?>
   </p>
    <?= $this->Form->end() ?><br />


