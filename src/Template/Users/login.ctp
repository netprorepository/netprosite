
    <!--div class="account-area mb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                     <?= $this->Form->create(null) ?> <?= $this->Flash->render() ?>
                        
                       <?= $this->Form->input('username',['label'=>'USER NAME :','class'=>'form-control top','required',
        'type'=>'email']) ?>
                      
                       <?= $this->Form->input('password', ['label'=>'PASSWORD :','class'=>'form-control bottom','required']) ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <input id="password" type="checkbox">
                                <label for="password">Save Password</label>
                            </div>
                            <div class="col-lg-6 text-right">
                                <a href="#">Forget Your Password?</a>
                            </div>
                        </div>
                        <?= $this->Form->button('Login',['class'=>'btn btn-large btn-primary']) ?>
                       
                        
                           <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div-->
   
<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="index.html">
                    <img class="align-content" src="images/logo.png" alt="">
                </a>
            </div>
            <div class="login-form"><?= $this->Flash->render() ?>
              <?= $this->Form->create(null, [ 'url' => ['controller' => 'Users', 'action' => 'login'],'class' => '']); ?>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" placeholder="Email" name="username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    
                    <?= $this->Form->button('Sign In',['class'=>'btn btn-success btn-flat m-b-30 m-t-30']) ?>
                    <!--div class="social-login-content">
                        <div class="social-button">
                            <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Sign in with facebook</button>
                            <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Sign in with twitter</button>
                        </div>
                    </div-->
                   
               <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>

