# Constrói um LimitIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/limititerator.construct.php

---

# LimitIterator::\_\_construct

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

LimitIterator::\_\_construct — Constrói um LimitIterator

### Descrição

public function **LimitIterator::\_\_construct**([Iterator](class.iterator.md) `$iterator`, [int](language.types.integer.md) `$offset` = 0, [int](language.types.integer.md) `$limit` = -1)

Constrói um novo [LimitIterator](class.limititerator.md) a partir de um
`iterator` com um `offset`
inicial e um `limit` máximo.

### Parâmetros

`iterator`
:   O [Iterator](class.iterator.md) a ser limitado.

`offset`
:   Deslocamento opcional do limite.

`limit`
:   Contagem opcional do limite.

### Erros/Exceções

Lança um [ValueError](class.valueerror.md)
se o `offset` for menor que `0`
ou o `limit` for menor que `-1`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Agora lança um [ValueError](class.valueerror.md) se o `offset` for menor que `0`; anteriormente lançava um [RuntimeException](class.runtimeexception.md). |
| 8.0.0 | Agora lança um [ValueError](class.valueerror.md) se o `limit` for menor que `-1`; anteriormente lançava um [RuntimeException](class.runtimeexception.md). |

### Examples

**Exemplo #1 Exemplo de **LimitIterator::\_\_construct()****

```
<?php
$ait = new ArrayIterator(array('a', 'b', 'c', 'd', 'e'));
$lit = new LimitIterator($ait, 1, 3);
foreach ($lit as $value) {
    echo $value . "\n";
}
?>
```

O exemplo acima produzirá:

```
b
c
d
```

### Veja também

- [Exemplos de LimitIterator](class.limititerator.md#limititerator.examples)

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
