<h3>NEW USER ACCOUNT </h3>
 
    
    <?= $this->Form->create($user); ?>
	
    <fieldset>
<!--        <legend>New User Account</legend>-->
	<?= $this->Flash->render() ?>
        <?php echo ' <div class="form-group form-group-ghost form-group-icon-left">';
            echo $this->Form->input('username', ['label'=>'YOUR EMAIL ADDRESS :', 'type'=>'email','class'=>'form-control',
                'placeholder'=>'your email address','required']);
            echo '</div>';
            echo ' <div class="form-group form-group-ghost form-group-icon-left">';
            echo $this->Form->input('password' , ['label'=>'PASSWORD :','class'=>'form-control ','type'=>'password',
                'placeholder'=>'choose a password','required']);
         echo '</div>';
            echo ' <div class="form-group form-group-ghost form-group-icon-left">';
            echo $this->Form->input('confirm_password' , ['label'=>'CONFIRM PASSWORD :', 'type'=>'password'
                ,'class'=>'form-control','placeholder'=>'confirm your password','required']);
          
        ?>      
        
    </fieldset>
    <?= $this->Form->button('Sign up',['class'=>'btn btn-large btn-success pull-right']) ?><br />
     <p style="alignment-adjust: central" class="pull-left">
   Already have an account?
   <?= $this->Html->link('Login', ['controller'=>'Users','action' => 'login']) ?> 
   </p>
    <?= $this->Form->end() ?>
  




