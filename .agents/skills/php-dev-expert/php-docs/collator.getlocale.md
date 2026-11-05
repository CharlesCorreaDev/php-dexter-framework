# Obtém o nome da localidade do agrupador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/collator.getlocale.php

---

# Collator::getLocale

# collator\_get\_locale

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Collator::getLocale -- collator\_get\_locale — Obtém o nome da localidade do agrupador

### Descrição

Estilo orientado a objetos

public function **Collator::getLocale**([int](language.types.integer.md) `$type`): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural

function **collator\_get\_locale**([Collator](class.collator.md) `$object`, [int](language.types.integer.md) `$type`): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém o nome da localidade do agrupador.

### Parâmetros

`object`
:   Objeto [Collator](class.collator.md).

`type`
:   Pode-se escolher entre localidae válida ou real (
    **`Locale::VALID_LOCALE`** e
    **`Locale::ACTUAL_LOCALE`**,
    respectivamente).

### Valor Retornado

Nome real de localidade de onde se originam os dados do agrupador. Se o agrupador tiver sido
instanciado a partir de regras ou se um erro tiver ocorrido, retornará **`false`**.

### Examples

**Exemplo #1 Exemplo de **collator\_get\_locale()****

```
<?php
$coll    = collator_create( 'en_US_California' );
$res_val = collator_get_locale( $coll, Locale::VALID_LOCALE );
$res_act = collator_get_locale( $coll, Locale::ACTUAL_LOCALE );
printf( "Nome de localidade válido: %s\nNome de localidade real: %s\n",
         $res_val, $res_act );
?>
```

O exemplo acima produzirá:

```
Nome de localidade válido: en_US
Nome de localidade real: root
```

### Veja também

- [collator\_create()](collator.create.md) - Cria um agrupador

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
