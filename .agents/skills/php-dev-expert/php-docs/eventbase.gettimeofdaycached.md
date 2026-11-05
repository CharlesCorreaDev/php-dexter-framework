# Retorna o horário base do evento atua

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbase.gettimeofdaycached.php

---

# EventBase::getTimeOfDayCached

(PECL event >= 1.2.6-beta)

EventBase::getTimeOfDayCached — Retorna o horário base do evento atua

### Descrição

public
function **EventBase::getTimeOfDayCached**(): [float](language.types.float.md)

Em caso de sucesso, retorna o horário atual (conforme retornado por
`gettimeofday()`
), observando o valor armazenado em cache em
*base*
se possível, e chamando
`gettimeofday()`
ou
`clock_gettime()`
conforme apropriado se não houver horário armazenado em cache.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o horário da
*base do evento* atual.
Em caso de falha, retorna **`null`**.

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
