<?php
    class Produto {
        private $id;
        private $nome;
        private $quantidade;
        private $preco;
        private $dataCompra;
        
        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            return $this->id = $id;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            return $this->nome = $nome;
        }

        public function getQuantidade() {
            return $this->quantidade;
        }

        public function setQuantidade($quantidade) {
            return $this->quantidade = $quantidade;
        }

        public function getPreco() {
            return $this->preco;
        }

        public function setPreco($preco) {
            return $this->preco = $preco;
        }

        public function getDataCompra() {
            return $this->dataCompra;
        }

        public function setDataCompra($dataCompra) {
            return $this->dataCompra = $dataCompra;
        }

    }
