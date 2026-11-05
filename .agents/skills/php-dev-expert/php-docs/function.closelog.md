# Fecha conexão com o registrador do sistema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.closelog.php

---

# closelog

(PHP 4, PHP 5, PHP 7, PHP 8)

closelog — Fecha conexão com o registrador do sistema

### Descrição

function **closelog**(): [true](language.types.singleton.md)

**closelog()** fecha o descritor que está sendo usado para gravar no
registrador do sistema. O uso de **closelog()** é opcional.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Sempre retorna **`true`**.

### Veja também

- [syslog()](function.syslog.md) - Gera uma mensagem de registro do sistema
- [openlog()](function.openlog.md) - Abre conexão com o registrador do sistema

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
