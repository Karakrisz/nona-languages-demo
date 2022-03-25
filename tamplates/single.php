<main class="container mt-5">
    <div class="reservation-content">
        <div class="row">
            <div class="col-md-12">
                <form id="singleMondaySubmit" method="post" action="/Monday/<?php esc($Monday["id"])?>">
                    <div class="reservation-content-form-box form-group">
                        <h3 class="reservation-content-form-box__h3">Időpont foglalása </h3>
                        <h4 class="reservation-content-form-box__h4"><?php esc($Monday["teacher"])?> <span>
                            </span> </h4>
                        <i class="reservation-content-form-box__i"><?php esc($Monday["lesson_date"])?>
                            időpontra</i>

                        <input type="hidden" name="single_teacher_email" id="single_teacher_email"
                            value="<?php esc($Monday["email"])?>">

                        <input type="hidden" name="single_monday_day" id="single_monday_day"
                            value="<?php esc($Monday["day"])?>">

                        <input type="hidden" name="single_monday_room" id="single_monday_room"
                            value="<?php esc($Monday["room"])?>">
                        <input type="hidden" name="single_monday_date" id="single_monday_date"
                            value="<?php esc($Monday["lesson_date"])?>">
                    </div>
                    <input type="hidden" name="monday_mail_event" id="monday_mail_event" value="monday_sendemail">
                    <button type="submit" class="btn recording-dates-content__btn">Foglalás</button>
                </form>
            </div>
        </div>
    </div>
</main>