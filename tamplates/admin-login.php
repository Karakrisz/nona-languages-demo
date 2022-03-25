<section class="admin-login-content">
    <?php if ((isset($_SESSION['admin_users']))): ?>
    <div class="admin-user-login-data">
        <p class="admin-user-login-data__p"><i class="admin-user-login-data__p__i">Jelenleg:</i>
            <?php esc($_SESSION["admin_users"]["admin_user_name"])?>, be van jelentkezve !</p>
        <p class="admin-user-login-data__p"><i class="admin-user-login-data__p__i">Fontos, hogy jelentkezz ki, ha
                időpontot szeretnél rögzíteni, és nem
                Te
                vagy
                a <?php esc($_SESSION["admin_users"]["admin_user_name"])?> :)</i>
        </p>
        <a class="user-login-data__link" href="/admin-logout">Kijelentkezés</a>
    </div>
    <?php endif?>
    <div class="container">
        <div class="card login-content-card mx-auto border-0">
            <div class="card-header border-bottom-0 bg-transparent">
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#pills-login" role="tab"><i
                                class="fas fa-user mr-1"></i>
                            Bejelentkezés</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#pills-register" role="tab"><i
                                class="fas fa-user-plus mr-1"></i>
                            Regisztráció</a>
                    </li>
                </ul>
            </div>

            <div class="card-body pb-4">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel"
                        aria-labelledby="pills-login-tab">
                        <form method="POST" action="/admin-login-submit">
                            <div class="form-group">
                                <i class="fas fa-envelope prefix"></i>
                                <input type="email" name="admin_user_email" class="form-control" id="admin_user_email"
                                    placeholder="Email cím" required autofocus>
                                <label data-error="wrong" data-success="right" for="modalLRInput10">Email
                                    címe</label>
                            </div>

                            <div class="form-group">
                                <i class="fas fa-lock prefix"></i>
                                <input type="password" name="admin_user_password" class="form-control"
                                    id="admin_user_password" placeholder="Jelszó" required>
                                <label data-error="wrong" data-success="right" for="modalLRInput11">Jelszava</label>
                            </div>

                            <div class="text-center mt-2">
                                <button type="submit" class="btn login-btn">Bejelentkezés <i
                                        class="fas fa-sign-in ml-1"></i></button>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="pills-register-tab">
                        <form id="admin-registration" method="POST" action="/admin-registration">
                            <div class="form-group">
                                <i class="fas fa-user"></i>
                                <input type="text" name="admin_user_name_reg" id="admin_user_name_reg"
                                    class="form-control" placeholder="felhasználó név" required autofocus>
                                <label data-error="wrong" data-success="right" for="modalLRInput12">Az Ön
                                    neve</label>
                            </div>

                            <div class="form-group">
                                <i class="fas fa-envelope prefix"></i>
                                <input type="email" name="admin_user_email_reg" id="admin_user_email_reg"
                                    class="form-control" placeholder="Email cím" required>
                                <label data-error="wrong" data-success="right" for="modalLRInput12">Az email
                                    címe</label>
                            </div>

                            <div class="form-group">
                                <i class="fas fa-lock prefix"></i>
                                <input type="password" name="admin_user_password_reg" id="admin_user_password_reg"
                                    class="form-control" placeholder="jelszó" required>
                                <label data-error="wrong" data-success="right" for="modalLRInput13">A
                                    jelszava</label>
                            </div>

                            <div class="form-group">
                                <i class="fas fa-lock prefix"></i>
                                <input type="password" name="admin_user_password_confirm"
                                    id="admin_user_password_confirm" class="form-control" placeholder="jelszó újra"
                                    required>
                                <label data-error="wrong" data-success="right" for="modalLRInput14">Jelszó
                                    újra</label>
                            </div>
                            <div class="alert alert-danger inserted-alert-danger login-alert">
                                <p id="admin_incorrect_password">
                                </p>
                            </div>
                            <div class="alert alert-success inserted-alert-success login-alert">
                                <p id="admin_inserted">
                                </p>
                            </div>

                            <div class="text-center form-sm mt-5">
                                <button type="submit" class="btn login-btn">Regisztráció <i
                                        class="fas fa-sign-in ml-1"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>