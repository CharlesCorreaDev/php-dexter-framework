# Retorna o horário em que a última iteração do laço de eventos padrão
  foi iniciada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ev.now.php

---

# Ev::now

(PECL ev >= 0.2.0)

Ev::now — Retorna o horário em que a última iteração do laço de eventos padrão
foi iniciada

### Descrição

final
public
static
function **Ev::now**(): [float](language.types.float.md)

Retorna o horário em que a última iteração do laço de eventos padrão
começou. Este é o horário em que os termporizadores
([EvTimer](class.evtimer.md)
e
[EvPeriodic](class.evperiodic.md))
são baseados, e referir-se a ele é geralmente mais rápido do que
chamar [Ev::time()](ev.time.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o número de segundos (fracionário) que representa o horário em que a última
iteração do laço de eventos padrão foi iniciada.

### Veja também

- [Ev::nowUpdate()](ev.nowupdate.md) - Estabelece a hora atual consultando o kernel, atualizando o horário
  retornado por Ev::now no progresso

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
