<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                            <img src="<?= url($settings['site_header_logo_path']) ?>" alt="logo">
                        </div>
                        <h4>Merhaba, başlamaya hazır mısın?</h4>
                        <h6 class="font-weight-light">Giriş yaparak devam edin.</h6>
                        <form class="pt-3" method="post" action="">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="username"
                                       placeholder="Kullanıcı adı">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" name="password"
                                       placeholder="Şifre">
                            </div>
                            <div class="mt-3 d-grid gap-2">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                   href="#">Giriş Yap</button>
                            </div>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" class="form-check-input">
                                        Oturumumu açık tut
                                    </label>
                                </div>
                                <a href="<?=url('admin/auth/forgot_password')?>" class="auth-link text-black">Şifrenizi mi unuttunuz?</a>
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                                Bir hesabınız yok mu? <a href="<?=url('admin/auth/register')?>" class="text-primary">Hesap oluşturun</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>