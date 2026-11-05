# Reinicia o observador do temporizador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evtimer.again.php

---

# EvTimer::again

(PECL ev >= 0.2.0)

EvTimer::again — Reinicia o observador do temporizador

### Descrição

public
function **EvTimer::again**(): [void](language.types.void.md)

Isso agirá como se o temporizador tivesse expirado e o reiniciará novamente se
estiver se repetindo. A semântica exata é:

1. se o temporizador estiver pendente, seu status pendente será limpo.
2. se o temporizador for iniciado, mas não estiver se repetindo, para-o (como se o tempo tivesse expirado).
3. se o temporizador estiver se repetindo, inicia-o se necessário (com o valor
   repeat)
   ou redefine o temporizador em execução para
   o valor
   repeat.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [EvWatcher::stop()](evwatcher.stop.md) - Interrrompe o observador

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
