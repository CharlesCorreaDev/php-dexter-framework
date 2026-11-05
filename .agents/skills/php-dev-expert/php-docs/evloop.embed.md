# Cria uma instância do observador EvEmbed associado
  ao objeto EvLoop atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evloop.embed.php

---

# EvLoop::embed

(PECL ev >= 0.2.0)

EvLoop::embed — Cria uma instância do observador EvEmbed associado
ao objeto EvLoop atual

### Descrição

final
public
function **EvLoop::embed**(  
    
[string](language.types.string.md) `$other`
,  
    
[string](language.types.string.md) `$callback`
 = ?,  
    
[string](language.types.string.md) `$data`
 = ?,  
    
[string](language.types.string.md) `$priority`
 = ?  
): [EvEmbed](class.evembed.md)

Cria uma instância do observador
[EvEmbed](class.evembed.md)
associado ao objeto
[EvLoop](class.evloop.md)
atual.

### Parâmetros

Todos os parâmetros têm o mesmo significado
que no método [EvEmbed::\_\_construct()](evembed.construct.md).

### Valor Retornado

Retorna um objeto EvEmbed em caso de sucesso.

### Veja também

- [EvEmbed::\_\_construct()](evembed.construct.md) - Constrói o objeto EvEmbed

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
