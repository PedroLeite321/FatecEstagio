<?php 
function rotas() {
    function erro() {
        require("../controles/erro.php");
        die();
    }
    function defineUrl()    {
        $checaUrl = parse_url($_SERVER["REQUEST_URI"])["path"]; //verifica o URL com base na variavel global server.
        return $checaUrl;
    }
    function defineRotas()  {
        //cria uma array associativa, ou seja uma array que tem um nome, também chamada de hash.
        $rotas = [
            "/" => "./controles/principal.php",/*  "./controles/principal.php", */
            "/aluno" => "./controles/aluno.php",
            "/empresa" => "./controles/empresa.php",
            "/admin" => "./controles/adm.php"
        ];
        return( $rotas );
    }
    function checaUrl( $caminho, $rota ) {
        if( array_key_exists($caminho, $rota ) )    {
            require($rota[$caminho]);
        }else{
            erro();
        }
    }
    $pegaValorRota = defineRotas();
    $pegaValorUrl = defineUrl();
    checaUrl( $pegaValorUrl, $pegaValorRota );

}
rotas();

?>