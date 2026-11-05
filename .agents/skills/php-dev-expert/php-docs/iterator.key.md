# Retorna a chave do elemento atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/iterator.key.php

---

# Iterator::key

(PHP 5, PHP 7, PHP 8)

Iterator::key — Retorna a chave do elemento atual

### Descrição

public function **Iterator::key**(): [mixed](language.types.mixed.md)

Retorna a chave do elemento atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorta um scalar em caso de sucesso, ou **`null`** em caso de falha.

### Erros/Exceções

Emite **`E_NOTICE`** em caso de falha.

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
