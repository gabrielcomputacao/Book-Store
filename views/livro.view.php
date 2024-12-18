<?php

$sumNotas = array_reduce($avaliacao, function ($carry, $element) {

    return ($carry ?? 0) + $element->nota;
}) ?? 0;

// media aritimetica, soma todos e dividi pelo total de elementos possiveis
$sumNotas = round($sumNotas / 5);

$finalNotes = str_repeat("\u{2B50}", $sumNotas);



?>

<?php require_once "partials/_livro.php" ?>

<div>
    <h2 class="text-xl mb-4">Avaliações</h2>
    <div class="grid grid-cols-4 gap-4">
        <div class="col-span-3 gap-4 grid">

            <?php foreach ($avaliacao as $assessment):  ?>
                <div class="border border-stone-700 rounded p-2">

                    <?= $assessment->avaliacao ?>

                    <?php
                    $nota = str_repeat("\u{2B50}", $assessment->nota);
                    ?>

                    <?= $nota ?>

                </div>
            <?php endforeach; ?>
        </div>
        <div>

            <?php if (isset($_SESSION['auth'])): ?>
                <div class="border border-stone-700 rounded p-4">

                    <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Avaliar</h1>

                    <form class="px-4 py-4 space-y-4" action="/Book-Store/avaliacao-criar" method="post">


                        <div class="flex flex-col">
                            <input type="hidden" name="livro_id" value="<?= $book->id ?>" />
                            <label class="text-stone-400 ml-2 mb-1" for="avaliacao">Avaliação</label>
                            <textarea name="avaliacao" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" type="text">
                        </textarea>

                        </div>
                        <div class="flex flex-col">
                            <label class="text-stone-400 ml-2 mb-1" for="nota">Nota</label>
                            <select name="nota" required class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>

                        <button type="submit" class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-2 rounded-md border-2 hover:bg-stone-800">
                            Salvar
                        </button>

                    </form>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>