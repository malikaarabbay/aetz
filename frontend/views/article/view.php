<?php
use himiklab\thumbnail\EasyThumbnailImage;
use yii\helpers\Url;
$this->title = $model->title.' || АЭТЗ - Астанинский электротехнический завод';

$this->params['breadcrumbs'][] = $model->title;
$this->registerMetaTag(['name'=> 'title', 'content' =>  $model->meta_title]);
$this->registerMetaTag(['name'=> 'keywords', 'content' =>  $model->meta_keywords]);
$this->registerMetaTag(['name'=> 'description', 'content' => $model->meta_description]);

?>

<main role="main">
    <div class="bread_part">
        <?= \yii\widgets\Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    </div>
    <div class="cr">
        <article class="content_part">
            <?php if($model->slug !== 'our-projects' && $model->slug !== 'contacts') {?>
            <figure>
                <?=
                EasyThumbnailImage::thumbnailImg(
                    $model->imagePath,
                    555,
                    370,
                    EasyThumbnailImage::THUMBNAIL_OUTBOUND,
                    [
                        'alt' => $model->title,
                        'class' => ''
                    ]
                );
                ?>
            </figure>
            <?php } ?>
            <h2><?= $model->title?></h2>
            <?= $model->description?>
        </article>
    </div>
</main>