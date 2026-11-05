# Escreve dados em fd com opção de truncamento no comprimento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dio-write.php

---

# dio\_write

(PHP 4 >= 4.2.0, PHP 5 < 5.1.0)

dio\_write — 
Escreve dados em fd com opção de truncamento no comprimento

### Descrição

function **dio\_write**([resource](language.types.resource.md) `$fd`, [string](language.types.string.md) `$data`, [int](language.types.integer.md) `$len` = 0): [int](language.types.integer.md)

A função **dio\_write()** escreve até `len`
bytes de `data` para o arquivo `fd`.

### Parâmetros

`fd`
:   O descritor de arquivo retornado por [dio\_open()](function.dio-open.md).

`data`
:   Os dados a serem escritos.

`len`
:   O comprimento dos dados a serem escritos em bytes. Se não especificado, a
    função escreve todos os dados no arquivo especificado.

### Valor Retornado

Retorna o número de bytes escritos em `fd`.

### Veja também

- [dio\_read()](function.dio-read.md) - Lê bytes de um descritor de arquivo

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
