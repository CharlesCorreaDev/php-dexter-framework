# Define se deseja usar o manipulador de erros SOAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.use-soap-error-handler.php

---

# use\_soap\_error\_handler

(PHP 5, PHP 7, PHP 8)

use\_soap\_error\_handler — Define se deseja usar o manipulador de erros SOAP

### Descrição

function **use\_soap\_error\_handler**([bool](language.types.boolean.md) `$enable` = **`true`**): [bool](language.types.boolean.md)

Esta função define se deve ou não usar o manipulador de erros SOAP no servidor SOAP.
Ele retornará o valor anterior. Se definido como **`true`**, detalhes dos erros
em uma aplicação [SoapServer](class.soapserver.md) será enviado ao cliente
como uma mensagem de falha SOAP.
Se **`false`**, o manipulador de erros PHP padrão será usado.
O padrão é enviar o erro ao cliente como mensagem de falha SOAP.

### Parâmetros

`enable`
:   Defina como **`true`** para enviar detalhes do erro aos clientes.

### Valor Retornado

Retorna o valor original.

### Veja também

- [set\_error\_handler()](function.set-error-handler.md) - Define uma função de usuário para manipulação de erro
- [set\_exception\_handler()](function.set-exception-handler.md) - Define uma função de manipulação de exceção definida pelo usuário

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
