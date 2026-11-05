# Retorna o "horário do laço de eventos" atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evloop.now.php

---

# EvLoop::now

(PECL ev >= 0.2.0)

EvLoop::now — Retorna o "horário do laço de eventos" atual

### Descrição

public
function **EvLoop::now**(): [float](language.types.float.md)

Retorna o "horário de laço de evento" atual, que é o horário em que o laço de evento
recebeu eventos e começou a processá-los. Este timestamp não muda
enquanto as funções de retorno estão sendo processadas, e este também é o horário base
usado para temporizadores relativos. Pode-se tratá-lo como o timestamp do evento
ocorrendo (ou mais corretamente, libev descobrindo sobre ele).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o horário do laço de eventos em segundos (fracionários).

### Veja também

- [Ev::now()](ev.now.md) - Retorna o horário em que a última iteração do laço de eventos padrão
  foi iniciada

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
