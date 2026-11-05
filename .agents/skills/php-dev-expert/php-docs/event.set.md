# Reconfigura o evento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/event.set.php

---

# Event::set

(PECL event >= 1.2.6-beta)

Event::set — Reconfigura o evento

### Descrição

public
function **Event::set**(  
    
[EventBase](class.eventbase.md) `$base`
,  
    
[mixed](language.types.mixed.md) `$fd`
,  
    
[int](language.types.integer.md) `$what`
 = ?,  
    
[callable](language.types.callable.md) `$cb`
 = ?,  
    
[mixed](language.types.mixed.md) `$arg`
 = ?  
): [bool](language.types.boolean.md)

Reconfigura o evento. Note que esta função não invoca o obsoleto
event\_set do libevent. Em vez disso, ela chama event\_assign.

### Parâmetros

`base`
:   A base de eventos para associar o evento.

`fd`
:   Recurso de fluxo, recurso de soquete ou descritor numérico de arquivo. Para eventos de temporizador,
    informe
    **`-1`**.
    Para eventos de sinal passe o número do sinal,
    por exemplo, **`SIGHUP`**.

`what`
:   Consulte
    [opções de Event](event.flags.md).

`cb`
:   A função de retorno do evento.
    Consulte as [funções de retorno de Event](event.callbacks.md).

`arg`
:   Dados personalizados associados ao evento. Eles serão passados ​​para o retorno de chamada
    quando o evento se tornar ativo.

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
