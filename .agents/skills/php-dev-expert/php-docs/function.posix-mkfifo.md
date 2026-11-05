# Cria um arquivo especial FIFO (um pipe nomeado)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-mkfifo.php

---

# posix\_mkfifo

(PHP 4, PHP 5, PHP 7, PHP 8)

posix\_mkfifo — Cria um arquivo especial FIFO (um pipe nomeado)

### Descrição

function **posix\_mkfifo**([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$permissions`): [bool](language.types.boolean.md)

**posix\_mkfifo()** cria um arquivo
`FIFO` especial que existe no sistema de arquivos e atua como
um terminal de comunicação bidirecional para processos.

### Parâmetros

`filename`
:   Caminho para o arquivo `FIFO`.

`permissions`
:   O segundo parâmetro `permissions` representa o modo das permissões do arquivo
    e deve ser fornecido em notação octal (por exemplo, 0644). A permissão do
    `FIFO` recém-criado também depende da configuração da
    [umask()](function.umask.md) atual. As permissões do arquivo criado são
    (modo & ~umask).

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
