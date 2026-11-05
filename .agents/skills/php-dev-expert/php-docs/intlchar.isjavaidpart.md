# Verifica se um ponto de código é permissível em um identificador Java

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.isjavaidpart.php

---

# IntlChar::isJavaIDPart

(PHP 7, PHP 8)

IntlChar::isJavaIDPart — Verifica se um ponto de código é permissível em um identificador Java

### Descrição

public static function **IntlChar::isJavaIDPart**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

Determina se o caractere especificado é permissível em um identificador Java.

Em adição a [IntlChar::isIDPart()](intlchar.isidpart.md), **`true`** para caracteres com categoria geral "Sc" (símbolos de moeda).

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna **`true`** se
`codepoint` puder ocorrer em um identificador Java, **`false`** se não puder. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::isJavaIDPart("A"));
var_dump(IntlChar::isJavaIDPart("$"));
var_dump(IntlChar::isJavaIDPart("\n"));
var_dump(IntlChar::isJavaIDPart("\u{2603}"));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(true)
bool(false)
bool(false)
```

### Veja também

- [IntlChar::isIDIgnorable()](intlchar.isidignorable.md) - Verifica se um ponto de código é um caractere ignorável
- [IntlChar::isIDPart()](intlchar.isidpart.md) - Verifica se um ponto de código é permissível em um identificador
- [IntlChar::isJavaIDStart()](intlchar.isjavaidstart.md) - Verifica se um ponto de código é permissível como o primeiro caractere em um identificador Java
- [IntlChar::isalpha()](intlchar.isalpha.md) - Verifica se um ponto de código é uma letra
- [IntlChar::isdigit()](intlchar.isdigit.md) - Verifica se um ponto de código é um caractere de dígito

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
