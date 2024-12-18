<?php
// dd($book);
?>

<div>
    <div class="bg-stone-900 p-2 rounded border-2 ">
        <div class=" flex">

            <div class="w-1/3">
                imagem
            </div>
            <div class="space-y-1">

                <a href="/Book-Store/livro?id=<?= $book->id ?>" class="font-semibold hover:underline">
                    <?= $book->titulo  ?>
                </a>
                <div class="text-xs italic">
                    <?= $book->autor ?>
                </div>
                <div class="italic text-xs">
                    <?php if ($book->nota_avaliacao != NULL): ?>
                        <?= str_repeat("\u{2B50}", $book->nota_avaliacao); ?>
                    <?php endif; ?>
                    <?php if ($book->count_avaliacoes != NULL): ?>
                        <?= $book->count_avaliacoes . "  Avaliações"; ?>
                    <?php else : ?>
                        0 Avaliações
                    <?php endif; ?>
                </div>

            </div>
        </div>
        <div class="text-sm mt-2">
            <?= $book->descricao ?>
        </div>

    </div>
</div>