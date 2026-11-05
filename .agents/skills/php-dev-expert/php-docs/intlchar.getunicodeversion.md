# Obtém a versão do Unicode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.getunicodeversion.php

---

# IntlChar::getUnicodeVersion

(PHP 7, PHP 8)

IntlChar::getUnicodeVersion — Obtém a versão do Unicode

### Descrição

public static function **IntlChar::getUnicodeVersion**(): [array](language.types.array.md)

Obtém informação sobre a versão do Unicode.

O array é preenchido com a informação de versão do padrão Unicode atualmente usado pela ICU.
Por exemplo, Unicode versão 3.1.1 é representado por um array com os valores `[3, 1, 1, 0]`.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um array contendo o número de versão Unicode.

### Examples

**Exemplo #1 Testando diferentes propriedades**

```
<?php
var_dump(IntlChar::getUnicodeVersion());
?>
```

O exemplo acima produzirá:

```
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

- [IntlChar::charAge()](intlchar.charage.md) - Obtém a "idade" do ponto de código

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
