# Anexa um SplObserver

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splsubject.attach.php

---

# SplSubject::attach

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplSubject::attach — Anexa um SplObserver

### Descrição

public function **SplSubject::attach**([SplObserver](class.splobserver.md) `$observer`): [void](language.types.void.md)

Anexa um [SplObserver](class.splobserver.md) para que ele possa ser notificado sobre atualizações.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`observer`
:   O [SplObserver](class.splobserver.md) para anexar.

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
