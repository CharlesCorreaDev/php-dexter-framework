# Carrega um arquivo hosts (no mesmo formato que /etc/hosts) do arquivo hosts

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventdnsbase.loadhosts.php

---

# EventDnsBase::loadHosts

(PECL event >= 1.2.6-beta)

EventDnsBase::loadHosts — Carrega um arquivo hosts (no mesmo formato que /etc/hosts) do arquivo hosts

### Descrição

public
function **EventDnsBase::loadHosts**(
[string](language.types.string.md) `$hosts`
): [bool](language.types.boolean.md)

Carrega um arquivo hosts (no mesmo formato que
`/etc/hosts`)
do arquivo hosts.

### Parâmetros

`hosts`
:   Caminho para o arquivo hosts.

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
