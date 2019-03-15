<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Accomplishment $accomplishment
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
                    <li><a href="#">Service</a></li>
                    <li class="active">Edit Service</li>
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
                    <div class="card-header">
                        <strong class="card-title">Edit</strong>
                    </div>
                    <div class="card-body card-block"><?= $this->Flash->render() ?>
                        <?= $this->Form->create($accomplishment,['type'=>'file']) ?>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Title</label>
                                <?php
                                    echo $this->Form->control('title', ['class'=>'form-control', 'label'=>false]);
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="vat" class=" form-control-label">Value</label>
                                 <?php
                                    echo $this->Form->control('value', ['class'=>'form-control', 'label'=>false]);
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


