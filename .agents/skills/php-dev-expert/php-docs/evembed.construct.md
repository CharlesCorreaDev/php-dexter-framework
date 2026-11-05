# Constrói o objeto EvEmbed

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evembed.construct.php

---

# EvEmbed::\_\_construct

(PECL ev >= 0.2.0)

EvEmbed::\_\_construct — Constrói o objeto EvEmbed

### Descrição

public
function **EvEmbed::\_\_construct**(  
    
[object](language.types.object.md) `$other`
,  
    
[callable](language.types.callable.md) `$callback`
 = ?,  
    
[mixed](language.types.mixed.md) `$data`
 = ?,  
    
[int](language.types.integer.md) `$priority`
 = ?  
)

Este é um tipo de observador bastante avançado que permite incorporar um laço
de eventos em outro (atualmente, apenas eventos de E/S são suportados no laço incorporado;
outros tipos de observadores podem ser manipulados de forma atrasada ou incorreta
e não devem ser usados).

Consulte
[» a
documentção da libev](http://pod.tst.eu/http://cvs.schmorp.de/libev/ev.pod#code_ev_embed_code_when_one_backend_)
para detalhes.

Este observador é mais útil em
sistemas *BSD*
sem
`kqueue` funcional
para que ainda seja possível manipular um número grande de soquetes. Veja o exemplo abaixo.

### Parâmetros

`other`
:   Instância de
    [EvLoop](class.evloop.md).
    O laço a ser incorporado, este laço precisa ser incorporável
    (consulte
    [Ev::embeddableBackends()](ev.embeddablebackends.md)).

`callback`
:   Consulte [funções
    de retorno observadoras](ev.watcher-callbacks.md).

`data`
:   Dados personalizados associados com o observador.

`priority`
:   [Prioridade de observadores](class.ev.md#ev.constants.watcher-pri).

### Examples

**Exemplo #1 Incorporando laço criado com o backend kqueue no laço padrão**

```
<?php
/*
* Verifica se o kqueue está disponível, mas não é recomendado, e cria um backend kqueue
* para uso com soquetes (que geralmente funcionam com qualquer implementação kqueue).
* Armazena o laço de eventos kqueue/somente-soquete em loop_soquete. (Opcionalmente,
* pode-se usar EVFLAG_NOENV também)
*
* Exemplo emprestado de
* http://pod.tst.eu/http://cvs.schmorp.de/libev/ev.pod#Examples_CONTENT-9
*/
$loop        = EvLoop::defaultLoop();
$soquete_loop = NULL;
$embed       = NULL;

if (Ev::supportedBackends() & ~Ev::recommendedBackends() & Ev::BACKEND_KQUEUE) {
    if (($soquete_loop = new EvLoop(Ev::BACKEND_KQUEUE))) {
        $embed = new EvEmbed($loop);
    }
}

if (!$soquete_loop) {
    $soquete_loop = $loop;
}

// Agora usa $soquete_loop para todos os soquetes e $loop para qualquer outra coisa
?>
```

### Veja também

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
