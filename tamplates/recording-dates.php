<section class="recording-dates-content">
    <?php if ((isset($adminUsers["adminLoggedIn"]) && $adminUsers["adminLoggedIn"])): ?>
    <div class="container">
        <h2 class="mb-100">Időpontok rögzítése</h2>
        <ul class="recording-dates-content-ul nav nav-tabs d-flex justify-content-center">
            <li class="active">
                <a href="#tab1" data-toggle="tab">Hétfő</a>
            </li>
            <li>
                <a href="#tab2" data-toggle="tab">Kedd</a>
            </li>
            <li>
                <a href="#tab3" data-toggle="tab">Szerda</a>
            </li>
            <li>
                <a href="#tab4" data-toggle="tab">Csütörtök</a>
            </li>
            <li>
                <a href="#tab5" data-toggle="tab">Péntek</a>
            </li>
        </ul>
        <div class="mt-100 tab-content">

            <div class="tab-pane active" id="tab1">
                <form id="mondaySubmit" method="POST">
                    <div class="row d-flex justify-content-around">

                        <div class="col-xl-12 form-group">
                            <label class="recording-dates-content__label" for="monday">Kérlek írd be a diákoknak, a
                                szabad óráidat a Hétfői napra
                            </label>
                            <p><i>pl: 9:00</i></p>
                            <input type="text" id="lesson_date" name="lesson_date" required>
                        </div>

                        <div class="col-xl-12 form-group">
                            <label class="recording-dates-content__label" for="monday"> Hányas teremben?
                            </label>
                            <p><i>pl: 6</i></p>
                            <input type="text" id="monday_room" name="monday_room" required>
                        </div>

                        <input type="hidden" name="monday_input" id="monday_input" value="Hétfő">

                    </div>
                    <div class="alert alert-success inserted-alert-success">
                        <p id="monday-inserted">
                        </p>
                    </div>
                    <button type="submit" class="btn recording-dates-content__btn mt-30">Rögzítés</button>
                </form>
                <br>
                <!-- <button type="button" class="btn btn-primary mt-30" data-toggle="modal" data-target="#mondayModal">
                    Hétfői rögzített ételek megtekintése
                </button> -->

                <!-- The Modal -->
                <div class="fade modal" id="mondayModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Hétfői ételek</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <?php foreach ($getmonday as $monday): ?>
                                        <form method="POST" action="/administ/<?php esc($monday['id'])?>/mondaydelete">
                                            <ul>
                                                <li>
                                                    <h3 class="text-left"><?php esc($monday["monday_name"])?></h3>
                                                    <button type="submit"
                                                        class="btn btn-danger float-right">Törlés</button>
                                                </li>
                                            </ul>
                                        </form>
                                        <?php endforeach;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab2">
                <form id="tuesdaySubmit" method="POST" action="/tuesdaySubmit">
                    <div class="row d-flex justify-content-around">

                        <div class="col-xl-6 form-group">
                            <label for="monday">Kérlek írd be a diákoknak, a szabad óráidat a Keddi napra </label>
                            <i>pl: 9:00</i>
                            <input type="text" id="lesson_date" name="lesson_date" required>
                        </div>

                    </div>
                    <div class="alert alert-success inserted-alert-success">
                        <p id="tuesday-inserted">
                        </p>
                    </div>
                    <button type="submit" class="btn recording-dates-content__btn mt-30">Rögzítés</button>
                </form>
                <br>
                <!-- <button type="button" class="btn btn-primary mt-30" data-toggle="modal" data-target="#tuesdayModal">
                    Keddi rögzített ételek megtekintése
                </button> -->

                <!-- The Modal -->
                <div class="fade modal" id="tuesdayModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Keddi ételek</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <?php foreach ($gettuesday as $tuesday): ?>
                                        <form method="POST"
                                            action="/administ/<?php esc($tuesday['id'])?>/tuesdaydelete">
                                            <ul>
                                                <li>
                                                    <h3 class="text-left"><?php esc($tuesday["tuesday_name"])?></h3>
                                                    <button type="submit"
                                                        class="btn btn-danger float-right">Törlés</button>
                                                </li>
                                            </ul>
                                        </form>
                                        <?php endforeach;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab3">
                <form id="wednesdaySubmit" method="POST" action="/wednesdaySubmit">
                    <div class="row d-flex justify-content-around">

                        <div class="col-xl-6 form-group">
                            <label for="monday">Kérlek írd be a diákoknak, a szabad óráidat a Szerdai napra </label>
                            <i>pl: 9:00</i>
                            <input type="text" id="lesson_date" name="lesson_date" required>
                        </div>

                    </div>
                    <div class="alert alert-success inserted-alert-success">
                        <p id="wednesday-inserted">
                        </p>
                    </div>
                    <button type="submit" class="btn recording-dates-content__btn mt-30">Rögzítés</button>
                </form>
                <br>
                <!-- <button type="button" class="btn btn-primary mt-30" data-toggle="modal" data-target="#wednesdayModal">
                    Szerdai rögzített ételek megtekintése
                </button> -->

                <!-- The Modal -->
                <div class="fade modal" id="wednesdayModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Szerdai ételek</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <?php foreach ($getwednesday as $wednesday): ?>
                                        <form method="POST"
                                            action="/administ/<?php esc($wednesday['id'])?>/wednesdaydelete">
                                            <ul>
                                                <li>
                                                    <h3 class="text-left"><?php esc($wednesday["wednesday_name"])?></h3>
                                                    <button type="submit"
                                                        class="btn btn-danger float-right">Törlés</button>
                                                </li>
                                            </ul>
                                        </form>
                                        <?php endforeach;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="tab4">
                <form id="thursdaySubmit" method="POST" action="/thursdaySubmit">
                    <div class="row d-flex justify-content-around">

                        <div class="col-xl-6 form-group">
                            <label for="monday">Kérlek írd be a diákoknak, a szabad óráidat a Csütörtöki napra </label>
                            <i>pl: 9:00</i>
                            <input type="text" id="lesson_date" name="lesson_date" required>
                        </div>

                    </div>
                    <div class="alert alert-success inserted-alert-success">
                        <p id="thursday-inserted">
                        </p>
                    </div>
                    <button type="submit" class="btn recording-dates-content__btn mt-30">Rögzítés</button>
                </form>
                <br>
                <!-- <button type="button" class="btn btn-primary mt-30" data-toggle="modal" data-target="#thursdayModal">
                    Csütörtöki rögzített ételek megtekintése
                </button> -->

                <!-- The Modal -->
                <div class="fade modal" id="thursdayModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Csütörtöki ételek</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <?php foreach ($getthursday as $thursday): ?>
                                        <form method="POST"
                                            action="/administ/<?php esc($thursday['id'])?>/thursdaydelete">
                                            <ul>
                                                <li>
                                                    <h3 class="text-left"><?php esc($thursday["thursday_name"])?></h3>
                                                    <button type="submit"
                                                        class="btn btn-danger float-right">Törlés</button>
                                                </li>
                                            </ul>
                                        </form>
                                        <?php endforeach;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="tab5">
                <form id="fridaySubmit" method="POST" action="/fridaySubmit">
                    <div class="row d-flex justify-content-around">

                        <div class="col-xl-6 form-group">
                            <label for="monday">Kérlek írd be a diákoknak, a szabad óráidat a Pénteki napra </label>
                            <i>pl: 9:00</i>
                            <input type="text" id="lesson_date" name="lesson_date" required>
                        </div>

                    </div>
                    <div class="alert alert-success inserted-alert-success">
                        <p id="friday-inserted">
                        </p>
                    </div>
                    <button type="submit" class="btn recording-dates-content__btn mt-30">Rögzítés</button>
                </form>
                <br>
                <!-- <button type="button" class="btn btn-primary mt-30" data-toggle="modal" data-target="#fridayModal">
                    Pénteki rögzített ételek megtekintése
                </button> -->

                <!-- The Modal -->
                <div class="fade modal" id="fridayModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Pénteki ételek</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <?php foreach ($getfriday as $friday): ?>
                                        <form method="POST" action="/administ/<?php esc($friday['id'])?>/fridaydelete">
                                            <ul>
                                                <li>
                                                    <h3 class="text-left"><?php esc($friday["friday_name"])?></h3>
                                                    <button type="submit"
                                                        class="btn btn-danger float-right">Törlés</button>
                                                </li>
                                            </ul>
                                        </form>
                                        <?php endforeach;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php else: ?>
    <div class="services-sec">
        <div class="row services-details text-center">
            <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2">

                <h3 class="heading text-center">Az oldal eléréshez, tanári jogosultság kell</h3>
                <a target="_blank" class="btn our-btn rounded-pill" href="/admin-login">van jogosultságom</a>
            </div>
        </div>
    </div>
    <?php endif?>
</section>