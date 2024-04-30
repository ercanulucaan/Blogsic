<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="<?=url('admin/dashboard/index')?>">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Gösterge Paneli</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=url('admin/pages/index')?>">
                <i class="icon-layers menu-icon"></i>
                <span class="menu-title">Sayfalar</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-news" aria-expanded="false" aria-controls="ui-news">
                <i class="icon-file menu-icon"></i>
                <span class="menu-title">Yazılar</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-news">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?=url('admin/news/index')?>">Yazı Listesi</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?=url('admin/news/add')?>">Yeni Yazı Ekle</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?=url('admin/new_categories/index')?>">Kategoriler</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-projects" aria-expanded="false" aria-controls="ui-projects">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Projeler</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-projects">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?=url('admin/projects/index')?>">Proje Listesi</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?=url('admin/projects/add')?>">Yeni Proje Ekle</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?=url('admin/project_categories/index')?>">Kategoriler</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-products" aria-expanded="false" aria-controls="ui-products">
                <i class="icon-folder menu-icon"></i>
                <span class="menu-title">Ürünler</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-products">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?=url('admin/products/index')?>">Ürün Listesi</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?=url('admin/products/add')?>">Yeni Ürün Ekle</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?=url('admin/product_categories/index')?>">Kategoriler</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-sliders" aria-expanded="false" aria-controls="ui-sliders">
                <i class="icon-air-play menu-icon"></i>
                <span class="menu-title">Slaytlar</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-sliders">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?=url('admin/sliders/index')?>">Slayt Listesi</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?=url('admin/sliders/add')?>">Yeni Slayt Ekle</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-portfolio" aria-expanded="false" aria-controls="ui-portfolio">
                <i class="icon-anchor menu-icon"></i>
                <span class="menu-title">Portföy</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-portfolio">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?=url('admin/portfolio/index')?>">Portföy Listesi</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?=url('admin/portfolio/add')?>">Yeni Portföy Ekle</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-references" aria-expanded="false" aria-controls="ui-references">
                <i class="icon-star menu-icon"></i>
                <span class="menu-title">Referanslar</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-references">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?=url('admin/references/index')?>">Referans Listesi</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?=url('admin/references/add')?>">Yeni Referans Ekle</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=url('admin/orders/index')?>">
                <i class="icon-bag menu-icon"></i>
                <span class="menu-title">Siparişler</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=url('admin/messages/index')?>">
                <i class="icon-mail menu-icon"></i>
                <span class="menu-title">Gelen Kutusu</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=url('admin/settings/index')?>">
                <i class="icon-cog menu-icon"></i>
                <span class="menu-title">Genel Ayarlar</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=url('admin/auth/logout')?>">
                <i class="icon-power menu-icon"></i>
                <span class="menu-title">Oturumu Kapat</span>
            </a>
        </li>
    </ul>
</nav>