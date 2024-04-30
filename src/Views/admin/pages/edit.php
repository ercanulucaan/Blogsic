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
                                <form action="" method="post" enctype="multipart/form-data" class="row">
                                    <div class="form-group col-md-6">
                                        <label for="title">Sayfa Başlığı</label>
                                        <input type="text" class="form-control" id="title" name="title" value="<?=$data->title ?? null?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="slug">Seo URL</label>
                                        <input type="text" class="form-control" id="slug" name="slug" value="<?=$data->slug ?? null?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="keywords">Anahtar Kelimeler</label>
                                        <input type="text" class="form-control" id="keywords" name="keywords" value="<?=$data->keywords ?? null?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="description">Kısa Açıklama</label>
                                        <input type="text" class="form-control" id="description" name="description" value="<?=$data->description ?? null?>">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="content">İçerik</label>
                                        <textarea class="form-control" id="content" name="content"><?=$data->content ?? null?></textarea>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="show_in_menu">Menüde Göster</label>
                                        <select class="form-select" name="status" id="show_in_menu">
                                            <option value="0" <?=$data->show_in_menu ? '' : 'selected'?>>Hayır</option>
                                            <option value="1" <?=$data->show_in_menu ? 'selected' : ''?>>Evet</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="order_id">Sıralama</label>
                                        <input type="text" class="form-control" id="order_id" name="order_id"  value="<?=$data->order_id ?? null?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="status">Yayın Durumu</label>
                                        <select class="form-select" name="status" id="status">
                                            <option value="0" <?=$data->status ? '' : 'selected'?>>Taslak</option>
                                            <option value="1" <?=$data->status ? 'selected' : ''?>>Yayında</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Kaydet</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?=$this->loadSection('footer')?>
        </div>
    </div>
</div>
