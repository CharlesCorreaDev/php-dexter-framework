# Alimenta o evento de sinal no laço padrão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ev.feedsignalevent.php

---

# Ev::feedSignalEvent

(No version information available, might only be in Git)

Ev::feedSignalEvent — Alimenta o evento de sinal no laço padrão

### Descrição

final
public
static
function **Ev::feedSignalEvent**(
[int](language.types.integer.md) `$signum`
): [void](language.types.void.md)

Alimenta o evento de sinal no laço padrão. Ev reagirá a esta chamada como se o
sinal especificado por
`signal`
tivesse ocorrido.

### Parâmetros

`signum`
:   Número de sinal. Consulte
    a página do manual de `signal(7)`
    para detalhes. Pode-se usar constantes exportadas pela
    extensão
    `pcntl`.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [Ev::feedSignal()](ev.feedsignal.md) - Alimenta um evento de sinal no Ev

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
