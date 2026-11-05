# Retoma o laço de eventos padrão suspenso anteriormente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ev.resume.php

---

# Ev::resume

(PECL ev >= 0.2.0)

Ev::resume — Retoma o laço de eventos padrão suspenso anteriormente

### Descrição

final
public
static
function **Ev::resume**(): [void](language.types.void.md)

Os métodos [Ev::suspend()](ev.suspend.md)
e
**Ev::resume()**
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
[Ev::suspend()](ev.suspend.md)
não é permitido chamar qualquer função no laço além de
**Ev::resume()**.
Além disso, não é permitido chamar
**Ev::resume()**
sem uma chamada
anterior a [Ev::suspend()](ev.suspend.md).

Chamar
*suspend*
ou
*resume*
tem o efeito colateral de atualizar o horário do laço de eventos
(veja
[Ev::nowUpdate()](ev.nowupdate.md)).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [Ev::suspend()](ev.suspend.md) - Suspende o laço de eventos padrão

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
