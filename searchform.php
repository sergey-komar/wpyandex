<form class="search" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
    <div class="search__inner">
        <input class="search__input"  placeholder="Поиск" required="" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s">
        <button class="search__btn"></button>
    </div>
</form>
