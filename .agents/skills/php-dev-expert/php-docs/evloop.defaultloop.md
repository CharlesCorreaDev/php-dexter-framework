# Retorna ou cria o laço de eventos padrão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evloop.defaultloop.php

---

# EvLoop::defaultLoop

(PECL ev >= 0.2.0)

EvLoop::defaultLoop — Retorna ou cria o laço de eventos padrão

### Descrição

public
static
function **EvLoop::defaultLoop**(  
    
[int](language.types.integer.md) `$flags`
 = Ev::FLAG\_AUTO
,  
    
[mixed](language.types.mixed.md) `$data`
 = NULL
,  
    
[float](language.types.float.md) `$io_interval`
 = 0.
,  
    
[float](language.types.float.md) `$timeout_interval`
 = 0.
  
): [EvLoop](class.evloop.md)

Se o laço de eventos padrão não for criado,
**EvLoop::defaultLoop()**
o cria com os parâmetros especificados. Caso contrário, ele apenas retorna o
objeto que representa a instância criada anteriormente, ignorando todos os
parâmetros.

### Parâmetros

`flags`
:   Uma das
    [opções de laço de evento](class.ev.md#ev.constants.loop-flags)

`data`
:   Dados personalizados associados ao laço.

`io_collect_interval`
:   Consulte
    [io\_interval](class.evloop.md#evloop.props.io-interval).

`timeout_collect_interval`
:   Consulte
    [timeout\_interval](class.evloop.md#evloop.props.timeout-interval).

### Valor Retornado

Retorna um objeto EvLoop em caso de sucesso.

### Veja também

- [EvLoop::\_\_construct()](evloop.construct.md) - Constrói o objeto de laço de eventos

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
