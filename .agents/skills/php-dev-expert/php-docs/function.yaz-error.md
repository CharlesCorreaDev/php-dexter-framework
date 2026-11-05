# Retorna a descrição do erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.yaz-error.php

---

# yaz\_error

(PHP 4 >= 4.0.1, PECL yaz >= 0.9.0)

yaz\_error — Retorna a descrição do erro

### Descrição

function **yaz\_error**([resource](language.types.resource.md) `$id`): [string](language.types.string.md)

**yaz\_error()** retorna uma mensagem de texto em inglês
correspondente ao último número de erro retornado por
[yaz\_errno()](function.yaz-errno.md).

### Parâmetros

`id`
:   O recurso de conexão retornado por [yaz\_connect()](function.yaz-connect.md).

### Valor Retornado

Retorna uma mensagem de texto de erro para o servidor (última solicitação), identificada pelo
parâmetro `id`. Uma string vazia é retornada se a
última operação foi bem-sucedida.

### Veja também

- [yaz\_errno()](function.yaz-errno.md) - Retorna o número do erro
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
