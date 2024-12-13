<div class="mt-6 grid grid-cols-2 gap-2">

    <div class="border border-stone-700 rounded p-4">

        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Login</h1>

        <form class="px-4 py-4 space-y-4" action="" method="post">

            <div class="flex flex-col">
                <label class="text-stone-400 ml-2 mb-1" for="">Email</label>
                <input name="email" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" type="email"
                    placeholder="Email">

            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 ml-2 mb-1" for="">Senha</label>
                <input name="password" required class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" type="password">

            </div>

            <button type="submit" class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-2 rounded-md border-2 hover:bg-stone-800">
                Logar
            </button>

        </form>
    </div>

    <div class="border border-stone-700 rounded p-4">

        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Login</h1>

        <form class="px-4 py-4 space-y-4" method="POST" action="/register">

            <!-- O php já confere se a variavel ou retorno da funcao e verdadeira e se for coloca dentro de uma variavel criadad dentro do if -->
            <?php if ($validations = flash()->get('validation')): ?>
                <div class="border-red-800 bg-red-900 text-red-400 px-4 py-2 rounded-md border-2">
                    <ul>
                        <h3 class="text-xl">Seu preencimento foi incontrado esses erros:</h3>
                        <br>
                        <?php foreach ($validations as $validation): ?>
                            <li>
                                <?= $validation ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>


                </div>

            <?php endif; ?>

            <div class="flex flex-col">
                <label class="text-stone-400 ml-2 mb-1" for="">Nome</label>
                <input name="name" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" type="text"
                    placeholder="Nome">

            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 ml-2 mb-1" for="">Email</label>
                <input name="email" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" type="email"
                    placeholder="Email">

            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 ml-2 mb-1" for="">Confirme seu Email</label>
                <input required name="confirmemail" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" type="email"
                    placeholder="Email">

            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 ml-2 mb-1" for="">Senha</label>
                <input name="password" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" type="password">

            </div>

            <button type="reset" class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-2 rounded-md border-2 hover:bg-stone-800">
                Cancelar
            </button>
            <button type="submit" class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-2 rounded-md border-2 hover:bg-stone-800">
                Registrar
            </button>

        </form>
    </div>

</div>