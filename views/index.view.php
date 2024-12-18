<?php

?>
<div>
    <form class="w-full flex space-x-2">

        <input name="pesquisar" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" type="text"
            placeholder="Pesquisar...">
        <button type="submit">
            Pesquisar
        </button>

    </form>
</div>

<section class="grid grid-cols-1 md:grid-cols-2  lg:grid-cols-3 gap-4 ">

    <?php foreach ($books as $book) {

        require 'partials/_livro.php';
    }  ?>



</section>