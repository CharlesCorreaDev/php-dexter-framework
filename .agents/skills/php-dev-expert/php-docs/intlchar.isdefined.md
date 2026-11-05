# Verifica se o ponto de código está definido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.isdefined.php

---

# IntlChar::isdefined

(PHP 7, PHP 8)

IntlChar::isdefined — Verifica se o ponto de código está definido

### Descrição

public static function **IntlChar::isdefined**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

Determina se o ponto de código especificado está "definido", o que normalmente significa que está atribuído a um caractere.

**`true`** para categorias gerais diferentes de "Cn" (outros, não atribuídos).

> **Nota**:
>
> Observe que pontos de código que não são caracteres (ex.: U+FDD0) não estão "definidos" (eles são Cn), mas os pontos de código substitutos estão "definidos" (Cs).

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna **`true`** se
`codepoint` for um caractere definido, **`false`** se não for. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::isdefined("A"));
var_dump(IntlChar::isdefined(" "));
var_dump(IntlChar::isdefined("\u{FDD0}"));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(true)
bool(false)
```

### Veja também

- [IntlChar::isdigit()](intlchar.isdigit.md) - Verifica se um ponto de código é um caractere de dígito
- [IntlChar::isalpha()](intlchar.isalpha.md) - Verifica se um ponto de código é uma letra
- [IntlChar::isalnum()](intlchar.isalnum.md) - Verifica se um ponto de código é um caractere alfanumérico
- [IntlChar::isupper()](intlchar.isupper.md) - Verifica se um ponto de código tem a categoria geral "Lu" (letra maiúscula)
- [IntlChar::islower()](intlchar.islower.md) - Verifica se um ponto de código é uma letra minúscula
- [IntlChar::istitle()](intlchar.istitle.md) - Verifica se um ponto de código é uma letra com grafia mista

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
