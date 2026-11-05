# Notifica um observador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splsubject.notify.php

---

# SplSubject::notify

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplSubject::notify — Notifica um observador

### Descrição

public function **SplSubject::notify**(): [void](language.types.void.md)

Notifica todos os observadores anexados.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

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
