# Obtém o valor de uma propriedade Unicode de um ponto de código

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.getintpropertyvalue.php

---

# IntlChar::getIntPropertyValue

(PHP 7, PHP 8)

IntlChar::getIntPropertyValue — Obtém o valor de uma propriedade Unicode de um ponto de código

### Descrição

public static function **IntlChar::getIntPropertyValue**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`, [int](language.types.integer.md) `$property`): [?](language.types.null.md)[int](language.types.integer.md)

Obtém o valor de uma propriedade Unicode inteira ou enumerada para um ponto de código.
Também retorna valores de propriedades binárias e de máscara.

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

`property`
:   A propriedade Unicode a ser pesquisada (consulte as constantes `IntlChar::PROPERTY_*`).

### Valor Retornado

Retorna o valor numérico que é diretamente o valor da propriedade ou, para propriedade enumeradas, o que corresponde ao
valor numérico da constante enumerada do tipo de enumeração do valor da propriedade respectiva. Retorna **`null`** em caso de falha.

Retorna `0` ou `1` (para **`false`**/**`true`**) para propriedades Unicode binárias.

Retorna uma máscara de bits para propriedades de máscara.

Retorna `0` se `property` estiver fora dos limites ou se a versão Unicode não
tiver nenhum dado para a propriedade, ou não tiver para este ponto de código.

### Examples

**Exemplo #1 Testando diferentes propriedades**

```
<?php
var_dump(IntlChar::getIntPropertyValue("A", IntlChar::PROPERTY_ALPHABETIC) === 1);
var_dump(IntlChar::getIntPropertyValue("[", IntlChar::PROPERTY_BIDI_MIRRORED) === 1);
var_dump(IntlChar::getIntPropertyValue("Φ", IntlChar::PROPERTY_BLOCK) === IntlChar::BLOCK_CODE_GREEK);
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(true)
bool(true)
```

### Veja também

- [IntlChar::hasBinaryProperty()](intlchar.hasbinaryproperty.md) - Verifica uma propriedade binária Unicode para um ponto de código
- [IntlChar::getIntPropertyMinValue()](intlchar.getintpropertyminvalue.md) - Obtém o valor mínimo para uma propriedade Unicode
- [IntlChar::getIntPropertyMaxValue()](intlchar.getintpropertymaxvalue.md) - Obtém o valor máximo para uma propriedade Unicode
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
