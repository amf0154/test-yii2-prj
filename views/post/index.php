<?php if (!empty($posts)): ?>
   <?php foreach ($posts as $post): ?>
<div class="panel panel-default">
  <div class="panel-heading">
      <h3 class="panel-title"><a href = "<?= yii\helpers\Url::to(['post/view','id' => $post->id])?>"><?php echo $post->name_news?></a></h3>
    <right><?php echo $post->date_news?></right>
  </div>
  <div class="panel-body">
    <?php echo $post->shortnews?>
  </div>
</div>       
  <?php endforeach; ?>
<?= \yii\widgets\LinkPager::widget(['pagination' => $pages]) ?>
<?php endif;