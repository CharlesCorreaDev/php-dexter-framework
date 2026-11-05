# Obtém o valor numérico para um ponto de código Unicode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.getnumericvalue.php

---

# IntlChar::getNumericValue

(PHP 7, PHP 8)

IntlChar::getNumericValue — Obtém o valor numérico para um ponto de código Unicode

### Descrição

public static function **IntlChar::getNumericValue**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[float](language.types.float.md)

Obtém o valor numérico para um ponto de código Unicode como definido no Banco de Dados de Caracteres Unicode.

Para caracteres sem nenhum valor numérico no Banco de Dados de Caracteres Unicode, esta função retornará
**`IntlChar::NO_NUMERIC_VALUE`**.

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Valor numérico de `codepoint`,
ou **`IntlChar::NO_NUMERIC_VALUE`** se nenhum estiver definido. Esta
constantes foi adicionada no 7.0.6, antes dessa versão o valor literal
([float](language.types.float.md))`-123456789` pode ser usado no lugar. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::getNumericValue("4"));
var_dump(IntlChar::getNumericValue("x"));
var_dump(IntlChar::getNumericValue("\u{216C}"));
?>
```

O exemplo acima produzirá:

```
float(4)
float(-123456789)
float(50)
```

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
