# Verifica se a posição atual é válida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/iterator.valid.php

---

# Iterator::valid

(PHP 5, PHP 7, PHP 8)

Iterator::valid — Verifica se a posição atual é válida

### Descrição

public function **Iterator::valid**(): [bool](language.types.boolean.md)

Este método é chamado após [Iterator::rewind()](iterator.rewind.md) e
[Iterator::next()](iterator.next.md) para verificar se a posição atual é
válida.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O valor retornado será convertido para [bool](language.types.boolean.md) e então avaliado.
Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
