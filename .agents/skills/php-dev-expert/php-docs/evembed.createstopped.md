# Cria objeto observador EvEmbed parado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evembed.createstopped.php

---

# EvEmbed::createStopped

(PECL ev >= 0.2.0)

EvEmbed::createStopped — Cria objeto observador EvEmbed parado

### Descrição

final
public
static
function **EvEmbed::createStopped**(  
    
[object](language.types.object.md) `$other`
,  
    
[callable](language.types.callable.md) `$callback`
 = ?,  
    
[mixed](language.types.mixed.md) `$data`
 = ?,  
    
[int](language.types.integer.md) `$priority`
 = ?  
): [void](language.types.void.md)

O mesmo que
[EvEmbed::\_\_construct()](evembed.construct.md)
mas não inicia o observador automaticamente.

### Parâmetros

`other`
:   O mesmo que para
    [EvEmbed::\_\_construct()](evembed.construct.md).

`callback`
:   Consulte [funções
    de retorno observadoras](ev.watcher-callbacks.md).

`data`
:   Dados personalizados associados com o observador.

`priority`
:   [Prioridade de observadores](class.ev.md#ev.constants.watcher-pri).

### Valor Retornado

Retorna o objeto EvEmbed parado em caso de sucesso.

### Veja também

- [EvEmbed::\_\_construct()](evembed.construct.md) - Constrói o objeto EvEmbed
- [Ev::embeddableBackends()](ev.embeddablebackends.md) - Retorna o conjunto de backends que podem ser incorporados em outros laços de eventos

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
