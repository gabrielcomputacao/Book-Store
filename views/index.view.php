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

    <?php foreach ($livros as $livro) :  ?>

        <div class="bg-stone-900 p-2 rounded border-2 ">
            <div class=" flex">

                <div class="w-1/3">
                    imagem
                </div>
                <div class="space-y-1">

                    <a href="/Book-Store/livro?id=<?= $livro->id ?>" class="font-semibold hover:underline">
                        <?= $livro->titulo  ?>
                    </a>
                    <div class="text-xs italic">
                        <?= $livro->autor ?>
                    </div>
                    <div class="italic text-xs">
                        Avaliação
                    </div>

                </div>
            </div>
            <div class="text-sm mt-2">
                <?= $livro->descricao ?>
            </div>

        </div>

    <?php endforeach; ?>

</section>