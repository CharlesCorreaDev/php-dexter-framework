# Define opções de soquete

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventutil.setsocketoption.php

---

# EventUtil::setSocketOption

(PECL event >= 1.6.0)

EventUtil::setSocketOption — Define opções de soquete

### Descrição

public
static
function **EventUtil::setSocketOption**(  
    
[mixed](language.types.mixed.md) `$socket`
,  
    
[int](language.types.integer.md) `$level`
,  
    
[int](language.types.integer.md) `$optname`
,  
    
[mixed](language.types.mixed.md) `$optval`
  
): [bool](language.types.boolean.md)

Define opções de soquete.

### Parâmetros

`socket`
:   Recurso de soquete, fluxo ou descritor numérico de arquivo associado ao
    soquete.

`level`
:   Uma das constantes
    `EventUtil::SOL_*`.
    Especifica o nível de protocolo no qual a opção reside. Por
    exemplo, para recuperar opções no nível de soquete, um
    parâmetro `level`
    de
    **`EventUtil::SOL_SOCKET`**
    seria usado. Outros níveis, como TCP, podem ser usados ​​especificando o
    número de protocolo desse nível. Números de protocolo podem ser encontrados usando
    a função
    [getprotobyname()](function.getprotobyname.md).
    Consulte
    [constantes EventUtil](class.eventutil.md#eventutil.constants).

`optname`
:   Nome da opção (tipo). Tem o mesmo significado que o parâmetro correspondente da
    função [socket\_get\_option()](function.socket-get-option.md).
    Consulte as
    [constantes EventUtil](class.eventutil.md#eventutil.constants).

`optval`
:   Aceita os mesmos valores que o parâmetro
    `optval`
    da
    função
    [socket\_get\_option()](function.socket-get-option.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [socket\_get\_option()](function.socket-get-option.md) - Obtém opções para o soquete
- [socket\_set\_option()](function.socket-set-option.md) - Define opções para o soquete

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
