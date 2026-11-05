# Retorna uma string descrevendo a última tentativa de pesquisa de DNS com falha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbufferevent.getdnserrorstring.php

---

# EventBufferEvent::getDnsErrorString

(PECL event >= 1.2.6-beta)

EventBufferEvent::getDnsErrorString — Retorna uma string descrevendo a última tentativa de pesquisa de DNS com falha

### Descrição

public
function **EventBufferEvent::getDnsErrorString**(): [string](language.types.string.md)

Retorna uma string descrevendo a última tentativa de pesquisa de DNS com falha feita por
[EventBufferEvent::connectHost()](eventbufferevent.connecthost.md),
ou uma string vazia, se nenhum erro de DNS for detectado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string descrevendo o erro de pesquisa de DNS ou uma string vazia para nenhum
erro.

### Veja também

- [EventBufferEvent::connectHost()](eventbufferevent.connecthost.md) - Conecta-se a um nome de host com resolução DNS opcionalmente assíncrona

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
