<?php foreach($categories as $category): ?>
    <div style="display: inline">
        <a href="<?=route('news.category', ['id' => $category['id']])?>"><?=$category['name']?></a> |
    </div>
<?php endforeach; ?>
