# Recebe atualização do sujeito

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splobserver.update.php

---

# SplObserver::update

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplObserver::update — Recebe atualização do sujeito

### Descrição

public function **SplObserver::update**([SplSubject](class.splsubject.md) `$subject`): [void](language.types.void.md)

Este método é chamado quando qualquer [SplSubject](class.splsubject.md)
ao qual o observador está anexado chama [SplSubject::notify()](splsubject.notify.md).

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`subject`
:   O [SplSubject](class.splsubject.md) notificando o observador de uma atualização.

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
