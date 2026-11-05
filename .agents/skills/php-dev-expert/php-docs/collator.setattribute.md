# Define atributo do agrupador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/collator.setattribute.php

---

# Collator::setAttribute

# collator\_set\_attribute

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Collator::setAttribute -- collator\_set\_attribute — Define atributo do agrupador

### Descrição

Estilo orientado a objetos

public function **Collator::setAttribute**([int](language.types.integer.md) `$attribute`, [int](language.types.integer.md) `$value`): [bool](language.types.boolean.md)

Estilo procedural

function **collator\_set\_attribute**([Collator](class.collator.md) `$object`, [int](language.types.integer.md) `$attribute`, [int](language.types.integer.md) `$value`): [bool](language.types.boolean.md)

Define atributo do agrupador.

### Parâmetros

`object`
:   Objeto [Collator](class.collator.md).

`attribute`
:   Atributo.

`value`
:   Valor do atributo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **collator\_set\_attribute()****

```
<?php
$coll = collator_create('en_CA');
collator_set_attribute($coll, Collator::NORMALIZATION_MODE, Collator::ON);
?>
```

### Veja também

- [Constantes de Collator](class.collator.md#intl.collator-constants)
- [collator\_get\_attribute()](collator.getattribute.md) - Obtém o valor de atributo de um agrupador
- [collator\_set\_strength()](collator.setstrength.md) - Define a força do agrupador

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
