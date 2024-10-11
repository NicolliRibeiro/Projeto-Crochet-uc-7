
<html lang="pt-br">

   
    <main class="container">
        <div class="row">         

        
        <?php
            // Produtos Tapetes
            $tapetes = [
                ['src' => './IMG/tapete-azul.jpeg', 'nome' => 'Tapete azul', 'preco' => 'R$ 30,00'],
                ['src' => './IMG/tapete-vermelho.jpeg', 'nome' => 'Tapete vermelho quadrado', 'preco' => 'R$ 30,00'],
                ['src' => './IMG/tapete-laranja.jpeg', 'nome' => 'Tapete laranja', 'preco' => 'R$ 30,00'],
                ['src' => './IMG/tapete-branco.jpeg', 'nome' => 'Tapete branco', 'preco' => 'R$ 30,00'],
            ];
 
            // Produtos Puxa-sacos
            $puxaSacos = [
                ['src' => './IMG/puxa-saco-rosa.jpeg', 'nome' => 'Puxa-saco rosa', 'preco' => 'R$ 25,00'],
                ['src' => './IMG/puxa-saco-roxo.jpeg', 'nome' => 'Puxa-saco roxo', 'preco' => 'R$ 25,00'],
                ['src' => './IMG/puxa-saco-vermelho.jpeg', 'nome' => 'Puxa-saco vermelho', 'preco' => 'R$ 25,00'],
                ['src' => './IMG/kit-puxa-sacos.jpeg', 'nome' => 'Kit 4 puxa-sacos', 'preco' => 'R$ 45,00'],
            ];
 
            // Produtos Bolsas
            $bolsas = [
                ['src' => './IMG/Bolsa-flor.jpg', 'nome' => 'Bolsa girassol', 'preco' => 'R$ 45,00'],
                ['src' => './IMG/Bolsa-minnie.jpg', 'nome' => 'Bolsa minnie', 'preco' => 'R$ 45,00'],
                ['src' => './IMG/Bolsas6.jpg', 'nome' => 'Kit 5 bolsas', 'preco' => 'R$ 125,00'],
                ['src' => './IMG/ecobag.jfif', 'nome' => 'Bolsa de praia', 'preco' => 'R$ 45,00'],
            ];
 
            function exibirProdutos($produtos) {
                foreach ($produtos as $produto) {
                    echo '<div class="col col-lg-3 col-md-4 col-sm-6 col-12">';
                    echo '    <div class="card">';
                    echo '        <img class="card-img-top" src="' . $produto['src'] . '" alt="Imagem de capa do card">';
                    echo '        <div class="card-body">';
                    echo '            <h4 class="card-title">' . $produto['nome'] . '</h4>';
                    echo '            <h5 class="card-title preço">' . $produto['preco'] . '</h5>';
                    echo '            <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>';
                    echo '        </div>';
                    echo '    </div>';
                    echo '</div>';
                }
            }
 
            // Exibir produtos por categoria
            echo '<p class="display-6 crochet-cor">Tapetes</p>';
            exibirProdutos($tapetes);
 
            echo '<p class="display-6 crochet-cor">Puxa-sacos</p>';
            exibirProdutos($puxaSacos);
 
            echo '<p class="display-6 crochet-cor">Bolsas</p>';
            exibirProdutos($bolsas);
        ?>
    </div>
</main>
    
       
