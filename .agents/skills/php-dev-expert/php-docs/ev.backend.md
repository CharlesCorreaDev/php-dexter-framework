# Retorna um inteiro descrevendo o backend usado por libev

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ev.backend.php

---

# Ev::backend

(PECL ev >= 0.2.0)

Ev::backend — Retorna um inteiro descrevendo o backend usado por libev

### Descrição

final
public
static
function **Ev::backend**(): [int](language.types.integer.md)

Retorna um inteiro descrevendo o backend usado por
*libev*.
Consulte
[opções de backend](class.ev.md#ev.constants.watcher-backends).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um inteiro (máscara de bits) descrevendo o backend usado
por *libev*.

### Veja também

- [EvEmbed](class.evembed.md)
- [Ev::embeddableBackends()](ev.embeddablebackends.md) - Retorna o conjunto de backends que podem ser incorporados em outros laços de eventos
- [Ev::recommendedBackends()](ev.recommendedbackends.md) - Retorna uma máscara de bits de backends recomendados para a
  plataforma atual
- [Ev::supportedBackends()](ev.supportedbackends.md) - Retorna o conjunto de backends suportados pela configuração atual
  do libev
- [Opções de backend](class.ev.md#ev.constants.watcher-backends)

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
