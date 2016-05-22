<?php
/**
* Template Name: Landing page
*/
?>
<div id="nd-vibackgroudeo" >
    <div id="the-video" style="width: 100%; height:600px;" class=""
    data-vide-bg="mp4:<?php echo get_stylesheet_directory_uri(); ?>/assets/videos/video-snk-2.mp4, poster: <?php echo get_stylesheet_directory_uri(); ?>/assets/images/cover.png"
    data-vide-options="posterType: png, loop: true, muted: true, resizing: true, position: 50% 50%">
    <br>
    <br>
    <div class="ui centered header" >
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-isma-testw.png" class="ui large image" />
    </div>
    <h1 class="ui centered header text-shadow bright" >Boostez vos événements</h1>
    <div id="home-bottom-icon" class="ui stackable center aligned page grid">
        <i class="massive angle down icon bright"></i>
    </div>
</div>
</div>
<!--<div id="full-content" style="display:block;position:relative;">-->
<?php get_template_part('templates/menu'); ?>
<div id="context">
    <!-- Long flowing text content !-->
    <?php while (have_posts()) : the_post(); ?>
        <?php //get_template_part('templates/content', 'page'); ?>
    <?php endwhile; ?>

    <div class="ui basic gray attached inverted segment">
        <h2 class="ui centered header bright">Compose your event</h2>
        <div class="ui stackable three column grid center aligned padding-big">
            <div class="column">

                <img class="ui small circular image centered alignnone wp-image-15 size-thumbnail" src="http://www.ismaelk.com/wp-content/uploads/2016/04/concert-768722_640-150x150-1.jpg" alt="concert" width="150" height="150" />
                <h3><a  class="bright" href="http://www.ismaelk.com/en/services-organisation/">Party &amp; Concert</a></h3>
                A saxophonist, a DJ or downright the whole group so your event will stay as a memorable party
            </div>
            <div class="column">

                <img class="ui small circular image centered alignnone wp-image-14 size-thumbnail" src="http://www.ismaelk.com/wp-content/uploads/2016/04/business-suit-690048_640-150x150-1.jpg" alt="business" width="150" height="150" />
                <h3><a class="bright" href="http://www.ismaelk.com/en/services-organisation/">Corporate Evening</a></h3>
                Add a festive touch to your corporate output. A range of talented musicians will make dance your whole assembly
            </div>
            <div class="column">

                <img class="ui small circular image centered alignnone wp-image-13 size-thumbnail" src="http://www.ismaelk.com/wp-content/uploads/2016/04/wedding-150x150-1.jpg" alt="wedding" width="150" height="150" />
                <h3><a  class="bright" href="http://www.ismaelk.com/en/services-organisation/">Weddings</a></h3>
                Make your wedding a special moment. Relax and please your guests between the meals and make them dance until the end of the night
            </div>
        </div>
        &nbsp;

    </div>
    <div id="saxo-training" class="ui basic attached segment" data-stellar-background-ratio="0.5">
        <h2 class="ui centered header bright text-shadow">Lesson saxophone</h2>
        <div class="ui four column centered grid stackable">
            <div class="column"></div>
            <div class="column">
                <div class="ui centered card bg-1">
                    <div class="content">
                        <div class="header">School lessons</div>
                        <div class="meta">At the julienne of Plan-les-Ouates</div>
                    </div>
                    <div class="content"><span class="meta right floated">9am to 2pm</span> Mon,Wed,Tue</div>
                    <div class="content">
                        <div class="meta">60 CHF / Hour
                            240 CHF / Month</div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="ui centered card bg-1">
                        <div class="content">
                            <div class="header">Home Lessons</div>
                            <div class="meta">in Geneva and around</div>
                        </div>
                        <div class="content"><span class="meta right floated">Afternoon</span>Monday to Wednesday</div>
                        <div class="content">
                            <div class="meta">70 CHF / Hour
                                280 CHF / Month</div>
                            </div>
                        </div>
                    </div>
                    <div class="column"></div>
                </div>
                &nbsp;

            </div>
            <div class="ui basic attached borderless bg-1">
                <h3 class="ui header centered bg-1">Courses details <a href="http://www.ismaelk.com/en/saxophone-lessons-in-geneva/">Here</a></h3>
            </div>
