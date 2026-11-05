# Cria um objeto observador EvPeriodic associado à instância atual do
  laço de eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evloop.periodic.php

---

# EvLoop::periodic

(PECL ev >= 0.2.0)

EvLoop::periodic — Cria um objeto observador EvPeriodic associado à instância atual do
laço de eventos

### Descrição

final
public
function **EvLoop::periodic**(  
    
[float](language.types.float.md) `$offset`
,  
    
[float](language.types.float.md) `$interval`
,  
    
[callable](language.types.callable.md) `$callback`
,  
    
[mixed](language.types.mixed.md) `$data`
 = **`null`**
,  
    
[int](language.types.integer.md) `$priority`
 = 0
  
): [EvPeriodic](class.evperiodic.md)

Cria um objeto observador EvPeriodic associado à instância atual do
laço de eventos.

### Parâmetros

Todos os parâmetros têm o mesmo significado que no método
[EvPeriodic::\_\_construct()](evperiodic.construct.md).

### Valor Retornado

Retorna um objeto EvPeriodic em caso de sucesso.

### Veja também

- [EvPeriodic::\_\_construct()](evperiodic.construct.md) - Constrói objeto observador EvPeriodic

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
