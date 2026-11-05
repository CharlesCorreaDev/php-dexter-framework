# Constrói objeto EventHttpConnection

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttpconnection.construct.php

---

# EventHttpConnection::\_\_construct

(PECL event >= 1.2.6-beta)

EventHttpConnection::\_\_construct — Constrói objeto EventHttpConnection

### Descrição

public
function **EventHttpConnection::\_\_construct**(  
    
[EventBase](class.eventbase.md) `$base`
,  
    
[EventDnsBase](class.eventdnsbase.md) `$dns_base`
,  
    
[string](language.types.string.md) `$address`
,  
    
[int](language.types.integer.md) `$port`
,  
    
[EventSslContext](class.eventsslcontext.md) `$ctx`
 = **`null`**
  
)

Constrói objeto EventHttpConnection.

### Parâmetros

`base`
:   Base de evento associada.

`dns_base`
:   Se
    `dns_base`
    for **`null`**, a resolução de nome bloqueará.

`address`
:   O endereço para conexão.

`port`
:   A porta para conexão.

`ctx`
:   Objeto da classe [EventSslContext](class.eventsslcontext.md).
    Habilita OpenSSL.

    > **Nota**:
    >
    > Este parâmetro está disponível somente se
    > `Event`
    > for compilado com suporte OpenSSL e somente com
    > `Libevent
    > 2.1.0-alpha`
    > ou superior.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL event 1.9.0 | Suporte OpenSSL (`ctx`) adicionado. |

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
