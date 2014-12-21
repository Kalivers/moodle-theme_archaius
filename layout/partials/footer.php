<!-- START OF FOOTER -->
<?php 
$hasfooter = (empty($PAGE->layout_options['nofooter']));
if ($hasfooter) { ?>
    <footer id="page-footer">
        <?php $hasfooterleft = $PAGE->blocks->region_has_content('footer-left', $OUTPUT); ?>
        <?php $hasfootercenter = $PAGE->blocks->region_has_content('footer-center', $OUTPUT); ?>
        <?php $hassfooterright = $PAGE->blocks->region_has_content('footer-right', $OUTPUT); ?>

        <?php if($hasfooterleft){ ?>
            <div id="region-footer-left">
                <?php echo $OUTPUT->blocks_for_region('footer-left') ?>
            </div>
        <?php } ?>
        <?php if($hasfooterleft){ ?>
            <div id="region-footer-center">
                <?php echo $OUTPUT->blocks_for_region('footer-center') ?>
            </div>
        <?php } ?>
        <?php if($hasfooterleft){ ?>
            <div id="region-footer-right">
                <?php echo $OUTPUT->blocks_for_region('footer-right') ?>
            </div>
        <?php } ?>

        <?php if (!empty($PAGE->theme->settings->footnote)) { ?>
            <?php echo $PAGE->theme->settings->footnote; ?>
        <?php }?>
        <p class="helplink"><?php echo page_doc_link(get_string('moodledocslink')) ?></p>
        <?php
        echo $OUTPUT->login_info();
        ?>
        <p>
            <a href="http://moodle.org" title="Moodle">
                <img src="<?php echo $OUTPUT->pix_url('moodle-logo','theme')?>" alt="Moodle logo" />
            </a>
        </p>
        <?php echo $OUTPUT->standard_footer_html(); ?>
    </footer>
<?php } ?>
<?php echo $OUTPUT->standard_end_of_body_html() ?>
<?php
    $params = array(
        array(
            'accordionBlocks' => $PAGE->theme->settings->accordionBlocks,
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
    echo "<h1>" . get_class($PAGE->cm) . "</h1>";
    if( is_a($PAGE->cm, "cm_info") ){
        $params[0]['currentModuleName'] = $PAGE->cm->__get('modname');
        $params[0]['currentModuleId'] = $PAGE->cm->__get('id');
    }
    echo "<h1>" . print_r($params) . "</h1>";
    $PAGE->requires->yui_module("moodle-theme_archaius-archaius", 
        "M.theme_archaius_loader.init", 
        $params, 
        false
    );
?> 
<!-- END FOOTER-->
