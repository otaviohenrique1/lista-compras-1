<?php
    class Conexao {
        public static function criaConexao() {
            $conexao = mysqli('localhost', 'root', '');
            return $conexao;
        }
    }
