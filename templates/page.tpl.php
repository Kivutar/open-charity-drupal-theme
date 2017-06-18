<div id="top-menu">
  <div class="container clearfix">

    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>

    <?php if ($main_menu): ?>
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'class' => 'menu',
          ),
        )); ?>
    <?php endif; ?>

  </div>
</div>

<div id="hero">
  <div class="container">
    <?php if ($site_slogan): ?>
      <h1>
        <?php print $site_slogan; ?>
      </h1>
    <?php endif; ?>
    <?php print render($page['header']); ?>
  </div>
</div>

<?php if ($page['highlighted']): ?>
  <div id="highlighted">
    <div class="container clearfix">
      <?php print render($page['highlighted']); ?>
    </div>
  </div>
<?php endif; ?>

<div class="involved">
  <h2>Get Involved</h2>
  <div class="container clearfix">
    <div class="card">
      <div class="content">
        <img alt="" src="<?php print $base_path . path_to_theme() ?>/meetup.jpg">
        <h3>We do meetings</h3>
        <p>We organize our meetings through the OpenCharity MeetUp&nbsp;group</p>
        <a href="#" class="button">Meeting Group</a>
      </div>
    </div>
    <div class="card">
      <div class="content">
        <img alt="" src="<?php print $base_path . path_to_theme() ?>/slack.jpg">
        <h3>We communicate</h3>
        <p>OpenCharity have a slack group for daily&nbsp;communication</p>
        <a href="#" class="button">Slack Group</a>
      </div>
    </div>
    <div class="card">
      <div class="content">
        <img alt="" src="<?php print $base_path . path_to_theme() ?>/google.jpg">
        <h3>We collaborate</h3>
        <p>We have a Wiki group set up to share tools and&nbsp;documents</p>
        <a href="#" class="button">Wiki Group</a>
      </div>
    </div>
  </div>
</div>

<div class="main">
  <div class="container">



    <?php if ($messages): ?>
      <div id="messages">
        <?php print $messages; ?>
      </div>
    <?php endif; ?>
    
    <?php if ($breadcrumb): ?>
      <div id="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php endif; ?>
    
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1 class="title" id="page-title">
        <?php print $title; ?>
      </h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if ($tabs): ?>
      <div class="tabs">
        <?php print render($tabs); ?>
      </div>
    <?php endif; ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?>
      <ul class="action-links">
        <?php print render($action_links); ?>
      </ul>
    <?php endif; ?>
    <?php print render($page['content']); ?>
    <?php print $feed_icons; ?>





    <!--<div class="mission">
      <h2>Our Mission</h2>
      <p>Charities and Partners collaborating and sharing open solutions and ideas to create value in the digital space.</p>
      <p><strong>If you are a charity or a supplier, we are ready to welcome you.</strong></p>
      <div class="cards clearfix">
        <div class="card">
          <div class="content">
            <div class="circle"><img alt="" src="<?php print $base_path . path_to_theme() ?>/lightbulb.png"></div>
            <h3>We help charities</h3>
            <p>share knowledge and working practice to make the best technology choices.</p>
          </div>
        </div>
        <div class="card">
          <div class="content">
            <div class="circle"><img alt="" src="<?php print $base_path . path_to_theme() ?>/together.png"></div>
            <h3>We bring together</h3>
            <p>charities and suppliers to the charity sector to share best practices.</p>
          </div>
        </div>
        <div class="card">
          <div class="content">
            <div class="circle"><img alt="" src="<?php print $base_path . path_to_theme() ?>/thumb.png"></div>
            <h3>We encourage</h3>
            <p>collaboration and innovation for the good of the charity sector.</p>
          </div>
        </div>
      </div>
    </div>

    <hr>

    <div class="members">
      <h2>Our Members</h2>

      <div class="clearfix">
        <div class="card"><img alt="" src="<?php print $base_path . path_to_theme() ?>/cancer.png"></div>
        <div class="card"><img alt="" src="<?php print $base_path . path_to_theme() ?>/compucorp.png"></div>
        <div class="card"><img alt="" src="<?php print $base_path . path_to_theme() ?>/kop.png"></div>
        <div class="card"><img alt="" src="<?php print $base_path . path_to_theme() ?>/zing.png"></div>
        <div class="card"><img alt="" src="<?php print $base_path . path_to_theme() ?>/comic.png"></div>
      </div>

      <ul class="steps">
        <li class="active"></li>
        <li></li>
        <li></li>
      </ul>

    </div>-->
  </div>
</div>

<?php if ($page['prefooter']): ?> 
  <div class="prefooter">
    <div>
      <?php print render($page['prefooter']); ?>
    </div>
  </div>
<?php endif; ?>

<footer>
  <div class="container">
    <p class="social">
      <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
      <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
    </p>
    <hr>
    <?php if ($page['footer']): ?> 
      <?php print render($page['footer']); ?>
    <?php endif; ?>
  </div>
</footer>
