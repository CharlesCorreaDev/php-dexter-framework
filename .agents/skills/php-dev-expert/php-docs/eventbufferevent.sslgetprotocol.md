# Retorna o nome do protocolo usado para a conexão SSL atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbufferevent.sslgetprotocol.php

---

# EventBufferEvent::sslGetProtocol

(PECL event >= 1.10.0)

EventBufferEvent::sslGetProtocol — Retorna o nome do protocolo usado para a conexão SSL atual

### Descrição

public
function **EventBufferEvent::sslGetProtocol**(): [string](language.types.string.md)

Retorna o nome do protocolo usado para a conexão SSL atual.

> **Nota**:
>
> Esta função está disponível somente se
> `Event`
> for compilado com suporte OpenSSL.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o nome do protocolo usado para a conexão SSL atual.

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
