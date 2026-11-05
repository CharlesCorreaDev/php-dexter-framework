# Verifica se um ponto de código é um caractere gráfico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.isgraph.php

---

# IntlChar::isgraph

(PHP 7, PHP 8)

IntlChar::isgraph — Verifica se um ponto de código é um caractere gráfico

### Descrição

public static function **IntlChar::isgraph**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

Determina se o ponto de código especificado é um caractere "gráfico" (imprimível, excluindo espaços).

**`true`** para todos os caracteres exceto aqueles com categoria geral "Cc" (códigos de controle), "Cf" (códigos de formatação), "Cs" (substitutos), "Cn" (não atribuídos), e "Z" (separadores).

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna **`true`** se
`codepoint` for um caractere "gráfico", **`false`** se não for. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::isgraph("A"));
var_dump(IntlChar::isgraph("1"));
var_dump(IntlChar::isgraph("\u{2603}"));
var_dump(IntlChar::isgraph("\n"));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(true)
bool(true)
bool(false)
```

### Veja também

- [ctype\_graph()](function.ctype-graph.md) - Verifica se os caracteres são imprimíveis exceto espaço

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
