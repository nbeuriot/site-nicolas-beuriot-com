<?php

            $filename = 'json/cv.json';
            $data = file_get_contents($filename);
            $occupations = json_decode($data);
        ?>

        <?php foreach ($occupations as $occupation) { ?>
        <div class="occupation">
            <p class="date">
                <i class="fa-solid fa-calendar-day"></i> &nbsp;&nbsp;
                <? echo "{$occupation->start_month}/{$occupation->start_year} - {$occupation->end_month}/{$occupation->end_year}"; ?> 
            </p>
            <p class="client"> 
                <i class="fa-regular fa-building"></i>&nbsp;&nbsp;
                <?= $occupation->client; ?> &nbsp;&nbsp;&nbsp;
                <i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;
                <?= $occupation->place; ?>
            </p>
            <p class="title"> <?= $occupation->title; ?> </p>
            <div class="desc">
                <?php foreach ( $occupation->desc as $desc ) { ?>
                    <?= $desc->desctitle; ?>
                    <ul>
                    <?php foreach ($desc->desclist as $list) { ?>
                        <li> <?= $list ?>  </li>
                    <? } ?>
                    </ul>
                <? } ?>
            </div>
        </div>
        <?php } ?>