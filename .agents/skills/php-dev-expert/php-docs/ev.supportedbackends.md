# Retorna o conjunto de backends suportados pela configuração atual
  do libev

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ev.supportedbackends.php

---

# Ev::supportedBackends

(PECL ev >= 0.2.0)

Ev::supportedBackends — Retorna o conjunto de backends suportados pela configuração atual
do libev

### Descrição

final
public
static
function **Ev::supportedBackends**(): [int](language.types.integer.md)

Retorna o conjunto de backends suportados pela configuração atual do libev.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma máscara de bits que pode conter
[opções de backend](class.ev.md#ev.constants.watcher-backends)
combinadas com o uso do operador
*OR*
binário.

### Examples

**Exemplo #1 Incorporando laço criado com o backend kqueue no laço padrão**

```
<?php
/*
* Verifica se o kqueue está disponível, mas não é recomendado, e cria um backend
* kqueue para uso com soquetes (que geralmente funcionam com qualquer implementação kqueue).
* Armazena o laço de eventos kqueue/somente-soquete em loop_socket. (Opcionalmente,
* pode-se usar EVFLAG_NOENV também)
*
* Exemplo emprestado de
* http://pod.tst.eu/http://cvs.schmorp.de/libev/ev.pod#Examples_CONTENT-9
*/
$loop        = EvLoop::defaultLoop();
$socket_loop = NULL;
$embed       = NULL;

if (Ev::supportedBackends() & ~Ev::recommendedBackends() & Ev::BACKEND_KQUEUE) {
    if (($socket_loop = new EvLoop(Ev::BACKEND_KQUEUE))) {
        $embed = new EvEmbed($loop);
    }
}

if (!$socket_loop) {
    $socket_loop = $loop;
}

// Agora usa $socket_loop para todos os soquetes e $loop para qualquer outra coisa
?>
```

### Veja também

- [EvEmbed](class.evembed.md)
- [Ev::recommendedBackends()](ev.recommendedbackends.md) - Retorna uma máscara de bits de backends recomendados para a
  plataforma atual
- [Ev::embeddableBackends()](ev.embeddablebackends.md) - Retorna o conjunto de backends que podem ser incorporados em outros laços de eventos
- [Opções de backend](class.ev.md#ev.constants.watcher-backends)
- [Exemplos](ev.examples.md)

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
