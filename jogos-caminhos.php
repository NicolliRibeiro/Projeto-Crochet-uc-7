
<html lang="pt-br">
<head> 
<script src="script.js" defer></script>
</head>
 
<main class="container">
    <div class="row">
    
        <?php
    
            
            // Produtos Jogos de Banheiro
            $jogosBanheiro = [
                ['src' => './IMG/Jogo-de-banheiro-amarelo.jpg', 'nome' => 'Jogo de banheiro amarelo', 'preco' => 'R$ 120,00'],
                ['src' => './IMG/Jogo-de-banheiro-azul.jpg', 'nome' => 'Jogo de banheiro azul', 'preco' => 'R$ 120,00'],
                ['src' => './IMG/Jogo-de-banheiro-marrom.jpg', 'nome' => 'Jogo de banheiro marrom', 'preco' => 'R$ 120,00'],
                ['src' => './IMG/Banheiro-amarelo-vermelho.jpg', 'nome' => 'Jogo de banheiro amarelo e vermelho', 'preco' => 'R$ 120,00'],
            ];
 
            // Produtos Jogos de Cozinha
            $jogosCozinha = [
                ['src' => './IMG/Jogo-de-cozinha-azul.jpg', 'nome' => 'Jogo de cozinha azul', 'preco' => 'R$ 120,00'],
                ['src' => './IMG/Jogo-de-cozinha-branco.jpeg', 'nome' => 'Jogo de cozinha branco', 'preco' => 'R$ 120,00'],
                ['src' => './IMG/Jogo-de-cozinha-preto.jpeg', 'nome' => 'Jogo de cozinha preto', 'preco' => 'R$ 120,00'],
                ['src' => './IMG/Jogo-de-cozinha-vermelho.jpeg', 'nome' => 'Jogo de cozinha vermelho', 'preco' => 'R$ 120,00'],
            ];
 
            // Produtos Caminhos de Mesa
            $caminhosMesa = [
                ['src' => './IMG/Mesa-vermelho.jpg', 'nome' => 'Caminho de mesa vermelho', 'preco' => 'R$ 45,00'],
                ['src' => './IMG/Caminho-de-mesa.jpg', 'nome' => 'Caminho de mesa amarelo', 'preco' => 'R$ 45,00'],
                ['src' => './IMG/caminho de mesa branco.jpeg', 'nome' => 'Caminho de mesa branco', 'preco' => 'R$ 45,00'],
                ['src' => './IMG/caminho-de-mesa-vermelho.jpeg', 'nome' => 'Caminho de mesa vermelho', 'preco' => 'R$ 45,00'],
            ];
 
            // Função para exibir os produtos
            function exibirProdutos($produtos) {
                foreach ($produtos as $produto) {
                    echo '<div class="col col-lg-3 col-md-4 col-sm-6 col-12">';
                    echo ' <div class="card">';
                    echo ' <img class="card-img-top" src="' . $produto['src'] . '" alt="Imagem de capa do card">';
                    echo ' <div class="card-body">';
                    echo ' <h4 class="card-title">' . $produto['nome'] . '</h4>';
                    echo ' <h5 class="card-title preço">' . $produto['preco'] . '</h5>';
                    echo ' <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>';
                    echo ' </div>';
                    echo ' </div>';
                    echo '</div>';
                }
            }
 
            // Exibindo produtos por categoria
            echo '<p class="display-6 crochet-cor">Jogos de Banheiro</p>';
            exibirProdutos($jogosBanheiro);
 
            echo '<p class="display-6 crochet-cor">Jogos de Cozinha</p>';
            exibirProdutos($jogosCozinha);
 
            echo '<p class="display-6 crochet-cor">Caminhos de Mesa</p>';
            exibirProdutos($caminhosMesa);
        
        ?>
    </div>
</main>
    
        
