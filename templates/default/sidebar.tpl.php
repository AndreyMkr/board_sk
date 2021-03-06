<div id="sidebar" class="col-md-3">

    <div id="places" class="block">
        <h3>Страны</h3>
        <form action="?action=places" method="post">

            <div id="countries">
                <label for="country" class="control-label">Страна</label>
                <select name="country" id="country">
                    <option value="" selected disabled>Выберите страну</option>
                    <?foreach($countries as $country):?>
                        <option value="<?=$country['country_id']?>"><?=$country['name_country']?></option>
                    <?endforeach;?>
                </select>
            </div>

            <div id="regions">
                <label for="regions" class="control-label">Регион</label>
                <select name="regions" id="regions" disabled>
                    <option value="" selected disabled>Выберите регион</option>
                </select>
            </div>

            <div id="cities">
                <label for="cities" class="control-label">Город</label>
                <select name="cities" id="cities" disabled>
                    <option value="" selected disabled>Выберите город</option>
                </select>
            </div>

<!--            <input class="btn btn-success" type="submit" value="Подобрать">-->
        </form>
    </div>

    <div class="block">
        <h3>Категории</h3>
        <ul class="categories">
            <? if(!empty($categories) and is_array($categories)): ?>
                <? foreach($categories as $category_id => $category): ?>
                    <? if(isset($category['parent']) and is_array($category['parent'])): ?>
                        <strong>
                            <li><?= $category[0] ?></li>
                        </strong>
                        <ul>
                            <? foreach($category['parent'] as $p_category_id => $p_category): ?>
                                <li>- <a href="?cat=<?= $p_category_id ?>"><?= $p_category ?></a></li>
                            <? endforeach; ?>
                        </ul>
                    <? endif; ?>
                <? endforeach; ?>
            <? endif; ?>
        </ul>
    </div>

    <div class="block">
        <h3>Поиск</h3>
        <form method="GET" action="?action=search">
            <input name="action" value="search" type="hidden">
            Поиск<br>
            <input name="search" type="text">
            <br>
            <br>
            Категория:<br>
            <select name="id_categories">
                <option selected="selected" value="">Выберите категорию</option>
                <optgroup label="Транспорт">
                    <option value="5">--Автомобили</option>
                    <option value="6">--Мото</option>
                </optgroup>
                <optgroup label="Интернет">
                    <option value="7">--Компьютеры</option>
                    <option value="8">--Игры</option>
                </optgroup>
                <optgroup label="Дом">
                    <option value="9">--Мебель</option>
                    <option value="10">--Сантехника</option>
                </optgroup>
                <optgroup label="Сад, огород">
                    <option value="11">--Интсрумент</option>
                    <option value="12">--Строй материалы</option>
                </optgroup>
            </select>
            <br>
            <br>
            Тип объявления:<br>
            <input name="id_razd" value="1" type="radio">Предложение
            <input name="id_razd" value="2" type="radio">Спрос
            <br><br>
            Диапазон цен:<br>
            От <input name="p_min" class="p_search" type="text"> До <input name="p_max" class="p_search"
                                                                           type="text">
            <br><br>
            <input value="Поиск" type="submit">
        </form>
    </div>
</div>