<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
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
                    <li class="active">Add Service</li>
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
                        <strong class="card-title">Add</strong>
                    </div>
                    <div class="card-body card-block"><?= $this->Flash->render() ?>
                         <?= $this->Form->create($service,['type'=>'file']) ?>
                            <div class="form-group">  <?= $this->Flash->render() ?>
                                <label for="company" class=" form-control-label">Service Name</label>
                                <?php
                                    echo $this->Form->control('name', ['class'=>'form-control', 'label'=>false]);
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="vat" class=" form-control-label">Description</label>
                                 <?php
                                    echo $this->Form->control('description', 
                                         ['class'=>'ckeditor form-control', 'id'=>'description', 'label'=>false, 'type'=>'textarea']
                                    );
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


