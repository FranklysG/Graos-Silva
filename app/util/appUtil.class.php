<?php

    Class AppUtil{

        public static function Hash($digitos, $tipo = '')
        {
            $Caracteres = 'ABCDEFGHIJKLMPQRSTUVXWYZ0123456789';

            if ($tipo) {
                $Caracteres = $tipo;
            }

            $QuantidadeCaracteres = strlen($Caracteres);
            $QuantidadeCaracteres--;

            $Hash = null;
            for ($x = 1; $x <= $digitos; $x++) {
                $Posicao = rand(0, $QuantidadeCaracteres);
                $Hash .= substr($Caracteres, $Posicao, 1);
            }

            return $Hash;
        }
    }
?>