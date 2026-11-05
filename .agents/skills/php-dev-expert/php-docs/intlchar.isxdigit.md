# Verifica se um ponto de código é um dígito hexadecimal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.isxdigit.php

---

# IntlChar::isxdigit

(PHP 7, PHP 8)

IntlChar::isxdigit — Verifica se um ponto de código é um dígito hexadecimal

### Descrição

public static function **IntlChar::isxdigit**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

Determina se o ponto de código especificado é um dígito hexadecimal.

**`true`** para caracteres com categoria geral "Nd" (números de dígitos decimais) e
também para letras latinas a-f e A-F tanto em ASCII quanto em ASCII de largura completa.
(Isto é, para letras com pontos de código 0041..0046, 0061..0066, FF21..FF26, FF41..FF46.)

É equivalente a `IntlChar::digit($codepoint, 16) >= 0`.

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna **`true`** se
`codepoint` for um caractere hexadecimal, **`false`** se não for. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::isxdigit("A"));
var_dump(IntlChar::isxdigit("1"));
var_dump(IntlChar::isxdigit("\u{2603}"));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(true)
bool(false)
```

### Notas

> **Nota**:
>
> Para restringir a definição de dígitos hexadecimais a apenas caracteres ASCII, use:
>
> ```
> <?php
> $isASCIIHexadecimal = IntlChar::ord($codepoint) <= 0x7F && IntlChar::isxdigit($codepoint);
> ?>
> ```

### Veja também

- [IntlChar::isdigit()](intlchar.isdigit.md) - Verifica se um ponto de código é um caractere de dígito
- [ctype\_xdigit()](function.ctype-xdigit.md) - Verifica se os caracteres representam um dígito hexadecimal

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
