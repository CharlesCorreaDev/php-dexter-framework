# Simplesmente para e reinicia o observador periódico novamente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evperiodic.again.php

---

# EvPeriodic::again

(PECL ev >= 0.2.0)

EvPeriodic::again — Simplesmente para e reinicia o observador periódico novamente

### Descrição

public
function **EvPeriodic::again**(): [void](language.types.void.md)

Simplesmente para e reinicia o observador periódico novamente. Isso só é útil
quando os atributos são alterados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [EvTimer::again()](evtimer.again.md) - Reinicia o observador do temporizador

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
