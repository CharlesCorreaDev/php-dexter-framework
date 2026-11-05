# Cria objeto observador EvStat associado à instância de laço de evento
  atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evloop.stat.php

---

# EvLoop::stat

(PECL ev >= 0.2.0)

EvLoop::stat — Cria objeto observador EvStat associado à instância de laço de evento
atual

### Descrição

final
public
function **EvLoop::stat**(  
    
[string](language.types.string.md) `$path`
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
  
): [EvStat](class.evstat.md)

Cria objeto observador EvStat associado à instância de laço de evento
atual.

### Parâmetros

Todos os parâmetros têm o mesmo significado que no método
[EvSignal::\_\_construct()](evsignal.construct.md)

### Valor Retornado

Retorna um objeto EvStat em caso de sucesso.

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
