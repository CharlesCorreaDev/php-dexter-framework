# Obtém o valor da constante da propriedade para uma propriedade informada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.getpropertyenum.php

---

# IntlChar::getPropertyEnum

(PHP 7, PHP 8)

IntlChar::getPropertyEnum — Obtém o valor da constante da propriedade para uma propriedade informada

### Descrição

public static function **IntlChar::getPropertyEnum**([string](language.types.string.md) `$alias`): [int](language.types.integer.md)

Obtém o valor da constante da propriedade para uma propriedade informada, como especificado no arquivo de banco de dados Unicode PropertyAliases.txt.
Curtas, longas, e outras variantes são reconhecidas.

Além disso, esta função mapeia os nomes sintéticos "gcm" / "General\_Category\_Mask" para a propriedade
**`IntlChar::PROPERTY_GENERAL_CATEGORY_MASK`**. Estes nomes não estão no arquivo PropertyAliases.txt.

Esta função é complementar à [IntlChar::getPropertyName()](intlchar.getpropertyname.md).

### Parâmetros

`alias`
:   O nome da propriedade a ser correspondida. O nome é comparado usando o modo "loose matching" (correspondência solta) como descrito no arquivo PropertyAliases.txt.

### Valor Retornado

Retorna um valor de constante `IntlChar::PROPERTY_`,
ou **`IntlChar::PROPERTY_INVALID_CODE`** se o nome fornecido não corresponder a nenhuma propriedade.

### Examples

**Exemplo #1 Testando diferentes propriedades**

```
<?php
var_dump(IntlChar::getPropertyEnum('Bidi_Class') === IntlChar::PROPERTY_BIDI_CLASS);
var_dump(IntlChar::getPropertyEnum('script') === IntlChar::PROPERTY_SCRIPT);
var_dump(IntlChar::getPropertyEnum('IDEOGRAPHIC') === IntlChar::PROPERTY_IDEOGRAPHIC);
var_dump(IntlChar::getPropertyEnum('Uma string inventada') === IntlChar::PROPERTY_INVALID_CODE);
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(true)
bool(true)
bool(true)
```

### Veja também

- [IntlChar::getPropertyName()](intlchar.getpropertyname.md) - Obtém o nome Unicode de uma propriedade

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
