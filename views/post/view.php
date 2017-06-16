<?php if (!empty($post)): ?>
<div class="panel panel-default">
  <div class="panel-heading">
      <h3 class="panel-title"><?php echo $post->name_news?></a></h3>
    <right><?php echo $post->date_news?></right>
  </div>
  <div class="panel-body">
    <?php echo $post->fullnews?>
  </div>
</div>       
<?php endif;
debug($id);

