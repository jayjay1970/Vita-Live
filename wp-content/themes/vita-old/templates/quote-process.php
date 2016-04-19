<?php if (get_field('show_quote_process_box') == 'Yes') { ?>
<div class="quote-process">
    <div class="wrapper">
        <div class="grid__item">
            <h3>Our quote process</h3>
        </div>
        <div class="grid__item tablet--one-third">
            <div class="process-step step1">
                <?php the_field('step_1_text', 293); ?>
            </div>
        </div>
        <div class="grid__item tablet--one-third">
            <div class="process-step step2">
                <?php the_field('step_2_text', 293); ?>
            </div>
        </div>
        <div class="grid__item tablet--one-third">
            <div class="process-step step3">
                <?php the_field('step_3_text', 293); ?>
            </div>
        </div>
        <div class="grid__item">
            <div class="quote-note">
                <?php the_field('note_editor', 293); ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>