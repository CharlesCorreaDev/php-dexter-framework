# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/errorfunc.examples.php

---

# Examples

Pode-se ver abaixo um exemplo de uso das capacidades de gerenciamento de erros
no PHP. Define-se uma função de gerenciamento de erros que registra as informações dentro
de um arquivo (usando um formato XML), e envia um e-mail ao desenvolvador se um erro
crítico na lógica acontecer.

**Exemplo #1 Usando gerenciamento de erro em um script**

```
<?php
// fazendo o próprio gerenciamento de erro
error_reporting(0);

// função de gerenciamento de erro definida pelo usuário
function userErrorHandler($errno, $errmsg, $filename, $linenum, $vars)
{
    // horário do erro
    $dt = date("Y-m-d H:i:s (T)");

    // Define um array associativo de strings de erro.
    // Na realidade, as únicas entradas que devem ser
    // consideradas são E_WARNING, E_NOTICE, E_USER_ERROR,
    // E_USER_WARNING e E_USER_NOTICE
    $errortype = array (
                E_ERROR              => 'Erro',
                E_WARNING            => 'Alerta',
                E_PARSE              => 'Erro de Interpretação',
                E_NOTICE             => 'Nota',
                E_CORE_ERROR         => 'Erro de Núcleo',
                E_CORE_WARNING       => 'Alerta de Núcleo',
                E_COMPILE_ERROR      => 'Erro de Compilação',
                E_COMPILE_WARNING    => 'Alerta de Compilação',
                E_USER_ERROR         => 'Erro de Usuário',
                E_USER_WARNING       => 'Alerta de Usuário',
                E_USER_NOTICE        => 'Nota de Usuário',
                E_STRICT             => 'Nota em Tempo de Execução',
                E_RECOVERABLE_ERROR  => 'Erro Fatal Recuperável'
                );
    // conjunto de erros para os quais um rastreamento de variáveis será gravado
    $user_errors = array(E_USER_ERROR, E_USER_WARNING, E_USER_NOTICE);

    $err = "<errorentry>\n";
    $err .= "\t<datetime>" . $dt . "</datetime>\n";
    $err .= "\t<errornum>" . $errno . "</errornum>\n";
    $err .= "\t<errortype>" . $errortype[$errno] . "</errortype>\n";
    $err .= "\t<errormsg>" . $errmsg . "</errormsg>\n";
    $err .= "\t<scriptname>" . $filename . "</scriptname>\n";
    $err .= "\t<scriptlinenum>" . $linenum . "</scriptlinenum>\n";

    if (in_array($errno, $user_errors)) {
        $err .= "\t<vartrace>" . wddx_serialize_value($vars, "Variáveis") . "</vartrace>\n";
    }
    $err .= "</errorentry>\n\n";

    // para testes:
    // echo $err;

    // grava no registro de erros, e envia e-mail se houver um erro crítico
    error_log($err, 3, "/usr/local/php/error.log");
    if ($errno == E_USER_ERROR) {
        mail("phpdev@example.com", "Critical User Error", $err);
    }
}

function distance($vect1, $vect2)
{
    if (!is_array($vect1) || !is_array($vect2)) {
        trigger_error("Parâmetros incorretos, arrays esperados", E_USER_ERROR);
        return NULL;
    }

    if (count($vect1) != count($vect2)) {
        trigger_error("Vetores devem ser do mesmo tamanho", E_USER_ERROR);
        return NULL;
    }

    for ($i=0; $i<count($vect1); $i++) {
        $c1 = $vect1[$i]; $c2 = $vect2[$i];
        $d = 0.0;
        if (!is_numeric($c1)) {
            trigger_error("Coordenada $i no vetor 1 não é um número, usando zero",
                            E_USER_WARNING);
            $c1 = 0.0;
        }
        if (!is_numeric($c2)) {
            trigger_error("Coordenada $i no vetor 2 não é um número, usando zero",
                            E_USER_WARNING);
            $c2 = 0.0;
        }
        $d += $c2*$c2 - $c1*$c1;
    }
    return sqrt($d);
}

$old_error_handler = set_error_handler("userErrorHandler");

// constante não definida, gera um alerta
$t = I_AM_NOT_DEFINED;

// define alguns "vetores"
$a = array(2, 3, "foo");
$b = array(5.5, 4.3, -1.6);
$c = array(1, -3);

// gera um erro de usuário
$t1 = distance($c, $b) . "\n";

// gera um outro erro de usuário
$t2 = distance($b, "eu não sou um array") . "\n";

// gera um alerta
$t3 = distance($a, $b) . "\n";

?>
```

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
