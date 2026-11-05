# Adiciona um servidor de nomes à base DNS

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventdnsbase.addnameserverip.php

---

# EventDnsBase::addNameserverIp

(PECL event >= 1.2.6-beta)

EventDnsBase::addNameserverIp — Adiciona um servidor de nomes à base DNS

### Descrição

public
function **EventDnsBase::addNameserverIp**(
[string](language.types.string.md) `$ip`
): [bool](language.types.boolean.md)

Adiciona um servidor de nomes à base DNS.

### Parâmetros

`ip`
:   A sequência de caracteres do servidor de nomes, seja como um endereço IPv4, um endereço IPv6, um
    endereço IPv4 com uma porta (
    `IPv4:Porta`
    ), ou um endereço IPv6 com uma porta (
    `[IPv6]:Porta`
    ).

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
