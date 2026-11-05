# Obtém o valor mínimo para uma propriedade Unicode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.getintpropertyminvalue.php

---

# IntlChar::getIntPropertyMinValue

(PHP 7, PHP 8)

IntlChar::getIntPropertyMinValue — Obtém o valor mínimo para uma propriedade Unicode

### Descrição

public static function **IntlChar::getIntPropertyMinValue**([int](language.types.integer.md) `$property`): [int](language.types.integer.md)

Obtém o valor mínimo para uma propriedade Unicode enumerada/inteira/binária.

### Parâmetros

`property`
:   A propriedade Unicode a ser pesquisada (consulte as constantes `IntlChar::PROPERTY_*`).

### Valor Retornado

O valor mínimo retornado por [IntlChar::getIntPropertyValue()](intlchar.getintpropertyvalue.md) para uma propriedade Unicode.
`0` se o seletor de propriedade estiver fora do intervalo.

### Examples

**Exemplo #1 Testando diferentes propriedades**

```
<?php
var_dump(IntlChar::getIntPropertyMinValue(IntlChar::PROPERTY_BIDI_CLASS));
var_dump(IntlChar::getIntPropertyMinValue(IntlChar::PROPERTY_SCRIPT));
var_dump(IntlChar::getIntPropertyMinValue(IntlChar::PROPERTY_IDEOGRAPHIC));
var_dump(IntlChar::getIntPropertyMinValue(999999999)); // Um valor inventado
?>
```

O exemplo acima produzirá:

```
int(0)
int(0)
int(0)
int(0)
```

### Veja também

- [IntlChar::hasBinaryProperty()](intlchar.hasbinaryproperty.md) - Verifica uma propriedade binária Unicode para um ponto de código
- [IntlChar::getIntPropertyMaxValue()](intlchar.getintpropertymaxvalue.md) - Obtém o valor máximo para uma propriedade Unicode
- [IntlChar::getIntPropertyValue()](intlchar.getintpropertyvalue.md) - Obtém o valor de uma propriedade Unicode de um ponto de código
- [IntlChar::getUnicodeVersion()](intlchar.getunicodeversion.md) - Obtém a versão do Unicode

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
