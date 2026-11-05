# Verifica se um ponto de código é uma letra com grafia mista

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.istitle.php

---

# IntlChar::istitle

(PHP 7, PHP 8)

IntlChar::istitle — Verifica se um ponto de código é uma letra com grafia mista

### Descrição

public static function **IntlChar::istitle**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

Determina se o ponto de código especificado é uma letra com grafia de título (um só caractere Unicode com dois glifos combinados, o primeiro maiúsculo e o segundo minúsculo, presente em algumas línguas como grego e croata).

**`true`** para a categoria geral "Lt" (letra com grafia de título).

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna **`true`** se
`codepoint` for uma letra com grafia de título, **`false`** se não for. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
// Latin Capital Letter Dz with Caron U+01C4
var_dump(IntlChar::istitle("Ǆ"));
// Latin Capital Letter D with Small Letter Z with Caron U+01C5
var_dump(IntlChar::istitle("ǅ"));
// Latin Small Letter Dz with Caron U+01C6
var_dump(IntlChar::istitle("ǆ"));

// Greek Capital Letter Alpha with Prosgegrammeni U+1FBC
var_dump(IntlChar::istitle("ᾼ"));
// Greek Small Letter Alpha with Ypogegrammeni U+1FB3
var_dump(IntlChar::istitle("ᾳ"));
// Greek Capital Letter Alpha U+0391
var_dump(IntlChar::istitle("Α"));
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
bool(false)
bool(true)
bool(false)
bool(false)
```

### Veja também

- [IntlChar::isupper()](intlchar.isupper.md) - Verifica se um ponto de código tem a categoria geral "Lu" (letra maiúscula)
- [IntlChar::islower()](intlchar.islower.md) - Verifica se um ponto de código é uma letra minúscula
- [IntlChar::totitle()](intlchar.totitle.md) - Transforma o caractere Unicode em letra de título

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
