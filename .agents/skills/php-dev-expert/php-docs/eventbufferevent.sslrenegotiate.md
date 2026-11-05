# Solicita a um evento de buffer que inicie a renegociação SSL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbufferevent.sslrenegotiate.php

---

# EventBufferEvent::sslRenegotiate

(PECL event >= 1.2.6-beta)

EventBufferEvent::sslRenegotiate — Solicita a um evento de buffer que inicie a renegociação SSL

### Descrição

public
function **EventBufferEvent::sslRenegotiate**(): [void](language.types.void.md)

Solicita a um evento de buffer que inicie a renegociação SSL.

**Aviso**

Chamar esta função diz ao SSL para renegociar, e ao evento de buffer
para invocar funções de retorno apropriadas. Este é um tópico avançado; isso deve ser
geralmente evitado a menos que alguém realmente saiba o que faz, especialmente
porque muitas versões de SSL tiveram problemas de segurança conhecidos relacionados à
renegociação.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

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
