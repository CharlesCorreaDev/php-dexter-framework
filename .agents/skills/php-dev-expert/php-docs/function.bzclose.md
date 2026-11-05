# Fecha um ponteiro de arquivo bzip2

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.bzclose.php

---

# bzclose

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

bzclose — Fecha um ponteiro de arquivo bzip2

### Descrição

function **bzclose**([resource](language.types.resource.md) `$bz`): [bool](language.types.boolean.md)

Fecha o dado ponteiro de arquivo bzip2.

### Parâmetros

`bz`
:   O ponteiro de arquivo. Ele precisa ser válido e precisa apontar para um arquivo
    devidamente aberto com sucesso por [bzopen()](function.bzopen.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [bzopen()](function.bzopen.md) - Abre um arquivo comprimido com bzip2

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
