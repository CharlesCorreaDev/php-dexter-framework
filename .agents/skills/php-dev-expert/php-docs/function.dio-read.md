# Lê bytes de um descritor de arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dio-read.php

---

# dio\_read

(PHP 4 >= 4.2.0, PHP 5 < 5.1.0)

dio\_read — Lê bytes de um descritor de arquivo

### Descrição

function **dio\_read**([resource](language.types.resource.md) `$fd`, [int](language.types.integer.md) `$len` = 1024): [string](language.types.string.md)

A função **dio\_read()** lê e retorna
`len` bytes do arquivo com descritor
`fd`.

### Parâmetros

`fd`
:   O descritor de arquivo retornado por [dio\_open()](function.dio-open.md).

`len`
:   O número de bytes a serem lidos. Se não especificado,
    **dio\_read()** lê um bloco de tamanho 1K.

### Valor Retornado

Os bytes lidos de `fd`.

### Veja também

- [dio\_write()](function.dio-write.md) - Escreve dados em fd com opção de truncamento no comprimento

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
