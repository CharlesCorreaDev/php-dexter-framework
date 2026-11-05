# Suspende o laço de eventos padrão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ev.suspend.php

---

# Ev::suspend

(PECL ev >= 0.2.0)

Ev::suspend — Suspende o laço de eventos padrão

### Descrição

final
public
static
function **Ev::suspend**(): [void](language.types.void.md)

Os métodos **Ev::suspend()**
e
[Ev::resume()](ev.resume.md)
suspendem e retomam um laço, respectivamente.

Todos os observadores de temporização serão atrasados pelo tempo gasto entre
*suspend*
e
*resume*
e todos os observadores
*periódicos*
serão reagendados (isto é, eles perderão quaisquer eventos que tenham
ocorrido enquanto suspensos).

Após chamar
**Ev::suspend()**
não é permitido chamar qualquer função no laço além de
[Ev::resume()](ev.resume.md).
Além disso, não é permitido chamar
[Ev::resume()](ev.resume.md)
sem uma chamada anterior a
**Ev::suspend()**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [Ev::resume()](ev.resume.md) - Retoma o laço de eventos padrão suspenso anteriormente

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
