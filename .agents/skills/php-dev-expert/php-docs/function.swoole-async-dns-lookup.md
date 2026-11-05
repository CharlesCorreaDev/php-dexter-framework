# Pesquisa de nome de host para IP assíncrona e não bloqueante

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.swoole-async-dns-lookup.php

---

# swoole\_async\_dns\_lookup

(PECL swoole >= 1.9.0)

swoole\_async\_dns\_lookup — Pesquisa de nome de host para IP assíncrona e não bloqueante

### Descrição

function **swoole\_async\_dns\_lookup**([string](language.types.string.md) `$hostname`, [callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

### Parâmetros

`hostname`
:   O nome do host.

`callback`
:   function callback([string](language.types.string.md) `$hostname`, [string](language.types.string.md) `$ip`): [mixed](language.types.mixed.md)

    `hostname`
    :   O nome do host.

    `IP`
    :   O endereço IP.

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
