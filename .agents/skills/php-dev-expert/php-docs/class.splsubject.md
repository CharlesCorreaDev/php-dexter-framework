# A interface SplSubject

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.splsubject.php

---

# A interface SplSubject

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

## Introdução

A interface **SplSubject** é usada em conjunto com
[SplObserver](class.splobserver.md) para implementar o padrão de design Observer.

## Resumo da Interface

interface ****SplSubject**** {

/\* Métodos \*/

public function [attach](splsubject.attach.md)([SplObserver](class.splobserver.md) `$observer`): [void](language.types.void.md)

public function [detach](splsubject.detach.md)([SplObserver](class.splobserver.md) `$observer`): [void](language.types.void.md)

public function [notify](splsubject.notify.md)(): [void](language.types.void.md)

}

## Índice

- [SplSubject::attach](splsubject.attach.md) — Anexa um SplObserver
- [SplSubject::detach](splsubject.detach.md) — Desanexa um observador
- [SplSubject::notify](splsubject.notify.md) — Notifica um observador

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
