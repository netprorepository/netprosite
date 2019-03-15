<section class="parallax fullscreen" style="background-image: url(../images/parallax/4.jpg)">
			<div class="container container-fullscreen">
				<div class="text-middle">
					<div class="row">
						<div class="col-md-6 center p-30 background-white">
							<h3>CHANGE PASSWORD</h3>
 <?= $this->Flash->render() ?>
<?= $this->Form->create('User'); ?>
     <br />
    <fieldset>
<!--<legend class="text-primary"><?= __('Change Password') ?></legend>-->
<br />
<?= $this->Flash->render() ?>
<?= $this->Form->input('password',['label'=>'New Password :','class'=>'form-control','required',
        'placeholder'=>'Your New Password']) ?>
<br />

<?= $this->Form->input('confirm_password',['label'=>'Confirm New Password :','class'=>'form-control','required',
        'type'=>'password','placeholder'=>'Confirm New Password']) ?>
<br />

</fieldset>
       <br /><br />
<?= $this->Form->button('Change Password',['class'=>'btn btn-large btn-primary']) ?>
    <?= $this->Form->end() ?><br />
    
    </div>
					</div>
				</div>
			</div>
		</section>
