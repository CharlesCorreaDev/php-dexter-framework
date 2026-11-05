# A classe EventDnsBase

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.eventdnsbase.php

---

# A classe EventDnsBase

(PECL event >= 1.2.6-beta)

## Introdução

Representa a estrutura base de DNS do Libevent. Usada para resolver DNS
assincronamente, analisar arquivos de configuração como resolv.conf etc.

## Resumo da classe

final
class **EventDnsBase**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[OPTION\_SEARCH](class.eventdnsbase.md#eventdnsbase.constants.option-search) = 1;

const
[int](language.types.integer.md)
[OPTION\_NAMESERVERS](class.eventdnsbase.md#eventdnsbase.constants.option-nameservers) = 2;

const
[int](language.types.integer.md)
[OPTION\_MISC](class.eventdnsbase.md#eventdnsbase.constants.option-misc) = 4;

const
[int](language.types.integer.md)
[OPTION\_HOSTSFILE](class.eventdnsbase.md#eventdnsbase.constants.option-hostsfile) = 8;

const
[int](language.types.integer.md)
[OPTIONS\_ALL](class.eventdnsbase.md#eventdnsbase.constants.options-all) = 15;

const
[int](language.types.integer.md)
[DISABLE\_WHEN\_INACTIVE](class.eventdnsbase.md#eventdnsbase.constants.disable-when-inactive) = 32768;

const
[int](language.types.integer.md)
[INITIALIZE\_NAMESERVERS](class.eventdnsbase.md#eventdnsbase.constants.initialize-nameservers) = 1;

const
[int](language.types.integer.md)
[NAMESERVERS\_NO\_DEFAULT](class.eventdnsbase.md#eventdnsbase.constants.nameservers-no-default) = 65536;

/\* Métodos \*/

public
function [\_\_construct](eventdnsbase.construct.md)(
[EventBase](class.eventbase.md) `$base`
, 
[int](language.types.integer.md)|[bool](language.types.boolean.md) `$initialize`
)

public
function [addNameserverIp](eventdnsbase.addnameserverip.md)(
[string](language.types.string.md) `$ip`
): [bool](language.types.boolean.md)

public
function [addSearch](eventdnsbase.addsearch.md)(
[string](language.types.string.md) `$domain`
): [void](language.types.void.md)

public
function [clearSearch](eventdnsbase.clearsearch.md)(): [void](language.types.void.md)

public
function [countNameservers](eventdnsbase.countnameservers.md)(): [int](language.types.integer.md)

public
function [loadHosts](eventdnsbase.loadhosts.md)(
[string](language.types.string.md) `$hosts`
): [bool](language.types.boolean.md)

public
function [parseResolvConf](eventdnsbase.parseresolvconf.md)(
[int](language.types.integer.md) `$flags`
, 
[string](language.types.string.md) `$filename`
): [bool](language.types.boolean.md)

public
function [setOption](eventdnsbase.setoption.md)(
[string](language.types.string.md) `$option`
, 
[string](language.types.string.md) `$value`
): [bool](language.types.boolean.md)

public
function [setSearchNdots](eventdnsbase.setsearchndots.md)(
[int](language.types.integer.md) `$ndots`
): [bool](language.types.boolean.md)

}

## Constantes predefinidas

**`EventDnsBase::OPTION_SEARCH`**
:   Lê os campos de domínio e busca o
    arquivo `resolv.conf`
    e a opção
    `ndots`,
    e usa-os para decidir quais domínios dever ser usados (se existirem)
    na busca por nomes de host que não estão totalmente qualificados.

**`EventDnsBase::OPTION_NAMESERVERS`**
:   Utiliza os servidores de nomes do
    arquivo
    `resolv.conf`.

**`EventDnsBase::OPTION_MISC`**

**`EventDnsBase::OPTION_HOSTSFILE`**
:   Lê uma lista de hosts do
    `/etc/hosts`
    como parte do carregamento do
    arquivo
    `resolv.conf`.

**`EventDnsBase::OPTIONS_ALL`**
:   Utiliza o máximo possível do
    arquivo
    `resolv.conf`.

**`EventDnsBase::DISABLE_WHEN_INACTIVE`**
:   Não impede a saída do laço de eventos libevent quando não houver solicitações de DNS ativas.

**`EventDnsBase::INITIALIZE_NAMESERVERS`**
:   Processa o `resolv.conf`.

**`EventDnsBase::NAMESERVERS_NO_DEFAULT`**
:   Não adiciona o servidor de nomes padrão se não houver servidores de nomes no `resolv.conf`.

## Índice

- [EventDnsBase::addNameserverIp](eventdnsbase.addnameserverip.md) — Adiciona um servidor de nomes à base DNS
- [EventDnsBase::addSearch](eventdnsbase.addsearch.md) — Adiciona um domínio à lista de domínios de pesquisa
- [EventDnsBase::clearSearch](eventdnsbase.clearsearch.md) — Remove todos os sufixos de pesquisa atuais
- [EventDnsBase::\_\_construct](eventdnsbase.construct.md) — Constrói objeto EventDnsBase
- [EventDnsBase::countNameservers](eventdnsbase.countnameservers.md) — Obtém o número de servidores de nomes configurados
- [EventDnsBase::loadHosts](eventdnsbase.loadhosts.md) — Carrega um arquivo hosts (no mesmo formato que /etc/hosts) do arquivo hosts
- [EventDnsBase::parseResolvConf](eventdnsbase.parseresolvconf.md) — Verifica o arquivo formatado em resolv.conf
- [EventDnsBase::setOption](eventdnsbase.setoption.md) — Define o valor de uma opção de configuração
- [EventDnsBase::setSearchNdots](eventdnsbase.setsearchndots.md) — Define o parâmetro 'ndots' para pesquisas

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
