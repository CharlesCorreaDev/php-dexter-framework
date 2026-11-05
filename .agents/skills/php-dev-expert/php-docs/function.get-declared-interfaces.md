# Retorna um array com todas as interfaces declaradas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-declared-interfaces.php

---

# get\_declared\_interfaces

(PHP 5, PHP 7, PHP 8)

get\_declared\_interfaces — Retorna um array com todas as interfaces declaradas

### Descrição

function **get\_declared\_interfaces**(): [array](language.types.array.md)

Retorna as interfaces declaradas.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Essa função retorna um array com os nomes de interfaces declaradas no
script atual.

### Examples

**Exemplo #1 Exemplo de uso de **get\_declared\_interfaces()****

```
<?php
print_r(get_declared_interfaces());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => Traversable
    [1] => IteratorAggregate
    [2] => Iterator
    [3] => ArrayAccess
    [4] => reflector
    [5] => RecursiveIterator
    [6] => SeekableIterator
)
```

### Veja também

- [interface\_exists()](function.interface-exists.md) - Verifica se a interface foi definida
- [get\_declared\_classes()](function.get-declared-classes.md) - Retorna um array com os nomes das classes definidas
- [class\_implements()](function.class-implements.md) - Retorna as interfaces que são implementadas pela classe ou interface fornecida

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
