<form role="search" method="GET" action="<?php site_url();?>">
    <input class="search-input" type="search" name="s" placeholder="Digite algum termo" value="<?php the_search_query();?>" />
    <input class="search-submit" type="submit" value="Pesquisar" />
</form>