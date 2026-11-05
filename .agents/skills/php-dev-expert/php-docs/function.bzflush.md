# Sem efeitos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.bzflush.php

---

# bzflush

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

bzflush — Sem efeitos

### Descrição

function **bzflush**([resource](language.types.resource.md) `$bz`): [bool](language.types.boolean.md)

Força a escrita de todos os dados do bzip2 que estão em buffer para o
ponteiro de arquivo `bz`,
mas é implementado como uma função vazia na libbz2, e portanto não gera efeitos.

### Parâmetros

`bz`
:   O ponteiro do arquivo. Ele precisa ser válido e precisa apontar para um arquivo
    aberto com sucesso por [bzopen()](function.bzopen.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [bzread()](function.bzread.md) - Leitura binária segura de arquivo bzip2
- [bzwrite()](function.bzwrite.md) - Gravação binária segura em arquivo bzip2

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
