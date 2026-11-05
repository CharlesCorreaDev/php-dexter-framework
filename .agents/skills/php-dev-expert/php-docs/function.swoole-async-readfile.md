# Lê um arquivo de forma assíncrona

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.swoole-async-readfile.php

---

# swoole\_async\_readfile

(PECL swoole >= 1.9.0)

swoole\_async\_readfile — Lê um arquivo de forma assíncrona

### Descrição

function **swoole\_async\_readfile**([string](language.types.string.md) `$filename`, [callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

### Parâmetros

`filename`
:   O nome do arquivo sendo lido.

`callback`
:   function callback([string](language.types.string.md) `$filename`, [string](language.types.string.md) `$content`): [mixed](language.types.mixed.md)

    `filename`
    :   O nome do arquivo.

    `content`
    :   O conteúdo lido do arquivo.

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
