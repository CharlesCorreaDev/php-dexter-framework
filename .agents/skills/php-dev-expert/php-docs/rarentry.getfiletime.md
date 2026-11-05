# Obtém hora da última modificação da entrada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rarentry.getfiletime.php

---

# RarEntry::getFileTime

(PECL rar >= 0.1)

RarEntry::getFileTime — Obtém hora da última modificação da entrada

### Descrição

public function **RarEntry::getFileTime**(): [string](language.types.string.md)

Obtém a hora da última modificação da entrada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a hora da última modificação da entrada como string no formato
`YYYY-MM-DD HH:II:SS` ou **`false`** em caso de erro.

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
