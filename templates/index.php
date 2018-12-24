<main class="container">
    <section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное
            снаряжение.</p>
        <ul class="promo__list">
            <?php $index = 0;
            $num = count($categories);
            $cat_item = '';
            while ($index < $num) { ?>
                <?php $cat = $categories[$index];
                if ($cat == "Доски и лыжи") {
                    $cat_item = "boards";
                } else if ($cat == "Крепления") {
                    $cat_item = "attachment";
                } else if ($cat == "Ботинки") {
                    $cat_item = "boots";
                } else if ($cat == "Одежда") {
                    $cat_item = "clothing";
                } else if ($cat == "Инструменты") {
                    $cat_item = "tools";
                } else {
                    $cat_item = "other";
                } ?>
                <li class="promo__item promo__item--<?= $cat_item; ?>">
                    <a class="promo__link" href="all-lots.html"><?= $categories[$index]; ?></a>
                </li>
                <?php $index++;
            } ?>
        </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>
        <ul class="lots__list">
            <?php $index = 0;
            $num = count($lots);
            while ($index < $num) { ?>
                <?php $thisItem = $lots[$index]; ?>
                <li class="lots__item lot">
                    <div class="lot__image">
                        <img src='<?= $thisItem['img']; ?>' width="350" height="260" alt=<?= $thisItem['name']; ?>>
                    </div>
                    <div class="lot__info">
                        <span class="lot__category"><?= $thisItem['category']; ?></span>
                        <h3 class="lot__title"><a class="text-link" href="lot.php?lot_id=<?=$thisItem['id'];?>"><?= $thisItem['name']; ?></a></h3>
                        <div class="lot__state">
                            <div class="lot__rate">
                                <span class="lot__amount">Стартовая цена</span>
                                <span class="lot__cost"><?= formatPrice($thisItem['price']); ?><b
                                            class="rub">р</b></span>
                            </div>
                            <div class="lot__timer timer">
                                <?=timeToClose(); ?>
                            </div>
                        </div>
                    </div>
                </li>
                <?php $index++;
            } ?>

        </ul>
    </section>
</main>