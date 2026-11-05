# Remove um manipulador de chamada de retorno previamente instalado e restaura a configuração do terminal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.readline-callback-handler-remove.php

---

# readline\_callback\_handler\_remove

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

readline\_callback\_handler\_remove — Remove um manipulador de chamada de retorno previamente instalado e restaura a configuração do terminal

### Descrição

function **readline\_callback\_handler\_remove**(): [bool](language.types.boolean.md)

Remove um manipulador de chamada de retorno previamente instalado e restaura a
configuração do terminal.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o manipulador de chamada de retorno previamente instalado for removido, ou
**`false`** se ele não puder ser encontrado.

### Examples

Consulte [readline\_callback\_handler\_install()](function.readline-callback-handler-install.md) para um exemplo
de como usar a interface de chamada de retorno de readline.

### Veja também

- [readline\_callback\_handler\_install()](function.readline-callback-handler-install.md) - Inicializa a interface de chamada de retorno e o terminal de readline, mostra o prompt e retorna imediatamente
- [readline\_callback\_read\_char()](function.readline-callback-read-char.md) - Lê um caractere e informa a interface de chamada de retorno de readline quando uma linha é recebida

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
