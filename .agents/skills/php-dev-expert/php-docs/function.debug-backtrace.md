# Gera uma rastreamento retroativo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.debug-backtrace.php

---

# debug\_backtrace

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

debug\_backtrace — Gera uma rastreamento retroativo

### Descrição

function **debug\_backtrace**([int](language.types.integer.md) `$options` = **`DEBUG_BACKTRACE_PROVIDE_OBJECT`**, [int](language.types.integer.md) `$limit` = 0): [array](language.types.array.md)

**debug\_backtrace()** gera um rastreamento retroativo do PHP.

### Parâmetros

`options`
:   Este parâmetro é uma máscara de bits para as seguintes opções:

    **Opções de **debug\_backtrace()****

    |  |  |
    | --- | --- |
    | DEBUG\_BACKTRACE\_PROVIDE\_OBJECT | Define se o índice "object" deve ou não ser preenchido. |
    | DEBUG\_BACKTRACE\_IGNORE\_ARGS | Define se o índice "args" deve ou não ser omitido, e consequentemente todos os argumentos de métodos e funções, para economizar memória. |

    > **Nota**:
    >
    > Existem quatro combinações possíveis:
    >
    > **Opções de **debug\_backtrace()****
    >
    > |  |  |
    > | --- | --- |
    > | `debug_backtrace()` | Preenche ambos os índices |
    > | `debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT)` |
    > | `debug_backtrace(~DEBUG_BACKTRACE_PROVIDE_OBJECT)` | Omite o índice `"object"` e preenche o índice `"args"`. |
    > | `debug_backtrace(0)` |
    > | `debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS)` | Omite *ambos* os índices `"object"` *e* `"args"`. |
    > | `debug_backtrace(~DEBUG_BACKTRACE_PROVIDE_OBJECT | DEBUG_BACKTRACE_IGNORE_ARGS)` |
    > | `debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT|DEBUG_BACKTRACE_IGNORE_ARGS)` | Preenche o índice `"object"` *e* omite o índice `"args"`. |

`limit`
:   Este parâmetro pode ser usado para limitar o número de estruturas de pilha retornados.
    Por padrão (`limit`=`0`) todas as estruturas são retornadas.

### Valor Retornado

Retorna um array de [array](language.types.array.md)s associativos. Os elementos possíveis retornados
são os seguintes:

**Elementos possíveis retornados de **debug\_backtrace()****

| Nome | Tipo | Descrição |
| --- | --- | --- |
| function | [string](language.types.string.md) | O nome da função atual. Consulte também [\_\_FUNCTION\_\_](language.constants.magic.md). |
| line | [int](language.types.integer.md) | O número da linha atual. Consulte também [\_\_LINE\_\_](language.constants.magic.md). |
| file | [string](language.types.string.md) | O nome do arquivo atual. Consulte também [\_\_FILE\_\_](language.constants.magic.md). |
| class | [string](language.types.string.md) | O nome da [classe](language.oop5.md) atual. Consulte também [\_\_CLASS\_\_](language.constants.magic.md) |
| object | [object](language.types.object.md) | O [objeto](language.oop5.md) atual de **`DEBUG_BACKTRACE_PROVIDE_OBJECT`** for informada. |
| type | [string](language.types.string.md) | O tipo de chamada atual. Se for chamada de método, "->" é retornado. Se for chamada de método estático, "::" é retornado. Se for chamada de função, nada é retornado. |
| args | [array](language.types.array.md) | Se for dentro de uma função, isto lista os arumentos da função. Se for dentro de um arquivo incluído, isto lista o nome do arquivo incluído. A menos que **`DEBUG_BACKTRACE_IGNORE_ARGS`** seja informada. |

### Examples

**Exemplo #1 Exemplo de **debug\_backtrace()****

```
<?php
// filename: /tmp/a.php

function a_test($str)
{
    echo "\nHi: $str";
    var_dump(debug_backtrace());
}

a_test('friend');
?>

<?php
// filename: /tmp/b.php
include_once '/tmp/a.php';
?>
```

Resultados similares ao seguinte ao executar
/tmp/b.php:

```
Hi: friend
array(2) {
[0]=>
array(4) {
    ["file"] => string(10) "/tmp/a.php"
    ["line"] => int(10)
    ["function"] => string(6) "a_test"
    ["args"]=>
    array(1) {
      [0] => &string(6) "friend"
    }
}
[1]=>
array(4) {
    ["file"] => string(10) "/tmp/b.php"
    ["line"] => int(2)
    ["args"] =>
    array(1) {
      [0] => string(10) "/tmp/a.php"
    }
    ["function"] => string(12) "include_once"
  }
}
```

### Veja também

- [trigger\_error()](function.trigger-error.md) - Gera uma mensagem a nível de usuário de erro/alerta/nota
- [debug\_print\_backtrace()](function.debug-print-backtrace.md) - Mostra um rastreamento retroativo

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
