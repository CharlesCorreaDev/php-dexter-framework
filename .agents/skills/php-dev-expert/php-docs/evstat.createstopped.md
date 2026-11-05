# Cria um objeto observador EvStat parado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evstat.createstopped.php

---

# EvStat::createStopped

(PECL ev >= 0.2.0)

EvStat::createStopped — Cria um objeto observador EvStat parado

### Descrição

final
public
static
function **EvStat::createStopped**(  
    
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
  
): [void](language.types.void.md)

Cria um objeto observador EvStat parado, mas não o reinicia
automaticamente (diferentemente
de
[EvStat::\_\_construct()](evstat.construct.md)).

### Parâmetros

`path`
:   O caminho para aguardar mudanças de status.

`interval`
:   Dica sobre a rapidez com que se espera que uma alteração
    seja detectada e normalmente
    deve ser especificada como
    `0.0` para permitir
    que *libev*
    escolha um valor adequado.

`callback`
:   Consulte
    [funções de retorno observadoras](ev.watcher-callbacks.md).

`data`
:   Dados personalizados associados com o observador.

`priority`
:   [Prioridade de observadores](class.ev.md#ev.constants.watcher-pri).

### Valor Retornado

Retorna um objeto observador EvStat parado em caso de sucesso.

### Veja também

- [EvStat::\_\_construct()](evstat.construct.md) - Contrói objeto observador EvStat
- [EvWatcher::start()](evwatcher.start.md) - Inicia o observador

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
