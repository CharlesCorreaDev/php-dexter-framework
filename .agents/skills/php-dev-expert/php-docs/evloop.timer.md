# Cria objeto observador EvTimer associado à instância de laço de evento
  atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evloop.timer.php

---

# EvLoop::timer

(PECL ev >= 0.2.0)

EvLoop::timer — Cria objeto observador EvTimer associado à instância de laço de evento
atual

### Descrição

final
public
function **EvLoop::timer**(  
    
[float](language.types.float.md) `$after`
,  
    
[float](language.types.float.md) `$repeat`
,  
    
[callable](language.types.callable.md) `$callback`
,  
    
[mixed](language.types.mixed.md) `$data`
 = **`null`**
,  
    
[int](language.types.integer.md) `$priority`
 = 0
  
): [EvTimer](class.evtimer.md)

Cria objeto observador EvTimer associado à instância de laço de evento
atual.

### Parâmetros

Todos os parâmetros têm o mesmo significado que no método
[EvTimer::\_\_construct()](evtimer.construct.md)

### Valor Retornado

Retorna um objeto EvTimer em caso de sucesso.

### Veja também

- [EvTimer::\_\_construct()](evtimer.construct.md) - Contrói objeto observador EvTimer

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
