# Obtém a "idade" do ponto de código

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.charage.php

---

# IntlChar::charAge

(PHP 7, PHP 8)

IntlChar::charAge — Obtém a "idade" do ponto de código

### Descrição

public static function **IntlChar::charAge**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[array](language.types.array.md)

Obtém a "idade" do ponto de código.

A "idade" é a versão Unicode de quando o ponto de código foi primeiramente designado (como um não-caractere para Uso Privado)
ou atribuído a um caractere. Isto pode ser útil para evitar emitir pontos de código para receber processos que não aceitam
novos caracteres.

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

O número da versão Unicode, como um [array](language.types.array.md).
Por exemplo, a versão *1.3.31.2* seria representada como `[1, 3, 31, 2]`.
Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::charage("\u{2603}"));
var_dump(IntlChar::charage("\u{1F576}"));
?>
```

O exemplo acima produzirá:

```
array(4) {
  [0]=>
  int(1)
  [1]=>
  int(1)
  [2]=>
  int(0)
  [3]=>
  int(0)
}
array(4) {
  [0]=>
  int(7)
  [1]=>
  int(0)
  [2]=>
  int(0)
  [3]=>
  int(0)
}
```

### Veja também

- [IntlChar::getUnicodeVersion()](intlchar.getunicodeversion.md) - Obtém a versão do Unicode
- [IntlChar::getIntPropertyMinValue()](intlchar.getintpropertyminvalue.md) - Obtém o valor mínimo para uma propriedade Unicode
- [IntlChar::getIntPropertyValue()](intlchar.getintpropertyvalue.md) - Obtém o valor de uma propriedade Unicode de um ponto de código

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
