# Retorna o tempo absoluto em que este observador
  deve disparar em seguida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evperiodic.at.php

---

# EvPeriodic::at

(PECL ev >= 0.2.0)

EvPeriodic::at — Retorna o tempo absoluto em que este observador
deve disparar em seguida

### Descrição

public
function **EvPeriodic::at**(): [float](language.types.float.md)

Quando o observador está ativo, retorna o tempo absoluto em que este observador
deve disparar em seguida. Isso não é o mesmo que o argumento offset para
[EvPeriodic::set()](evperiodic.set.md)
ou
[EvPeriodic::\_\_construct()](evperiodic.construct.md),
mas funciona mesmo no modo de intervalo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o tempo absoluto que este observador deve disparar em seguida em
segundos.

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
