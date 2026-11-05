# Obtém a mensagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/throwable.getmessage.php

---

# Throwable::getMessage

(PHP 7, PHP 8)

Throwable::getMessage — Obtém a mensagem

### Descrição

public function **Throwable::getMessage**(): [string](language.types.string.md)

Retorna a mensagem associada com o objeto disparado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a mensagem associada com o objeto disparado.

### Veja também

- [Exception::getMessage()](exception.getmessage.md) - Obtém a mensagem da exceção

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
