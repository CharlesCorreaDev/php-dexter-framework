# Alimenta um evento de sinal no Ev

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ev.feedsignal.php

---

# Ev::feedSignal

(PECL ev >= 0.2.0)

Ev::feedSignal — Alimenta um evento de sinal no Ev

### Descrição

final
public
static
function **Ev::feedSignal**(
[int](language.types.integer.md) `$signum`
): [void](language.types.void.md)

Simula um recebimento de sinal. É seguro chamar esta função a qualquer momento,
de qualquer contexto, incluindo manipuladores de sinal ou threads aleatórios.
Seu uso principal é personalizar o tratamento de sinal no processo.

Diferente de
[Ev::feedSignalEvent()](ev.feedsignalevent.md),
isso funciona independentemente de qual laço registrou o sinal.

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

- [Ev::feedSignalEvent()](ev.feedsignalevent.md) - Alimenta o evento de sinal no laço padrão

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
