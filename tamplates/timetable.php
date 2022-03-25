<section class="timetable-content">
    <div class="timetable-content-container container">
        <div class="row">
            <div class="col-12">
                <div class="row day-columns">
                    <div class="day-column">
                        <div class="day-header">Monday</div>
                        <div class="day-content">
                            <?php foreach ($getMonday as $Monday): ?>
                            <a href="/Monday<?php esc($Monday["id"])?>">
                                <div class="day-content__div" <?php if ($Monday ['teacher'] == 'Nona'): ?>
                                    style="background-color:#824670; color:white;"
                                    <?php endif; ?><?php if ($Monday ['teacher'] == 'Zsuzsi'): ?>
                                    style="background-color:#A2D2FF; color:black;"
                                    <?php endif; ?><?php if ($Monday ['teacher'] == 'Evi'): ?>
                                    style="background-color:#F4F0BB; color:black;"
                                    <?php endif; ?><?php if ($Monday ['teacher'] == 'Rita'): ?>
                                    style="background-color:#C1F7DC; color:black;"
                                    <?php endif; ?><?php if ($Monday ['teacher'] == 'Liz'): ?>
                                    style="background-color:#D8A47F; color:black;"
                                    <?php endif; ?><?php if ($Monday ['teacher'] == 'Paula'): ?>
                                    style="background-color:#B3B7EE; color:black;" <?php endif; ?>>
                                    <span class="title"><?php esc($Monday["teacher"])?></span>
                                    <footer class="event__footer">
                                        <span>Tanterem: <?php esc($Monday["room"])?></span> <br>
                                        <span>Időpont: <?php esc($Monday["lesson_date"])?></span>
                                    </footer>
                                </div>
                            </a>
                            <?php endforeach;?>
                        </div>
                        <div class="day-footer">Tanórák</div>
                    </div>
                    <div class="day-column">
                        <div class="day-header">Tuesday</div>
                        <div class="day-content">

                        </div>
                        <div class="day-footer">Tanórák</div>
                    </div>
                    <div class="day-column">
                        <div class="day-header">Wednesday</div>
                        <div class="day-content">


                        </div>
                        <div class="day-footer">Tanórák</div>
                    </div>
                    <div class="day-column">
                        <div class="day-header">Thursday</div>
                        <div class="day-content">

                        </div>
                        <div class="day-footer">Tanórák</div>
                    </div>
                    <div class="day-column">
                        <div class="day-header">Friday</div>
                        <div class="day-content">

                        </div>
                        <div class="day-footer">Tanórák</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>