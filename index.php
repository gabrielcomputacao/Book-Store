<?php

require 'dados.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Wise</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-stone-950 text-stone-200">

    <header class=" bg-stone-900 shadow-lg">
        <nav class="flex justify-between py-4 mx-auto max-w-screen-lg">

            <div class="font-bold text-xl tracking-wide">
                Book Wise
            </div>

            <ul class="flex space-x-4">
                <li>
                    <a class="text-lime-600" href="/">Explorar</a>
                </li>
                <li>
                    <a class="hover:underline" href="/meus-livros.php">Meus Livros</a>
                </li>

            </ul>

            <ul>
                <li>
                    <a class="hover:underline" href="/login.php">Fazer Login</a>
                </li>
            </ul>



        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg space-y-6">

        <h1 class="font-bold text-lg mt-6">Explorar</h1>

        <div>
            <form action="" class="w-full flex space-x-2">

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

                            <a href="./livro.php?id=<?= $livro['id'] ?>" class="font-semibold hover:underline">
                                <?= $livro['titulo']  ?>
                            </a>
                            <div class="text-xs italic">
                                <?= $livro['autor'] ?>
                            </div>
                            <div class="italic text-xs">
                                Avaliação
                            </div>

                        </div>
                    </div>
                    <div class="text-sm mt-2">
                        <?= $livro['descricao'] ?>
                    </div>

                </div>

            <?php endforeach; ?>

        </section>

    </main>

</body>

</html>