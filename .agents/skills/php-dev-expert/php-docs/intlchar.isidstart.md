# Verifica se um ponto de código é permissível como o primeiro caractere em um identificador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.isidstart.php

---

# IntlChar::isIDStart

(PHP 7, PHP 8)

IntlChar::isIDStart — Verifica se um ponto de código é permissível como o primeiro caractere em um identificador

### Descrição

public static function **IntlChar::isIDStart**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

Determina se o caractere especificado é permissível como o primeiro caractere em um identificador de acordo com o Unicode (O Padrão Unicode, Versão 3.0, capítulo 5.16, Identificadores).

**`true`** para caracteres com categoria geral "L" (letras) e "Nl" (letras números).

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna **`true`** se
`codepoint` puder iniciar um identificador, **`false`** se não puder. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::isIDStart("A"));
var_dump(IntlChar::isIDStart("$"));
var_dump(IntlChar::isIDStart("\n"));
var_dump(IntlChar::isIDStart("\u{2603}"));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
bool(false)
bool(false)
```

### Veja também

- [IntlChar::isalpha()](intlchar.isalpha.md) - Verifica se um ponto de código é uma letra
- [IntlChar::isIDPart()](intlchar.isidpart.md) - Verifica se um ponto de código é permissível em um identificador
- **`IntlChar::PROPERTY_ID_START`**

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
