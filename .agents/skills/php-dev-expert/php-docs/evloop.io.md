# Cria objeto observador EvIo associado à instância de laço de evento
  atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evloop.io.php

---

# EvLoop::io

(PECL ev >= 0.2.0)

EvLoop::io — Cria objeto observador EvIo associado à instância de laço de evento
atual

### Descrição

final
public
function **EvLoop::io**(  
    
[mixed](language.types.mixed.md) `$fd`
,  
    
[int](language.types.integer.md) `$events`
,  
    
[callable](language.types.callable.md) `$callback`
,  
    
[mixed](language.types.mixed.md) `$data`
 = **`null`**
,  
    
[int](language.types.integer.md) `$priority`
 = 0
  
): [EvIo](class.evio.md)

Cria objeto observador EvIo associado à instância de laço de evento atual.

### Parâmetros

Todos os parâmetros têm o mesmo significado que no método
[EvIo::\_\_construct()](evio.construct.md).

### Valor Retornado

Retorna um objeto EvIo em caso de sucesso.

### Veja também

- [EvIo::\_\_construct()](evio.construct.md) - Constrói objeto observador EvIo

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
