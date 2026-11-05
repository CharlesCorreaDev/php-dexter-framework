# Retorna informações de erro adicionais

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.yaz-addinfo.php

---

# yaz\_addinfo

(PHP 4 >= 4.0.1, PECL yaz >= 0.9.0)

yaz\_addinfo — Retorna informações de erro adicionais

### Descrição

function **yaz\_addinfo**([resource](language.types.resource.md) `$id`): [string](language.types.string.md)

Retorna informações de erro adicionais para a última solicitação no servidor.

Com alguns servidores, esta função pode retornar a mesma string que
[yaz\_error()](function.yaz-error.md).

### Parâmetros

`id`
:   O recurso de conexão retornado por [yaz\_connect()](function.yaz-connect.md).

### Valor Retornado

Uma string contendo informações adicionais de erro ou uma string vazia se
a última operação foi bem-sucedida ou se nenhuma informação adicional foi
fornecida pelo servidor.

### Veja também

- [yaz\_error()](function.yaz-error.md) - Retorna a descrição do erro
- [yaz\_errno()](function.yaz-errno.md) - Retorna o número do erro

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
