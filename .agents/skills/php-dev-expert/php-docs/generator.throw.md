# Lança uma exceção no gerador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/generator.throw.php

---

# Generator::throw

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

Generator::throw — Lança uma exceção no gerador

### Descrição

public function **Generator::throw**([Throwable](class.throwable.md) `$exception`): [mixed](language.types.mixed.md)

Lança uma exceção no gerador e retorna a execução do gerador.
O comportamento será o mesmo como se a expressão [`yield`](language.generators.syntax.md#control-structures.yield) corrente fosse substituída por
uma declaração `throw $exception`.

Se o gerador já tiver sido fechado ao invocar este método, a exceção será
lançada no contexto daquele que o chamou.

### Parâmetros

`exception`
:   Exceção a ser lançada no gerador.

### Valor Retornado

Retorna o valor gerado.

### Examples

**Exemplo #1 Lança uma exceção no gerador**

```
<?php
function gen() {
    echo "Foo\n";
    try {
        yield;
    } catch (Exception $e) {
        echo "Exception: {$e->getMessage()}\n";
    }
    echo "Bar\n";
}

$gen = gen();
$gen->rewind();
$gen->throw(new Exception('Test'));
?>
```

O exemplo acima produzirá:

```
Foo
Exception: Test
Bar
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
