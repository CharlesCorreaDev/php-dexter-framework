# Cria uma instância de um observador EvChild parado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evchild.createstopped.php

---

# EvChild::createStopped

(PECL ev >= 0.2.0)

EvChild::createStopped — Cria uma instância de um observador EvChild parado

### Descrição

final
public
static
function **EvChild::createStopped**(  
    
[int](language.types.integer.md) `$pid`
,  
    
[bool](language.types.boolean.md) `$trace`
,  
    
[callable](language.types.callable.md) `$callback`
,  
    
[mixed](language.types.mixed.md) `$data`
 = ?,  
    
[int](language.types.integer.md) `$priority`
 = ?  
): [object](language.types.object.md)

O mesmo que
[EvChild::\_\_construct()](evchild.construct.md),
mas não inicia o observador automaticamente.

### Parâmetros

`pid`
:   O mesmo que para
    [EvChild::\_\_construct()](evchild.construct.md)

`trace`
:   O mesmo que para
    [EvChild::\_\_construct()](evchild.construct.md)

`callback`
:   Consulte [funções de
    retorno observadoras](ev.watcher-callbacks.md).

`data`
:   Dados personalizados associados com o observador.

`priority`
:   [Prioridade de observadores](class.ev.md#ev.constants.watcher-pri).

### Valor Retornado

### Veja também

- [EvChild::\_\_construct()](evchild.construct.md) - Constrói o objeto observador EvChild
- [EvLoop::child()](evloop.child.md) - Cria o objeto EvChild associado ao laço de eventos atual

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
