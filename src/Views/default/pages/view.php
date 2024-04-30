<?= $this->loadSection('preloader') ?>
<?= $this->loadSection('header') ?>
<div class="breadcrumbs" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content left">
                    <h1 class="page-title"><?= $data->title ?? null; ?></h1>
                    <p><?= $data->description ?? null; ?></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content right">
                    <ul class="breadcrumb-nav">
                        <li><a href="<?=url()?>">Anasayfa</a></li>
                        <li><?= $data->title ?? null; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>
                    <?= $data->content ?? null; ?>
                </p>
            </div>
        </div>
    </div>
</section>
<?= $this->loadSection('footer') ?>
<?= $this->loadSection('scroll_top') ?>
