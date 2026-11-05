# Mostra um rastreamento retroativo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.debug-print-backtrace.php

---

# debug\_print\_backtrace

(PHP 5, PHP 7, PHP 8)

debug\_print\_backtrace — 
Mostra um rastreamento retroativo

### Descrição

function **debug\_print\_backtrace**([int](language.types.integer.md) `$options` = 0, [int](language.types.integer.md) `$limit` = 0): [void](language.types.void.md)

A função **debug\_print\_backtrace()** mostra um rastreamento retroativo do PHP. Ela
mostra as chamadas de função, arquivos incluídos por [include](function.include.md) ou requeridos por [require](function.require.md),
e resultados de avaliações de [eval()](function.eval.md).

### Parâmetros

`options`
:   Este parâmetro é uma máscara de bits para as opções a seguir:

    **Opções de **debug\_print\_backtrace()****

    |  |  |
    | --- | --- |
    | DEBUG\_BACKTRACE\_IGNORE\_ARGS | Omitir os índices de "args", e portanto todos os argumentos de funções/métodos, para economizar memória. |
    | DEBUG\_BACKTRACE\_PROVIDE\_OBJECT | Aceito para compatibilidade com [debug\_backtrace()](function.debug-backtrace.md), mas não tem efeito: o rastreamento retroativo gerado é renderizado como uma string e a entrada "object" nunca é impressa. |

`limit`
:   Este parâmetro pode ser usado para limitar o número de seções de pilha mostradas.
    Por padrão (`limit`=`0`) ela mostra todas as seções da pilha.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **debug\_print\_backtrace()****

```
<?php
// arquivo include.php

function a() {
    b();
}

function b() {
    c();
}

function c(){
    debug_print_backtrace();
}

a();

?>
```

```
<?php
// arquivo test.php
// este é o arquivo que deve ser executado

include 'include.php';
?>
```

O exemplo acima produzirá
algo semelhante a:

```
#0  c() called at [/tmp/include.php:10]
#1  b() called at [/tmp/include.php:6]
#2  a() called at [/tmp/include.php:17]
#3  include(/tmp/include.php) called at [/tmp/test.php:3]
```

### Veja também

- [debug\_backtrace()](function.debug-backtrace.md) - Gera uma rastreamento retroativo

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
