# Desanexa um observador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splsubject.detach.php

---

# SplSubject::detach

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplSubject::detach — Desanexa um observador

### Descrição

public function **SplSubject::detach**([SplObserver](class.splobserver.md) `$observer`): [void](language.types.void.md)

Desanexa um observador do assunto para não mais notificá-lo sobre atualizações.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`observer`
:   O [SplObserver](class.splobserver.md) para desanexar.

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
