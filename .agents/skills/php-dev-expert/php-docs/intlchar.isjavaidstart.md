# Verifica se um ponto de código é permissível como o primeiro caractere em um identificador Java

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.isjavaidstart.php

---

# IntlChar::isJavaIDStart

(PHP 7, PHP 8)

IntlChar::isJavaIDStart — Verifica se um ponto de código é permissível como o primeiro caractere em um identificador Java

### Descrição

public static function **IntlChar::isJavaIDStart**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

Determina se o caractere especificado é permissível como o início de um identificador Java.

Em adição a [IntlChar::isIDStart()](intlchar.isidstart.md), **`true`** para caracteres com categoria geral "Sc" (símbolos de moeda) e "Pc" (pontuação de conexão).

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna **`true`** se
`codepoint` puder iniciar um identificador Java, **`false`** se não puder. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::isJavaIDStart("A"));
var_dump(IntlChar::isJavaIDStart("$"));
var_dump(IntlChar::isJavaIDStart("\n"));
var_dump(IntlChar::isJavaIDStart("\u{2603}"));
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

- [IntlChar::isIDStart()](intlchar.isidstart.md) - Verifica se um ponto de código é permissível como o primeiro caractere em um identificador
- [IntlChar::isJavaIDPart()](intlchar.isjavaidpart.md) - Verifica se um ponto de código é permissível em um identificador Java
- [IntlChar::isalpha()](intlchar.isalpha.md) - Verifica se um ponto de código é uma letra

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
