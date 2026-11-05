# Verifica se um ponto de código é um caractere base

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.isbase.php

---

# IntlChar::isbase

(PHP 7, PHP 8)

IntlChar::isbase — Verifica se um ponto de código é um caractere base

### Descrição

public static function **IntlChar::isbase**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

Determina se o ponto de código especificado é um caractere base. **`true`** para categoria geral "L" (letras),
"N" (números), "Mc" (marcas de combinação de espaçamento) e "Me" (marcas de envoltório).

> **Nota**:
>
> Isto é diferente da definição Unicode no capítulo 3.5, cláusula de conformidade clause D13, que define que caracteres base
> são todos os caracteres (não Cn) que não combinam graficamente com os caracteres precedentes (M) e que não são de
> controle (Cc) nem de formatação (Cf).

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna **`true`** se
`codepoint` for um caractere base, **`false`** se não for. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::isbase("A"));
var_dump(IntlChar::isbase("1"));
var_dump(IntlChar::isbase("\u{2603}"));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(true)
bool(false)
```

### Veja também

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
