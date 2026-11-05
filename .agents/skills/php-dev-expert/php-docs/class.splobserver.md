# A interface SplObserver

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.splobserver.php

---

# A interface SplObserver

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

## Introdução

A interface **SplObserver** é usada junto com
[SplSubject](class.splsubject.md) para implementar o padrão de design Observer.

## Resumo da Interface

interface ****SplObserver**** {

/\* Métodos \*/

public function [update](splobserver.update.md)([SplSubject](class.splsubject.md) `$subject`): [void](language.types.void.md)

}

## Índice

- [SplObserver::update](splobserver.update.md) — Recebe atualização do sujeito

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
