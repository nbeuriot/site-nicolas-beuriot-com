<div class="cv">
    <div class="left">
        <?php
                    session_start();
                    $filename = 'json/cv.json';
                    $data = file_get_contents($filename);
                    $occupations = json_decode($data);

                    if (isset($_GET['order'])) {
                        echo $_GET['order'];
                    };
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
                    <?php } ?>
                    </ul>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
    </div>
            <div class="right">
                <form name="order">
                    <fieldset>
                        <legend>Order</legend>
                        <input type="radio" name="order" id="desc" checked><label for="desc">Descending</label> <br>
                        <input type="radio" name="order" id="asc"><label for="asc">Ascending</label>
                    </fieldset>
                </form>

                <form>
                    <fieldset>
                        <legend>Contract type</legend>
                        <input type="checkbox" name="ctype" id="freelance" checked><label for="freelance">Freelancing</label><br>
                        <input type="checkbox" name="ctype" id="employee"><label for="employee">Employee</label>
                    </fieldset>
                </form>

                <form>
                    <fieldset>
                        <legend>Occupation Type</legend>
                        <input type="checkbox" name="otype" id="mission" checked><label for="mission">Mission</label><br>
                        <input type="checkbox" name="otype" id="traininggiven"><label for="traininggiven">Training given</label><br>
                        <input type="checkbox" name="otype" id="trainingreceive"><label for="trainingreceive">Training receive</label><br>
                    </fieldset>
                </form>
                <div class="result"></div>

            </div>
</div>