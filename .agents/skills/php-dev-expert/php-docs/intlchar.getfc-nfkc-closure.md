# Obtém a propriedade FC_NFKC_Closure para um ponto de código

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.getfc-nfkc-closure.php

---

# IntlChar::getFC\_NFKC\_Closure

(PHP 7, PHP 8)

IntlChar::getFC\_NFKC\_Closure — Obtém a propriedade FC\_NFKC\_Closure para um ponto de código

### Descrição

public static function **IntlChar::getFC\_NFKC\_Closure**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [string](language.types.string.md)|[false](language.types.singleton.md)|[null](language.types.null.md)

Obtém a string da propriedade FC\_NFKC\_Closure para um caractere.

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna a string da propriedade FC\_NFKC\_Closure para o `codepoint`, ou uma string vazia se não houver.
Retorna **`null`** ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::getFC_NFKC_Closure("\u{2121}"));
var_dump(IntlChar::getFC_NFKC_Closure("\u{1D2D}"));
?>
```

O exemplo acima produzirá:

```
string(3) "tel"
string(2) "æ"
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
