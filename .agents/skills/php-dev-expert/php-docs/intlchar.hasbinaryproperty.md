# Verifica uma propriedade binária Unicode para um ponto de código

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.hasbinaryproperty.php

---

# IntlChar::hasBinaryProperty

(PHP 7, PHP 8)

IntlChar::hasBinaryProperty — Verifica uma propriedade binária Unicode para um ponto de código

### Descrição

public static function **IntlChar::hasBinaryProperty**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`, [int](language.types.integer.md) `$property`): [?](language.types.null.md)[bool](language.types.boolean.md)

Verifica uma propriedade binária Unicode para um ponto de código.

Unicode, especialmente na versão 3.2, define muito mais propriedades que as originais definidas em UnicodeData.txt.

As APIs de propriedades têm o objetivo de refletir as propriedades Unicode como definidas no Banco de Dados de Caracteres Unicode (UCD)
e nos Relatórios Técnicos Unicode. Para detalhes sobre as propriedades consulte
[» https://www.unicode.org/ucd/](https://www.unicode.org/ucd/).
Para nomes de propriedades Unicode consulte o arquivo da UCD, PropertyAliases.txt.

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

`property`
:   A propriedade Unicode a ser pesquisada (consulte as constantes `IntlChar::PROPERTY_*`).

### Valor Retornado

Retorna **`true`** ou **`false`** de acordo com o valor binário da propriedade Unicode para o `codepoint`.
Também retorna **`false`** se `property` estiver fora dos limites ou se a versão Unicode não tiver dados desta
propriedade ou se não tiver para este ponto de código. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes propriedades**

```
<?php
var_dump(IntlChar::hasBinaryProperty("A", IntlChar::PROPERTY_ALPHABETIC));
var_dump(IntlChar::hasBinaryProperty("A", IntlChar::PROPERTY_CASE_SENSITIVE));
var_dump(IntlChar::hasBinaryProperty("A", IntlChar::PROPERTY_BIDI_MIRRORED));
var_dump(IntlChar::hasBinaryProperty("[", IntlChar::PROPERTY_ALPHABETIC));
var_dump(IntlChar::hasBinaryProperty("[", IntlChar::PROPERTY_CASE_SENSITIVE));
var_dump(IntlChar::hasBinaryProperty("[", IntlChar::PROPERTY_BIDI_MIRRORED));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(true)
bool(false)
bool(false)
bool(false)
bool(true)
```

### Veja também

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
