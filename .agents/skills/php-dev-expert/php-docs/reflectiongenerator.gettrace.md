# Obtém o rastreamento do gerador em execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectiongenerator.gettrace.php

---

# ReflectionGenerator::getTrace

(PHP 7, PHP 8)

ReflectionGenerator::getTrace — Obtém o rastreamento do gerador em execução

### Descrição

public function **ReflectionGenerator::getTrace**([int](language.types.integer.md) `$options` = **`DEBUG_BACKTRACE_PROVIDE_OBJECT`**): [array](language.types.array.md)

Obtenha o rastreamento do gerador em execução no momento.

### Parâmetros

`options`
:   O valor de `options` pode ser qualquer um dos
    seguintes sinalizadores.

    **Opções disponíveis**

    | Opção | Descrição |
    | --- | --- |
    | **`DEBUG_BACKTRACE_PROVIDE_OBJECT`** | Padrão. |
    | **`DEBUG_BACKTRACE_IGNORE_ARGS`** | Não inclua as informações dos argumentos das funções na pilha de rastreamento. |

### Valor Retornado

Retorna o rastreamento do gerador atualmente em execução.

### Examples

**Exemplo #1 Exemplo de **ReflectionGenerator::getTrace()****

```
<?php
function foo() {
    yield 1;
}

function bar()
{
    yield from foo();
}

function baz()
{
    yield from bar();
}

$gen = baz();
$gen->valid(); // inicia o gerador

var_dump((new ReflectionGenerator($gen))->getTrace());
```

O exemplo acima produzirá
algo semelhante a:

```
array(2) {
  [0]=>
  array(4) {
    ["file"]=>
    string(18) "example.php"
    ["line"]=>
    int(8)
    ["function"]=>
    string(3) "foo"
    ["args"]=>
    array(0) {
    }
  }
  [1]=>
  array(4) {
    ["file"]=>
    string(18) "example.php"
    ["line"]=>
    int(12)
    ["function"]=>
    string(3) "bar"
    ["args"]=>
    array(0) {
    }
  }
}
```

### Veja também

- [ReflectionGenerator::getFunction()](reflectiongenerator.getfunction.md) - Obtém o nome da função do gerador
- [ReflectionGenerator::getThis()](reflectiongenerator.getthis.md) - Obtém o valor $this do gerador

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
