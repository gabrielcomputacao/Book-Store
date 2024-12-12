<div class="mt-6 grid grid-cols-2 gap-2">

    <div class="border border-stone-700 rounded p-4">

        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Login</h1>

        <form class="px-4 py-4 space-y-4" action="">

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

        <form class="px-4 py-4 space-y-4" method="POST" action="/Book-Store/register">

            <?php if (isset($message)): ?>
                <div class="border-green-800 bg-green-900 text-green-400 px-4 py-2 rounded-md border-2">
                    <?= $message  ?>
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
                <input name="confirmemail" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" type="email"
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