# Trunca o fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/streamwrapper.stream-truncate.php

---

# streamWrapper::stream\_truncate

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

streamWrapper::stream\_truncate — Trunca o fluxo

### Descrição

public function **streamWrapper::stream\_truncate**([int](language.types.integer.md) `$new_size`): [bool](language.types.boolean.md)

Irá responder ao truncamento, isto é, através da função [ftruncate()](function.ftruncate.md).

### Parâmetros

`new_size`
:   O novo tamanho.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ftruncate()](function.ftruncate.md) - Trunca um arquivo a um tamanho especificado

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
