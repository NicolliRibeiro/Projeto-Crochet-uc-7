<div class="rounded text-body-emphasis bg-body-secondary w-100 banner">
        <img src="./IMG/dsc3924-editado2.jpeg" class="banner-image" />
        <div class="banner-text"><i>Bem vindos à Rita's Crochet!</i></div>
    </div>
    <main class="container">
        <div class="row">
            <p class="display-6 crochet-cor">Sousplat</p>
            <p id="totalProdutos">Encontrados: </p>
            <?php
                
                $produtos = [
                    ['src' => './IMG/Sousplat-amarelo.jpg', 'nome' => 'Sousplat amarelo', 'preco' => 'R$ 40,00'],
                    ['src' => './IMG/Sousplat-laranja.jpg', 'nome' => 'Sousplat laranja', 'preco' => 'R$ 40,00'],
                    ['src' => './IMG/sousplat-azulroyal.jfif', 'nome' => 'Sousplat azul royal', 'preco' => 'R$ 40,00'],
                    ['src' => './IMG/sousplat-rosaforte.jfif', 'nome' => 'Sousplat rosa', 'preco' => 'R$ 40,00'],
                    ['src' => './IMG/sousplat5-roxoclaro.jfif', 'nome' => 'Sousplat roxo', 'preco' => 'R$ 40,00'],
                    ['src' => './IMG/sousplat-lightamarelo.jfif', 'nome' => 'Sousplat amarelo claro', 'preco' => 'R$ 40,00'],
                    ['src' => './IMG/sousplat-verdemusgo.jfif', 'nome' => 'Sousplat verde musgo', 'preco' => 'R$ 40,00'],
                    ['src' => './IMG/sousplat-rosaclaro.jfif', 'nome' => 'Sousplat rosa claro', 'preco' => 'R$ 40,00'],
                    ['src' => './IMG/sousplat-spikerosa.jfif', 'nome' => 'Sousplat salmão', 'preco' => 'R$ 40,00'],
                    ['src' => './IMG/sousplat-cinza.jfif', 'nome' => 'Sousplat cinza', 'preco' => 'R$ 40,00'],
                    ['src' => './IMG/sosusplat-roxo.jfif', 'nome' => 'Sousplat lilás', 'preco' => 'R$ 40,00'],
                    ['src' => './IMG/sousplat-olhogrego.jfif', 'nome' => 'Sousplat olho grego', 'preco' => 'R$ 40,00'],
                ];
 
                foreach ($produtos as $produto) {
                    echo '<div class="col col-lg-3 col-md-4 col-sm-6 col-12">';
                    echo '    <div class="card">';
                    echo '        <img class="card-img-top imagemProduto" src="' . $produto['src'] . '">';
                    echo '        <div class="card-body">';
                    echo '            <h4 class="card-title">' . $produto['nome'] . '</h4>';
                    echo '            <h5 class="card-title preço">' . $produto['preco'] . '</h5>';
                    echo '            <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>';
                    echo '        </div>';
                    echo '    </div>';
                    echo '</div>';
                }
            ?>
        </div>
    </main>