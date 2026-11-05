# Obtém a força atual de agrupamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/collator.getstrength.php

---

# Collator::getStrength

# collator\_get\_strength

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Collator::getStrength -- collator\_get\_strength — Obtém a força atual de agrupamento

### Descrição

Estilo orientado a objetos

public function **Collator::getStrength**(): [int](language.types.integer.md)

Estilo procedural

function **collator\_get\_strength**([Collator](class.collator.md) `$object`): [int](language.types.integer.md)

### Parâmetros

`object`
:   Objeto [Collator](class.collator.md).

### Valor Retornado

Retorna a força atual de agrupamento, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **collator\_get\_strength()****

```
<?php
$coll     = collator_create( 'en_US' );
$strength = collator_get_strength( $coll );
?>
```

### Veja também

- [Constantes de Collator](class.collator.md#intl.collator-constants)
- [collator\_set\_strength()](collator.setstrength.md) - Define a força do agrupador
- [collator\_get\_attribute()](collator.getattribute.md) - Obtém o valor de atributo de um agrupador

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
