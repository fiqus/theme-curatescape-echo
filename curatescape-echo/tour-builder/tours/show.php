<?php
$maptype='tour';
$tourTitle = strip_formatting(tour('title'));
$label = rl_tour_label('singular');
if ($tourTitle != '' && $tourTitle != '[Untitled]') {
} else {
    $tourTitle = '';
}
echo head(array( 'maptype'=>$maptype,'title' => ''.$label.' | '.$tourTitle, 'content_class' => 'horizontal-nav', 'bodyid'=>'tours',
    'bodyclass' => 'show tour', 'tour'=>$tour ));
?>
<div id="content" class="wide" role="main">

    <article id="tour-content" class="tour show">

        <header id="tour-header">
            <div class="max-content-width inner-padding tour-columns">
                <div class="column">
                    <h1 class="tour-title title"><?php echo $tourTitle; ?></h1>
                    <?php echo '<div class="byline">'.__('%s Locations', rl_tour_total_items($tour)).' | '.((tour('Credits')) ? __('Created by %s', tour('Credits')) : __('Created by %s', option('site_title'))).'</div>';?>
                    <section id="text" aria-label="<?php echo __('%s Description', rl_tour_label('singular'));?>">
                        <div class="max-content-width">
                            <?php echo htmlspecialchars_decode(nls2p(tour('Description'))); ?>
                        </div>
                    </section>
                </div>
                <div class="column">
                    <h1>Column</h1>
                </div>
            </div>
        </header>

        <!-- <div class="max-content-width">
            <div class="separator thin wide"></div>
            <aside id="social-actions" class="inner-padding-flush">
                <?php echo rl_story_actions('transparent-on-light', $tourTitle, tour('id'));?>
            </aside>
        </div> -->
        <!-- <div class="separator wide thin"></div> -->

        

        <div>
            <!-- <div class="separator flush-top center"></div> -->
            <section id="tour-items" class="browse inner-padding" aria-label="<?php echo __('%s Locations', rl_tour_label('singular'));?>">
                <?php echo tour_items($tour) ?>
            </section>

          

            <?php if ($ps = metadata('tour', 'Postscript Text')):?>
            <section id="tour-postscript" class="max-content-width inner-padding caption" aria-label="<?php echo __('%s Postscript', rl_tour_label('singular'));?>">
                <p><?php echo htmlspecialchars_decode(metadata('tour', 'Postscript Text')); ?></p>
            </section>
            <?php endif;?>

        </div>
<!-- 
        <?php if (get_theme_option('comments_id')):?>
        <section id="comments-section">
            <?php echo rl_display_comments();?>
        </section>
        <?php endif;?> -->

        <?php echo multimap_markup(true, $tourTitle, __('Show %s Map', rl_tour_label()));?>

    </article>
</div> <!-- end content -->

<?php echo foot(); ?>