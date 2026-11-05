# Pesquisa de host assíncrona e não bloqueante para IP.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-async.dnslookup.php

---

# Swoole\Async::dnsLookup

(PECL swoole >= 1.9.0)

Swoole\Async::dnsLookup — Pesquisa de host assíncrona e não bloqueante para IP.

### Descrição

public static function **Swoole\Async::dnsLookup**([string](language.types.string.md) `$hostname`, [callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`hostname`
:   O nome do host.

`callback`
:   function callback([string](language.types.string.md) `$hostname`, [string](language.types.string.md) `$ip`): [mixed](language.types.mixed.md)

    `hostname`
    :   O nome do host.

    `IP`
    :   O endereço IP.

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
