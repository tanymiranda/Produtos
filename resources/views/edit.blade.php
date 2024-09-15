<div style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f0f0f0;">
    <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); max-width: 400px; width: 100%;">
        <h1>Formulário para Edição de Produtos</h1>
        <form action="/produtos" method="post" style="display: flex; flex-direction: column;">
            <label htmlFor="nome" style="margin-bottom: 8px; font-weight: bold;">Nome do Produto</label>
            <input type="text" id="nome" name="nome" placeholder="Nome do produto" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 4px;" />

            <label htmlFor="preco" style="margin-bottom: 8px; font-weight: bold;">Preço</label>
            <input type="number" id="preco" name="preco" placeholder="Preço do produto" step="0.01" min="0" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 4px;" />

            <label htmlFor="descricao" style="margin-bottom: 8px; font-weight: bold;">Descrição</label>
            <textarea id="descricao" name="descricao" placeholder="Descrição opcional do produto" style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 4px;"></textarea>

            <button type="submit" style="background-color: #007bff; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">Salvar edição</button>
            @csrf
        </form>
    </div>
</div>
