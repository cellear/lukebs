<?php

/*
 * Copied from /core/modules/node/node.tpl.php.
 * more documentation there about available variables and stuff if you want it.
 */
?>

  <!-- Because why wouldn't we want every node to be in a JumboTron?  -->
<article id="node-<?php print $node->nid; ?>" class="jumbotron <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>" rel="bookmark"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <footer>
      <?php print $user_picture; ?>
      <p class="submitted"><?php print $submitted; ?></p>
    </footer>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the links now so that we can render them later.
      hide($content['links']);
      print render($content);
    ?>
  </div>

  <?php print render($content['links']); ?>

  <?php if ($page && !empty($comments)): ?>
    <section class="comments">
      <?php if ($comments['comments']): ?>
        <h2 class="title"><?php print t('Comments'); ?></h2>
        <?php print render($comments['comments']); ?>
      <?php endif; ?>

      <?php if ($comments['comment_form']): ?>
        <h2 class="title comment-form"><?php print t('Add new comment'); ?></h2>
        <?php print render($comments['comment_form']); ?>
      <?php endif; ?>
    </section>
  <?php endif; ?>

</article>
