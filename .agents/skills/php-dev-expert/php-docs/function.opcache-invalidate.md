# Invalida um script em cache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.opcache-invalidate.php

---

# opcache\_invalidate

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL ZendOpcache >= 7.0.0)

opcache\_invalidate — Invalida um script em cache

### Descrição

function **opcache\_invalidate**([string](language.types.string.md) `$filename`, [bool](language.types.boolean.md) `$force` = **`false`**): [bool](language.types.boolean.md)

Esta função invalida um determinado script do cache opcode. Se
`force` não estiver definido ou for **`false`**, o script só será
invalidado se o horário de modificação do script for mais recente que os opcodes armazenados
em cache. Se a diretiva [opcache.file\_cache](opcache.configuration.md#ini.opcache.file-cache)
estiver habilitada, esta função também invalida a entrada correspondente
no cache de arquivos.

### Parâmetros

`filename`
:   O caminho para o script que está sendo invalidado.

`force`
:   Se definido como **`true`**, o script será invalidado independentemente de a
    invalidação ser necessária.

### Valor Retornado

Retorna **`true`** se o cache do opcode para `filename` foi
invalidado ou se não havia nada para invalidar, ou **`false`** se o cache do
opcode está desabilitado.

### Veja também

- [opcache\_compile\_file()](function.opcache-compile-file.md) - Compila e armazena em cache um script PHP sem executá-lo
- [opcache\_reset()](function.opcache-reset.md) - Redefine o conteúdo do cache opcode

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
