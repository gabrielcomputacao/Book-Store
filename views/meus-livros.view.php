<h1>Meus Livros</h1>
<div class="grid grid-cols-4 gap-4">
    <div class="col-span-3 gap-4 grid">

    </div>

    <div>
        <?php if (isset($_SESSION['auth'])): ?>
            <div class="border border-stone-700 rounded p-4">

                <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Cadastre um novo livro</h1>

                <form class="px-4 py-4 space-y-4" action="/Book-Store/livro-criar" method="post">


                    <div class="flex flex-col">

                        <label class="text-stone-400 ml-2 mb-1" for="avaliacao">Titulo</label>
                        <input name="titulo" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" type="text">
                        </input>

                    </div>
                    <div class="flex flex-col">

                        <label class="text-stone-400 ml-2 mb-1" for="avaliacao">Autor</label>
                        <input name="autor" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" type="text">
                        </input>

                    </div>
                    <div class="flex flex-col">

                        <label class="text-stone-400 ml-2 mb-1" for="avaliacao">Descrição</label>
                        <textarea name="descricao" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" type="text">
                        </textarea>

                    </div>

                    <div class="flex flex-col">
                        <label class="text-stone-400 ml-2 mb-1" for="nota">Ano Lançamento</label>
                        <select name="ano_lancamento" required class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1">

                            <?php foreach (range('1800', date('Y')) as $ano): ?>

                                <option value="<?= $ano ?>"><?= $ano ?></option>

                            <?php endforeach; ?>

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