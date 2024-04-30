<div class="container-scroller">
    <?=$this->loadSection('pro-banner')?>
    <?=$this->loadSection('nav')?>
    <div class="container-fluid page-body-wrapper">
        <?=$this->loadSection('sidebar')?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <small class="float-end"><a href="<?=url('admin/pages/add')?>">Ekle</a></small>
                                <h4 class="card-title">Sayfalar</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Başlık</th>
                                            <th>URL</th>
                                            <th>Kısa Açıklama</th>
                                            <th>Durum</th>
                                            <th>İşlemler</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($data as $item): ?>
                                            <tr>
                                                <td><?=$item->id?></td>
                                                <td><?=$item->title?></td>
                                                <td><?=$item->slug?></td>
                                                <td><?=$item->description?></td>
                                                <td>
                                                    <?php if($item->status): ?>
                                                        <span class="badge bg-success rounded-3 fw-semibold">Aktif</span>
                                                    <?php else: ?>
                                                        <span class="badge bg-danger rounded-3 fw-semibold">Pasif</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <a href="<?=url('admin/pages/edit/'.$item->id)?>" class="btn btn-light btn-sm">Düzenle</a>
                                                    <a href="<?=url('admin/pages/delete/'.$item->id)?>" class="btn btn-light btn-sm">Sil</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?=$this->loadSection('footer')?>
        </div>
    </div>
</div>
