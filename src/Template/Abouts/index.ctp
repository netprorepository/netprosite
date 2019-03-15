<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\About[]|\Cake\Collection\CollectionInterface $abouts
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
                    <li><a href="#">About</a></li>
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
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                    <tr>
<!--                                    <th scope="col">#</th>-->
                                    <th scope="col">Title</th>
                                    <th scope="col">Image</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody><?= $this->Flash->render() ?>
                                 <?php foreach ($abouts as $about): ?>
                                <tr>
<!--                                    <th scope="row"><?= $this->Number->format($about->id) ?></th>-->
                                    <td><?= $about->title ?></td>
                                    <td style="width: 246px; height: 76px;">
                                         <?=$this->html->image('/projectimg/'.$about->imageurl,['alt'=>'netpro','height'=>'50','width'=>'60'])?>
<!--                                        <img src="projectimg/<?=$about->imageurl;?>" alt="">-->
                                    </td>
                                    <td style="text-align: center;">
                                        <?= $this->Html->link(
                                        $this->Html->tag('i', '', 
                                            array('class' => 'fa fa-pencil')).' ', 
                                            array('controller' => 'abouts', 'action' => 'edit', $about->id), 
                                            array('escape' => false)
                                        ) ?>
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