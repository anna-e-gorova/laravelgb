<?php foreach($categories as $category): ?>
    <div style="display: inline">
        <a href="<?=route('news.category', ['id' => $category['id']])?>"><?=$category['name']?></a> |
    </div>
<?php endforeach;

    foreach($newsList as $news): ?>
    <div>
        <a href="<?=route('news.show', ['id' => $news['id']])?>"><?=$news['title']?></a>
        <br />
        <img src="<?=$news['image']?>" style="width:200px;"><br>

        <br>
        <p><strong>Автор:</strong> <?=$news['author']?></p>
        <p><?=$news['description']?></p>
        <p><?=$news['categoryId']?></p>
    </div>
    <br><hr>
<?php endforeach; ?>
