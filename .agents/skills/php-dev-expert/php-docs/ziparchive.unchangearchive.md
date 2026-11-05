# Reverte todas as alterações globais feitas no arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.unchangearchive.php

---

# ZipArchive::unchangeArchive

(PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.1.0)

ZipArchive::unchangeArchive — Reverte todas as alterações globais feitas no arquivo

### Descrição

public function **ZipArchive::unchangeArchive**(): [bool](language.types.boolean.md)

Reverte todas as alterações globais feitas no arquivo. Por enquanto, isso
só reverte alterações no comentário do arquivo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

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
