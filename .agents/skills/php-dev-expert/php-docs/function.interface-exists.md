# Verifica se a interface foi definida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.interface-exists.php

---

# interface\_exists

(PHP 5 >= 5.0.2, PHP 7, PHP 8)

interface\_exists — Verifica se a interface foi definida

### Descrição

function **interface\_exists**([string](language.types.string.md) `$interface`, [bool](language.types.boolean.md) `$autoload` = **`true`**): [bool](language.types.boolean.md)

Verifica se a interface foi definida.

### Parâmetros

`interface`
:   O nome da interface.

`autoload`
:   Se deve-se [carregar automaticamente](language.oop5.autoload.md)
    a interface se já não tiver sido carregada.

### Valor Retornado

Retorna **`true`** se a interface fornecida pelo parâmetro
`interface` já foi definida, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **interface\_exists()****

```
<?php
// Verifica se a interface existe antes de tentar usá-la
if (interface_exists('MyInterface')) {
    class MyClass implements MyInterface
    {
        // Métodos
    }
}

?>
```

### Veja também

- [get\_declared\_interfaces()](function.get-declared-interfaces.md) - Retorna um array com todas as interfaces declaradas
- [class\_implements()](function.class-implements.md) - Retorna as interfaces que são implementadas pela classe ou interface fornecida
- [class\_exists()](function.class-exists.md) - Verifica se uma classe foi definida
- [enum\_exists()](function.enum-exists.md) - Verifica se uma enumeração foi definida

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
