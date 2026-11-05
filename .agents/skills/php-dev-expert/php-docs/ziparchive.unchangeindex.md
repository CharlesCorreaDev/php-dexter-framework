# Reverte todas as alterações feitas a uma entrada no índice fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.unchangeindex.php

---

# ZipArchive::unchangeIndex

(PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.1.0)

ZipArchive::unchangeIndex — Reverte todas as alterações feitas a uma entrada no índice fornecido

### Descrição

public function **ZipArchive::unchangeIndex**([int](language.types.integer.md) `$index`): [bool](language.types.boolean.md)

Reverter todas as alterações feitas a uma entrada no índice fornecido.

### Parâmetros

`index`
:   Índice da entrada.

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
