# Configura o observador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evtimer.set.php

---

# EvTimer::set

(PECL ev >= 0.2.0)

EvTimer::set — Configura o observador

### Descrição

public
function **EvTimer::set**(
[float](language.types.float.md) `$after`
, 
[float](language.types.float.md) `$repeat`
): [void](language.types.void.md)

Configura o observador.

### Parâmetros

`after`
:   Configura o temporizador para disparo após
    `after`
    segundos.

`repeat`
:   Se este parâmetro for
    `0.0`,
    o temporizador será automaticamente parado quando o tempo limite for atingido.
    Se for positivo, será o intervalo em segundos no qual o temporizador será
    automaticamente configurado para disparar novamente, até ser parado manualmente.

### Valor Retornado

Nenhum valor é retornado.

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
