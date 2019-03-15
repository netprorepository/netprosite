<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Socialmedia $socialmedia
 */
?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Social Media</a></li>
                    <li class="active">Edit SM</li>
                </ol>
            </div>
        </div>
    </div>
</div>
 <div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><?= $this->Flash->render() ?>
                        <strong class="card-title">Edit</strong>
                    </div>
                    <div class="card-body card-block">
                        <?= $this->Form->create($socialmedia,['type'=>'file']) ?>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Facebook</label>
                                <?php
                                    echo $this->Form->control('facebook', ['class'=>'form-control', 'label'=>false]);
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="vat" class=" form-control-label">Twitter</label>
                                 <?php
                                    echo $this->Form->control('twitter', ['class'=>'form-control', 'label'=>false]);
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="vat" class=" form-control-label">LinkedIn</label>
                                 <?php
                                    echo $this->Form->control('linkedin', ['class'=>'form-control', 'label'=>false]);
                                ?>
                            </div>
                            
                            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-primary']) ?>
                      <?= $this->Form->end() ?>   
                    </div>
                </div>
            </div>    
        </div>
        <!--/ end row-->
    </div>
    <!--/end animated fadeIn-->
 </div>
 <!--/end content mt-3-->


