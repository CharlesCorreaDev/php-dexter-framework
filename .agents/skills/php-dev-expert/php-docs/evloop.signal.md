# Cria um objeto observador EvSignal associado à instância atual do
  laço de eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evloop.signal.php

---

# EvLoop::signal

(PECL ev >= 0.2.0)

EvLoop::signal — Cria um objeto observador EvSignal associado à instância atual do
laço de eventos

### Descrição

final
public
function **EvLoop::signal**(  
    
[int](language.types.integer.md) `$signum`
,  
    
[callable](language.types.callable.md) `$callback`
,  
    
[mixed](language.types.mixed.md) `$data`
 = **`null`**
,  
    
[int](language.types.integer.md) `$priority`
 = 0
  
): [EvSignal](class.evsignal.md)

Cria um objeto observador EvSignal associado à instância atual do
laço de eventos.

### Parâmetros

Todos os parâmetros têm o mesmo significado que no método
[EvSignal::\_\_construct()](evsignal.construct.md).

### Valor Retornado

Retorna um objeto EvSignal em caso de sucesso.

### Veja também

- [EvSignal::\_\_construct()](evsignal.construct.md) - Constrói objeto observador EvSignal

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
