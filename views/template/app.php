<!DOCTYPE html>
<html lang="pt_BR">

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


        <?php require "views/{$view}.view.php";  ?>


    </main>

</body>

</html>