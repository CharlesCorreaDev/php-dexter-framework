# Obtém o caractere de par de abertura/fechamento para um ponto de código

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.getbidipairedbracket.php

---

# IntlChar::getBidiPairedBracket

(PHP 7, PHP 8)

IntlChar::getBidiPairedBracket — Obtém o caractere de par de abertura/fechamento para um ponto de código

### Descrição

public static function **IntlChar::getBidiPairedBracket**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [int](language.types.integer.md)|[string](language.types.string.md)|[null](language.types.null.md)

Mapeia o caractere especificado para o seu par de abertura/fechamento.

Para `IntlChar::PROPERTY_BIDI_PAIRED_BRACKET_TYPE !== IntlChar::BPT_NONE`, isso é o mesmo que [IntlChar::charMirror()](intlchar.charmirror.md).
Caso contrário, o próprio `codepoint` é retornado.

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna o ponto de código do caractere de par de abertura/fechamento, ou o próprio `codepoint` se não existir este mapeamento. Retorna
**`null`** em caso de falha.

O tipo do retorno é [int](language.types.integer.md), a menos que o ponto de código tenha sido passado como uma [string](language.types.string.md) UTF-8, caso em que uma [string](language.types.string.md) é retornada. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::getBidiPairedBracket(91));
var_dump(IntlChar::getBidiPairedBracket('['));
?>
```

O exemplo acima produzirá:

```
int(93)
string(1) "]"
```

### Notas

> **Nota**:
>
> Este método está disponível a partir da ICU versão 52.

### Veja também

- [IntlChar::charMirror()](intlchar.charmirror.md) - Obtém o caractere "espelho" para um ponto de código
- **`IntlChar::PROPERTY_BIDI_PAIRED_BRACKET`**
- **`IntlChar::PROPERTY_BIDI_PAIRED_BRACKET_TYPE`**

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
