# Obtém o caractere "espelho" para um ponto de código

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.charmirror.php

---

# IntlChar::charMirror

(PHP 7, PHP 8)

IntlChar::charMirror — Obtém o caractere "espelho" para um ponto de código

### Descrição

public static function **IntlChar::charMirror**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [int](language.types.integer.md)|[string](language.types.string.md)|[null](language.types.null.md)

Mapeia o caractere especificado para um caractere "espelho".

Para caracteres com a propriedade *Bidi\_Mirrored* (bidirecional espelhado), as implementações algumas vezes precisam de um mapeamento simples para outro
caractere Unicode (ponto de código) de forma que o glifo padrão possa servir como espelho do glifo padrão do caractere
especificado. Isto é útil para conversão de texto de páginas de código com ordenamento visual, e para telas
sem capacidades de seleção de glifos.

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna outro ponto de código Unicode que possa servir como substituto espelho, ou o parâmetro `codepoint`
em si, se não houver tal mapeamento ou se `codepoint` não tiver a propriedade
*Bidi\_Mirrored*.

O tipo do retorno é [int](language.types.integer.md), a menos que o ponto de código tenha sido passado como uma [string](language.types.string.md) UTF-8, caso em que uma [string](language.types.string.md) é retornada. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::charMirror("A"));
var_dump(IntlChar::charMirror("<"));
var_dump(IntlChar::charMirror("("));
?>
```

O exemplo acima produzirá:

```
string(1) "A"
string(1) ">"
string(2) ")"
```

### Veja também

- [IntlChar::isMirrored()](intlchar.ismirrored.md) - Verifica se um ponto de código tem a propriedade Bidi\_Mirrored
- **`IntlChar::PROPERTY_BIDI_MIRRORED`**

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
