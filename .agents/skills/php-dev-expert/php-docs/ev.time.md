# Retorna o horário atual em segundos fracionários desde a época

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ev.time.php

---

# Ev::time

(PECL ev >= 0.2.0)

Ev::time — Retorna o horário atual em segundos fracionários desde a época

### Descrição

final
public
static
function **Ev::time**(): [float](language.types.float.md)

Retorna o horário atual em segundos fracionários desde a época. Considere
usar
[Ev::now()](ev.now.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o horário atual em segundos fracionários desde a época.

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
