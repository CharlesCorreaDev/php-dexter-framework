# Retorna o resultado da resposta da Varredura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.yaz-scan-result.php

---

# yaz\_scan\_result

(PHP 4 >= 4.0.5, PECL yaz >= 0.9.0)

yaz\_scan\_result — Retorna o resultado da resposta da Varredura

### Descrição

function **yaz\_scan\_result**([resource](language.types.resource.md) `$id`, [array](language.types.array.md) `&$result` = ?): [array](language.types.array.md)

**yaz\_scan\_result()** retorna termos e informações
associadas conforme recebidos do servidor no último [yaz\_scan()](function.yaz-scan.md)
realizado.

### Parâmetros

`id`
:   O recurso de conexão retornado por [yaz\_connect()](function.yaz-connect.md).

`result`
:   Se fornecido, este array será modificado para conter informações adicionais
    obtidas da Resposta da Varredura:

    - `number` - Número de entradas retornadas
    - `stepsize` - Tamanho do passo
    - `position` - Posição do termo
    - `status` - Status da varredura

### Valor Retornado

Retorna um array (0..n-1) onde n é o número de termos retornados. Cada
valor é um par onde o primeiro item é o termo e o segundo item é
a contagem de resultados.

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
