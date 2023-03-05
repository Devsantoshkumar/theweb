<nav class="container-fluid border-bottom bg-light shadow-sm">
    <div class="row">
        <div class="col">
            <?php if($rows): ?>
            <ul class="list-group list-group-horizontal tw-subnav py-2">
                <?php foreach($rows as $row): ?>
                <li class="list-group-item px-2 border-0 bg-transparent"><a href="<?=ROOT ?>/source/<?=$row->projectcategorys_id; ?>" class="text-nowrap text-decoration-none text-uppercase"><?=$row->category; ?></a></li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </div>
    </div>
</nav>