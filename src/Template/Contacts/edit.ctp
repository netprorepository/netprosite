<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contact $contact
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
                    <li><a href="#">Contact</a></li>
                    <li class="active">Edit Contact</li>
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
                        <?= $this->Form->create($contact,['type'=>'file']) ?>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Title</label>
                                <?php
                                    echo $this->Form->control('name', ['class'=>'form-control', 'label'=>false]);
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="vat" class=" form-control-label">Address</label>
                                 <?php
                                    echo $this->Form->control('address', ['class'=>'ckeditor form-control', 'label'=>false, 'type'=>'textarea']);
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="vat" class=" form-control-label">Telephone</label>
                                 <?php
                                    echo $this->Form->control('telephone', ['class'=>'ckeditor form-control', 'label'=>false, 'type'=>'textarea']);
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="vat" class=" form-control-label">Email</label>
                                 <?php
                                    echo $this->Form->control('email', ['class'=>'ckeditor form-control', 'label'=>false, 'type'=>'textarea']);
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="vat" class=" form-control-label">SEO Title</label>
                                 <?php
                                    echo $this->Form->control('seo_title', ['class'=>'ckeditor form-control', 'label'=>false, 'type'=>'textarea']);
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="vat" class=" form-control-label">SEO Description</label>
                                 <?php
                                    echo $this->Form->control('seo_description', ['class'=>'ckeditor form-control', 'label'=>false, 'type'=>'textarea']);
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="vat" class=" form-control-label">SEO Keywords</label>
                                 <?php
                                    echo $this->Form->control('seo_keywords', ['class'=>'ckeditor form-control', 'label'=>false, 'type'=>'textarea']);
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="vat" class=" form-control-label">Url</label>
                                 <?php
                                    echo $this->Form->control('url', ['class'=>'ckeditor form-control', 'label'=>false, 'type'=>'textarea']);
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

