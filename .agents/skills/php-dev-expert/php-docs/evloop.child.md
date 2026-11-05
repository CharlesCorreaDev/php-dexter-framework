# Cria o objeto EvChild associado ao laço de eventos atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evloop.child.php

---

# EvLoop::child

(PECL ev >= 0.2.0)

EvLoop::child — Cria o objeto EvChild associado ao laço de eventos atual

### Descrição

final
public
function **EvLoop::child**(  
    
[string](language.types.string.md) `$pid`
,  
    
[string](language.types.string.md) `$trace`
,  
    
[string](language.types.string.md) `$callback`
,  
    
[string](language.types.string.md) `$data`
 = ?,  
    
[string](language.types.string.md) `$priority`
 = ?  
): [EvChild](class.evchild.md)

Cria o objeto EvChild associado ao laço de eventos atual.

### Parâmetros

Todos os parâmetros têm o mesmo significado que no método
[EvChild::\_\_construct()](evchild.construct.md)

### Valor Retornado

Retorna um objeto EvChild em caso de sucesso.

### Veja também

- [EvChild::\_\_construct()](evchild.construct.md) - Constrói o objeto observador EvChild

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
