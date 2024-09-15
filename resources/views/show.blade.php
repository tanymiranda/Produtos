<div>
    <h1>Lista de Produtos</h1>
    <ul>
        @foreach ($produtos as $produto)
            <li>
                {{ $produto->nome }}
            </li>
        @endforeach
    </ul>
</div>
