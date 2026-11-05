# Reverte todas as alterações feitas a uma entrada com o nome fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.unchangename.php

---

# ZipArchive::unchangeName

(PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.5.0)

ZipArchive::unchangeName — Reverte todas as alterações feitas a uma entrada com o nome fornecido

### Descrição

public function **ZipArchive::unchangeName**([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

Reverte todas as alterações feitas a uma entrada.

### Parâmetros

`name`
:   Nome da entrada.

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
