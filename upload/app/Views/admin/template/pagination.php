<div class="card-footer clearfix"><?php $pager->setSurroundCount(2) ?>
    <ul class="pagination pagination-sm m-0 float-right">
        <?php if ($pager->hasPrevious()) : ?>
        <li class="page-item"><a class="page-link" href="<?= $pager->getFirst() ?>"><?= lang('Pager.first') ?></a></li>
        <li class="page-item"><a class="page-link" href="<?= $pager->getPrevious() ?>"><?= lang('Pager.previous') ?></a>
        </li>
        <?php endif ?>

        <?php foreach ($pager->links() as $link) : ?>
        <li <?= $link['active'] ? 'class="page-item active"' : '' ?>>
            <a class="page-link" href="<?= $link['uri'] ?>">
                <?= $link['title'] ?>
            </a>
        </li>
        <?php endforeach ?>

        <?php if ($pager->hasNext()) : ?>
        <li class="page-item"><a class="page-link" href="<?= $pager->getNext() ?>"><?= lang('Pager.next') ?></a></li>
        <li class="page-item"><a class="page-link" href="<?= $pager->getLast() ?>"><?= lang('Pager.last') ?></a></li>
        <?php endif ?>
    </ul>
</div>