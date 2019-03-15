<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Partner[]|\Cake\Collection\CollectionInterface $partners
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
                    <li><a href="#">Partner</a></li>
                    <li class="active">List</li>
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
                        <strong class="card-title">List</strong>
                    </div>
                    <div class="card-body"><?= $this->Flash->render() ?>
                        <table class="table">
                            <thead>
                                    <tr>
                                  
                                    <th scope="col">Partner Name</th>
                                    <th scope="col">Product Image</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php foreach ($partners as $partner): ?>
                                <tr>
                                   
                                    <td><?= $partner->name ?></td>
                                    <td style="width: 246px; height: 76px;">
                                        <?=$this->html->image('/projectimg/'.$partner->logoimg,['alt'=>'netpro','height'=>'50','width'=>'60'])?>
                                        </td>
                                    <td style="text-align: center;">
                                        <?= $this->Html->link(
                                        $this->Html->tag('i', '', 
                                            array('class' => 'fa fa-pencil')).' ', 
                                            array('controller' => 'partners', 'action' => 'edit', $partner->id), 
                                            array('escape' => false)
                                        ) ?>

                                     <?= $this->Form->postLink(
                                        __(''), 
                                        ['action' => 'delete', $partner->id], 
                                        ['confirm' => __('Are you sure you want to delete # {0}?', $partner->id), 'class'=>'fa fa-trash']
                                     ) 
                                     ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="paginator pull-right">
                            <ul class="pagination">
                                <?= $this->Paginator->first('<< ' . __('first')) ?>
                                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                                <?= $this->Paginator->numbers() ?>
                                <?= $this->Paginator->next(__('next') . ' >') ?>
                                <?= $this->Paginator->last(__('last') . ' >>') ?>
                            </ul>
                            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        <!--/ end row-->
    </div>
    <!--/end animated fadeIn-->
 </div>
 <!--/end content mt-3-->
