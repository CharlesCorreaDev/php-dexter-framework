# Retorna a string de erro do bzip2

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.bzerrstr.php

---

# bzerrstr

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

bzerrstr — Retorna a string de erro do bzip2

### Descrição

function **bzerrstr**([resource](language.types.resource.md) `$bz`): [string](language.types.string.md)

Obtém a string de erro de um erro da bzip2 retornado para um dado ponteiro
de arquivo.

### Parâmetros

`bz`
:   O ponteiro do arquivo. Ele precisa ser válido e precisa apontar para um
    arquivo aberto com sucesso pela [bzopen()](function.bzopen.md).

### Valor Retornado

Retorna uma string contendo a mensagem de erro.

### Veja também

- [bzerrno()](function.bzerrno.md) - Retorna um número de erro da bzip2
- [bzerror()](function.bzerror.md) - Retorna o número e string de erro do bzip2 em um array

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
