# Envia todos os dados de resposta ao cliente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fastcgi-finish-request.php

---

# fastcgi\_finish\_request

(PHP 5 >= 5.3.3, PHP 7, PHP 8)

fastcgi\_finish\_request — Envia todos os dados de resposta ao cliente

### Descrição

function **fastcgi\_finish\_request**(): [bool](language.types.boolean.md)

Esta função envia todos os dados de resposta para o cliente e finaliza a requisição.
Isso permite que tarefas demoradas sejam executadas sem
que a conexão com o cliente seja mantida aberta.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
