# Obtém o valor de atributo de um agrupador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/collator.getattribute.php

---

# Collator::getAttribute

# collator\_get\_attribute

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Collator::getAttribute -- collator\_get\_attribute — Obtém o valor de atributo de um agrupador

### Descrição

Estilo orientado a objetos

public function **Collator::getAttribute**([int](language.types.integer.md) `$attribute`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Estilo procedural

function **collator\_get\_attribute**([Collator](class.collator.md) `$object`, [int](language.types.integer.md) `$attribute`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém um valor de um atributo inteiro de um agrupador.

### Parâmetros

`object`
:   Objeto [Collator](class.collator.md).

`attribute`
:   Atributo do qual o valor será obtido.

### Valor Retornado

Valor do atributo, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **collator\_get\_attribute()****

```
<?php
$coll = collator_create( 'en_CA' );
$val = collator_get_attribute( $coll, Collator::NUMERIC_COLLATION );
if( $val === false )
{
    // Gerencia o erro.
}
?>
```

### Veja também

- [Constantes de Collator](class.collator.md#intl.collator-constants)
- [collator\_set\_attribute()](collator.setattribute.md) - Define atributo do agrupador
- [collator\_get\_strength()](collator.getstrength.md) - Obtém a força atual de agrupamento

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
