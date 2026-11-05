# Constrói o objeto de laço de eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evloop.construct.php

---

# EvLoop::\_\_construct

(PECL ev >= 0.2.0)

EvLoop::\_\_construct — Constrói o objeto de laço de eventos

### Descrição

public
function **EvLoop::\_\_construct**(  
    
[int](language.types.integer.md) `$flags`
 = ?,  
    
[mixed](language.types.mixed.md) `$data`
 = NULL
,  
    
[float](language.types.float.md) `$io_interval`
 = 0.0
,  
    
[float](language.types.float.md) `$timeout_interval`
 = 0.0
  
)

Constrói o objeto de laço de eventos.

### Parâmetros

`flags`
:   Uma das
    [opções de laço de evento](class.ev.md#ev.constants.loop-flags).

`data`
:   Dados personalizados associados ao laço.

`io_interval`
:   Consulte
    [io\_interval](class.evloop.md#evloop.props.io-interval).

`timeout_interval`
:   Consulte
    [timeout\_interval](class.evloop.md#evloop.props.timeout-interval).

### Veja também

- [EvLoop::defaultLoop()](evloop.defaultloop.md) - Retorna ou cria o laço de eventos padrão

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
