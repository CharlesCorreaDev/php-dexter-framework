# Inspeciona o resultado dos serviços estendidos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.yaz-es-result.php

---

# yaz\_es\_result

(PHP 4 >= 4.2.0, PECL yaz >= 0.9.0)

yaz\_es\_result — 
Inspeciona o resultado dos serviços estendidos

### Descrição

function **yaz\_es\_result**([resource](language.types.resource.md) `$id`): [array](language.types.array.md)

Esta função inspeciona o último resultado do Serviço Estendido retornado
de um servidor. Um Serviço Estendido é iniciado
por **yaz\_item\_order()** ou
[yaz\_es()](function.yaz-es.md).

### Parâmetros

`id`
:   O recurso de conexão retornado por [yaz\_connect()](function.yaz-connect.md).

### Valor Retornado

Retorna um array com o elemento `targetReference`
para a referência da operação de Serviço Estendido (gerada
e retornada do servidor).

### Veja também

- [yaz\_es()](function.yaz-es.md) - Prepara-se para uma solicitação de Serviço Estendido

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
