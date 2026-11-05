# Lê um caractere e informa a interface de chamada de retorno de readline quando uma linha é recebida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.readline-callback-read-char.php

---

# readline\_callback\_read\_char

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

readline\_callback\_read\_char — Lê um caractere e informa a interface de chamada de retorno de readline quando uma linha é recebida

### Descrição

function **readline\_callback\_read\_char**(): [void](language.types.void.md)

Lê um caractere de entrada do usuário. Quando uma linha é recebida, esta função
informa a interface de chamada de retorno de readline, instalada usando
[readline\_callback\_handler\_install()](function.readline-callback-handler-install.md), que uma linha
está pronta para entrada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

Consulte [readline\_callback\_handler\_install()](function.readline-callback-handler-install.md) para um exemplo
de como usar a interface de chamada de retorno de readline.

### Veja também

- [readline\_callback\_handler\_install()](function.readline-callback-handler-install.md) - Inicializa a interface de chamada de retorno e o terminal de readline, mostra o prompt e retorna imediatamente
- [readline\_callback\_handler\_remove()](function.readline-callback-handler-remove.md) - Remove um manipulador de chamada de retorno previamente instalado e restaura a configuração do terminal

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
