# Retorna o número do erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.yaz-errno.php

---

# yaz\_errno

(PHP 4 >= 4.0.1, PECL yaz >= 0.9.0)

yaz\_errno — Retorna o número do erro

### Descrição

function **yaz\_errno**([resource](language.types.resource.md) `$id`): [int](language.types.integer.md)

Retorna um número de erro (última solicitação) para o servidor identificado por
`id`.

**yaz\_errno()** deve ser chamado após a atividade de rede para
cada servidor - (após o retorno de [yaz\_wait()](function.yaz-wait.md)) para determinar o
sucesso ou falha da última operação (por exemplo, pesquisa).

### Parâmetros

`id`
:   O recurso de conexão retornado por [yaz\_connect()](function.yaz-connect.md).

### Valor Retornado

Retorna um código de erro. O código de erro é um código de diagnóstico Z39.50
(geralmente um diagnóstico Bib-1) ou um código de erro do lado do cliente
gerado pelo próprio PHP/YAZ, como "Connect failed" (falha na conexão), "Init Rejected" (inicialização rejeitada),
etc.

### Veja também

- [yaz\_error()](function.yaz-error.md) - Retorna a descrição do erro
- [yaz\_addinfo()](function.yaz-addinfo.md) - Retorna informações de erro adicionais

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
