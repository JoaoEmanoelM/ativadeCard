<?php

class Card {

    private $nomeJogo;
    private $desenvolvedorJogo;
    private $anoJogo;
    private $linkImg;
    private $generoJogo;

    public function __construct($nome, $desenvolvedor, $ano, $linkImg, $genero){
        $this->nomeJogo = $nome;
        $this->desenvolvedorJogo = $desenvolvedor;
        $this->anoJogo = $ano;
        $this->linkImg = $linkImg;
        $this->generoJogo = $genero;
    }

    public function __toString(){
        $card = "
        <div class='card' style='width: 18rem;'>
            <img src='$this->linkImg' class='card-img-top' alt='Imagem do Jogo'>
            <div class='card-body'>
                <h5 class='card-title'>$this->nomeJogo</h5>
                <p class='card-text'><strong>Desenvolvedor:</strong> $this->desenvolvedorJogo</p>
                <p class='card-text'><strong>Ano de Lançamento:</strong> $this->anoJogo</p>
                <p class='card-text'><strong>Gênero:</strong> $this->generoJogo</p>
            </div>
        </div>";
        return $card;
    }

}