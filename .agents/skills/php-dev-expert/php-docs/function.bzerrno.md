# Retorna um número de erro da bzip2

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.bzerrno.php

---

# bzerrno

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

bzerrno — Retorna um número de erro da bzip2

### Descrição

function **bzerrno**([resource](language.types.resource.md) `$bz`): [int](language.types.integer.md)

Retorna o número do erro de qualquer erro da bzip2 retornado pelo ponteiro de
arquivo fornecido.

### Parâmetros

`bz`
:   O ponteiro do arquivo. Deve ser válido e apontar para um arquivo aberto
    com sucesso por [bzopen()](function.bzopen.md).

### Valor Retornado

Retorna o número do erro como um número inteiro.

### Veja também

- [bzerror()](function.bzerror.md) - Retorna o número e string de erro do bzip2 em um array
- [bzerrstr()](function.bzerrstr.md) - Retorna a string de erro do bzip2

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
