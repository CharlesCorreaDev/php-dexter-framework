# Redefine o conteúdo do cache opcode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.opcache-reset.php

---

# opcache\_reset

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL ZendOpcache >= 7.0.0)

opcache\_reset — Redefine o conteúdo do cache opcode

### Descrição

function **opcache\_reset**(): [bool](language.types.boolean.md)

Esta função redefine todo o cache do opcode. Depois de chamar
**opcache\_reset()**, todos os scripts serão recarregados e
reanalisados na próxima vez que forem atingidos. Esta função redefine apenas
o cache na memória, não o cache do arquivo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o cache de opcode foi redefinido, ou **`false`** se o cache de opcode
estiver desativado ou se a reinicialização estiver pendente ou em progresso (consulte [opcache\_get\_status()](function.opcache-get-status.md)).

### Veja também

- [opcache\_invalidate()](function.opcache-invalidate.md) - Invalida um script em cache
- [opcache\_get\_status()](function.opcache-get-status.md) - Obtém informações de status sobre o cache

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
