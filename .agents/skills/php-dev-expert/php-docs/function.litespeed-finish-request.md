# Envia todos os dados de resposta ao cliente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.litespeed-finish-request.php

---

# litespeed\_finish\_request

(PHP 7 >= 7.2.18, PHP 8)

litespeed\_finish\_request — Envia todos os dados de resposta ao cliente

### Descrição

function **litespeed\_finish\_request**(): [bool](language.types.boolean.md)

Esta função envia todos os dados de resposta ao cliente e finaliza a
requisição. Isto permite que tarefas que consomem muito tempo sejam realizadas sem
deixar aberta a conexão ao cliente.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.2.18 | Esta função se tornou disponível. |

### Veja também

- [fastcgi\_finish\_request()](function.fastcgi-finish-request.md) - Envia todos os dados de resposta ao cliente

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
