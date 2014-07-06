<!-- START OF FOOTER -->
<?php 
$hasfooter = (empty($PAGE->layout_options['nofooter']));
if ($hasfooter) { ?>
    <footer id="page-footer" class="clearfix">
        <?php if (!empty($PAGE->theme->settings->footnote)) { ?>
            <?php echo $PAGE->theme->settings->footnote; ?>
        <?php }?>
        <p class="helplink"><?php echo page_doc_link(get_string('moodledocslink')) ?></p>
        <?php
        echo $OUTPUT->login_info();
        ?>
        <p>Supported by 
        <a href="http://moodle.org" title="Moodle">
                <img src="<?php echo $OUTPUT->pix_url('moodle-logo','theme')?>" alt="Moodle logo" />
            </a>
        </p>
        <?php
            echo $OUTPUT->standard_footer_html();
        ?>
        <div class="clearfix"></div>
    </footer>
<?php } ?>
<?php echo $OUTPUT->standard_end_of_body_html() ?>
<?php
    $params = array(
        array(
            'activateTopicsCourseMenu' => $PAGE->theme->settings->collasibleTopics,
            'activateSlideshow' => $PAGE->theme->settings->activateSlideshow ,
            'activateHideAndShowBlocks' => $PAGE->theme->settings->hideShowBlocks,
            'slideshowTimeout' => $PAGE->theme->settings->slideshowTimeout,
            'search' => get_string("search"),
            'activatePausePlaySlideshow' => $PAGE->theme->settings->activatePausePlaySlideshow,
            'confirmationDeleteSlide' => get_string("confirmationDeleteSlide","theme_archaius"),
            'noSlides' => get_string("noSlides","theme_archaius")
        )
    ); 
    $PAGE->requires->yui_module("moodle-theme_archaius-archaius", 
        "M.theme_archaius_loader.init", 
        $params, 
        false
    );
?> 
<!-- END FOOTER-->
