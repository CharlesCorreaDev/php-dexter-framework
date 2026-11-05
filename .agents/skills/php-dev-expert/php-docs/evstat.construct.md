# Contrói objeto observador EvStat

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evstat.construct.php

---

# EvStat::\_\_construct

(PECL ev >= 0.2.0)

EvStat::\_\_construct — Contrói objeto observador EvStat

### Descrição

public
function **EvStat::\_\_construct**(  
    
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
  
)

Contrói objeto observador EvStat e o inicia automaticamente.

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

### Examples

**Exemplo #1 Monitora alterações em /var/log/messages**

```
<?php

// Usa intervalo de atualização de 10 segundos.
$w = new EvStat("/var/log/messages", 10, function ($w) {
    echo "/var/log/messages alterado\n";

    $attr = $w->attr();

    if ($attr['nlink']) {
        printf("Tamanho atual: %ld\n", $attr['size']);
        printf("Horário de acesso: %ld\n", $attr['atime']);
        printf("Horário de modificação: %ld\n", $attr['mtime']);
    } else {
        fprintf(STDERR, "arquivo `messages` inexistente!");
        $w->stop();
    }
});

?>
```

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
