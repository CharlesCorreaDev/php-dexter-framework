# Define uma função de usuário para manipulação de erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.set-error-handler.php

---

# set\_error\_handler

(PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8)

set\_error\_handler — Define uma função de usuário para manipulação de erro

### Descrição

function **set\_error\_handler**([?](language.types.null.md)[callable](language.types.callable.md) `$callback`, [int](language.types.integer.md) `$error_levels` = **`E_ALL`**): [?](language.types.null.md)[callable](language.types.callable.md)

Define uma função de usuário (`callback`) para lidar
com erros em um script.

Esta função pode ser usada para definir manipuladores de erros customizados em tempo de execução,
por exemplo em aplicações que precisem limpar arquivos/dados quando um erro
crítico ocorrer, ou no disparo de um erro em resposta a certas condições
(usando [trigger\_error()](function.trigger-error.md)).

É importante ressaltar que o manipulador padrão de erros do PHP é completamente
ignorado para os tipos de erro especificados por `error_levels`
a menos que a função de retorno devolva **`false`**.
As configurações de [error\_reporting()](function.error-reporting.md) não terão efeito e o
manipulador de erro será chamado de qualquer maneira - entretanto, ainda será possível
ler o valor atual de
[error\_reporting](errorfunc.configuration.md#ini.error-reporting) e atuar
apropriadamente.

Note também que é responsabilidade do manipulador para a execução
do script se for necessário, chamando-se [exit()](function.exit.md). Se a função de manipulação
de erro simplesmente retornar, a execução do script continuará com a declaração seguinte à
que causou o erro.

Os seguintes tipos de erro não podem ser manipulados com uma função definida pelo
usuário: **`E_ERROR`**, **`E_PARSE`**,
**`E_CORE_ERROR`**, **`E_CORE_WARNING`**,
**`E_COMPILE_ERROR`**,
**`E_COMPILE_WARNING`** independentemente de onde eles surgirem, e
a maior parte dos erros **`E_STRICT`** originados no arquivo onde a função
**set\_error\_handler()** for chamada.

Se erros ocorrerem antes que o script seja executado (ex.: em envios de arquivos), o
manipulador customizado de erros não poderá ser chamado já que ainda não estará registrado
nesse momento.

### Parâmetros

`callback`
:   Se **`null`** for passado, o manipulador será redefinido a seu estado padrão.
    Caso contrário, o manipulador é uma função de retorno com a seguinte assinatura:

    function handler(  
        [int](language.types.integer.md) `$errno`,  
        [string](language.types.string.md) `$errstr`,  
        [string](language.types.string.md) `$errfile` = ?,  
        [int](language.types.integer.md) `$errline` = ?,  
        [array](language.types.array.md) `$errcontext` = ?  
    ): [bool](language.types.boolean.md)

    `errno`
    :   O primeiro parâmetro, `errno`, que conterá o
        nível do erro, como um inteiro.

    `errstr`
    :   O segundo parâmetro, `errstr`, que conterá a
        mensagem de erro, como uma string.

    `errfile`
    :   Se a função de retorno aceitar um terceiro parâmetro, `errfile`,
        será passado o nome do arquivo no qual o erro se originou, como uma string.

    `errline`
    :   Se a função de retorno aceitar um quarto parâmetro, `errline`,
        será passado o número da linha onde o erro ocorreu, como um inteiro.

    `errcontext`
    :   Se a função de retorno aceitar um quinto parâmetro, `errcontext`,
        será passado um array que aponta para a tabela de símbolos ativa no
        ponto onde o erro ocorreu. Em outras palavras, `errcontext`
        conterá um array com cada variável existente no escopo em
        que o erro surgiu.
        Manipuladores de erro de usuário não devem modificar o contexto de erro.

        **Aviso**

        Este parâmetro tornou-se *DESCONTINUADO* a partir do PHP 7.2.0,
        e foi *REMOVIDO* a partir do PHP 8.0.0. Se a função definir
        este parâmetro sem um valor padrão, um erro do tipo "too few arguments" será
        emitido quando ela for chamada.

    Se a função retornar **`false`**, o manipulador de erros normal continua.

`error_levels`
:   Pode ser usado para mascarar a chamada da função
    `callback` da mesma forma que a configuração ini [error\_reporting](errorfunc.configuration.md#ini.error-reporting)
    controla quais erros são mostrados. Sem a definição desta máscara, a função
    `callback` será chamada para todo erro,
    indenpendentemente da configuração de [error\_reporting](errorfunc.configuration.md#ini.error-reporting).

### Valor Retornado

Retorna o manipulador de erro anterior (se existente) como um [callable](language.types.callable.md).
Se o manipulador interno for usado, **`null`** é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `errcontext` foi removido e não mais será passado para chamadas de retorno de usuário. |
| 7.2.0 | `errcontext` foi descontinuado. O uso deste parâmetro agora emite uma nota **`E_DEPRECATED`**. |

### Examples

**Exemplo #1 Manipulação de erro com **set\_error\_handler()** e [trigger\_error()](function.trigger-error.md)**

O exemplo abaixo mostra a manipulação de exceções internas através de
disparo de erros e uso de função definida pelo usuário:

```
<?php
// função de manipulação de erro
function myErrorHandler($errno, $errstr, $errfile, $errline)
{
    if (!(error_reporting() & $errno)) {
        // Este código de erro não está incluído em error_reporting, então será
        // passado ao manipulador padrão de erros do PHP
        return false;
    }

    // $errstr pode precisar de escape:
    $errstr = htmlspecialchars($errstr);

    switch ($errno) {
    case E_USER_ERROR:
        echo "<b>Meu ERRO</b> [$errno] $errstr<br />\n";
        echo "  Erro fatal na linha $errline no arquivo $errfile";
        echo ", PHP " . PHP_VERSION . " (" . PHP_OS . ")<br />\n";
        echo "Abortando...<br />\n";
        exit(1);

    case E_USER_WARNING:
        echo "<b>Meu ALERTA</b> [$errno] $errstr<br />\n";
        break;

    case E_USER_NOTICE:
        echo "<b>Minha NOTA</b> [$errno] $errstr<br />\n";
        break;

    default:
        echo "Tipo de erro desconhecido: [$errno] $errstr<br />\n";
        break;
    }

    /* Não executa o manipulador interno do PHP */
    return true;
}

// função para testar a manipulação de erro
function scale_by_log($vect, $scale)
{
    if (!is_numeric($scale) || $scale <= 0) {
        trigger_error("log(x) para x <= 0 é indefinido, foi usado: escala = $scale", E_USER_ERROR);
    }

    if (!is_array($vect)) {
        trigger_error("Vetor de entrada incorreto, esperado array de valores", E_USER_WARNING);
        return null;
    }

    $temp = array();
    foreach($vect as $pos => $value) {
        if (!is_numeric($value)) {
            trigger_error("Valor na posição $pos não é um número, usando 0 (zero)", E_USER_NOTICE);
            $value = 0;
        }
        $temp[$pos] = log($scale) * $value;
    }

    return $temp;
}

// define para o manipulador de erro de usuário
$old_error_handler = set_error_handler("myErrorHandler");

// dispara alguns erros, primeiro define um array misto com um item não numérico
echo "vetor a\n";
$a = array(2, 3, "foo", 5.5, 43.3, 21.11);
print_r($a);

// agora gera um segundo array
echo "----\nvetor b - uma nota (b = log(PI) * a)\n";
/* Valor na posição $pos não é um número, usando 0 (zero) */
$b = scale_by_log($a, M_PI);
print_r($b);

// isto é um problema, passando uma string ao invés de um array
echo "----\nvetor c - um alerta\n";
/* Vetor de entrada incorreto, esperado array de valores */
$c = scale_by_log("not array", 2.3);
var_dump($c); // NULL

// aqui um erro crítico, log de zero ou número negativo não é definido
echo "----\nvetor d - erro fatal\n";
/* log(x) para x <= 0 é indefinido, foi usado: escala = $scale" */
$d = scale_by_log($a, -2.5);
var_dump($d); // Nunca alcançado
?>
```

O exemplo acima produzirá
algo semelhante a:

```
vetor a
Array
(
    [0] => 2
    [1] => 3
    [2] => foo
    [3] => 5.5
    [4] => 43.3
    [5] => 21.11
)
----
vetor b - uma nota (b = log(PI) * a)
<b>Minha NOTA</b> [1024] Valor na posição 2 não é um número, usando 0 (zero)<br />
Array
(
    [0] => 2.2894597716988
    [1] => 3.4341896575482
    [2] => 0
    [3] => 6.2960143721717
    [4] => 49.566804057279
    [5] => 24.165247890281
)
----
vetor c - um alerta
<b>Meu ALERTA</b> [512] Vetor de entrada incorreto, esperado array de valores<br />
NULL
----
vetor d - erro fatal
<b>Meu ERRO</b> [256] log(x) para x <= 0 é indefinido, foi usado: escala = -2.5<br />
  Erro fatal na linha 35 no arquivo trigger_error.php, PHP 5.2.1 (FreeBSD)<br />
Abortando...<br />
```

### Veja também

- [ErrorException](class.errorexception.md)
- [error\_reporting()](function.error-reporting.md) - Define quais erros do PHP são relatados
- [restore\_error\_handler()](function.restore-error-handler.md) - Restaura a função anterior de gerenciamento de erro
- [get\_error\_handler()](function.get-error-handler.md) - Obtém a função de manipulação de erro definida pelo usuário
- [trigger\_error()](function.trigger-error.md) - Gera uma mensagem a nível de usuário de erro/alerta/nota
- [Constantes de nível de erro](errorfunc.constants.md)

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
