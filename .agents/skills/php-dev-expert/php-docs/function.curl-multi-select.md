# Aguarda até que leitura ou escrita seja possível em qualquer conexão multi-identificadores cURL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-multi-select.php

---

# curl\_multi\_select

(PHP 5, PHP 7, PHP 8)

curl\_multi\_select — Aguarda até que leitura ou escrita seja possível em qualquer conexão multi-identificadores cURL

### Descrição

function **curl\_multi\_select**([CurlMultiHandle](class.curlmultihandle.md) `$multi_handle`, [float](language.types.float.md) `$timeout` = 1.0): [int](language.types.integer.md)

Bloqueia a execução do script até que um identificador incluído no
multi-identificador cURL seja capaz de progredir na próxima chamada a
[curl\_multi\_exec()](function.curl-multi-exec.md) ou até que o tempo limite seja alcançado
(o que ocorrer primeiro).

### Parâmetros

`multi_handle`
:   Um manipulador cURL múltiplo retornado por
    [curl\_multi\_init()](function.curl-multi-init.md).

`timeout`
:   Tempo em segundos a esperar por uma resposta da conexão multi-identificadores cURL ativa.

### Valor Retornado

Em caso de sucesso, retorna o número de descritores ativos contidos nos
conjuntos de descritores. Pode ser `0` se não houve atividade em nenhum
dos descritores. Em caso de falha, esta função retornará
`-1` em uma falha de seleção (da
chamada de sistema subjacente `select()`).

### Erros/Exceções

Lança um [ValueError](class.valueerror.md) se `timeout`
for menor que `0` ou maior que **`PHP_INT_MAX`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Agora lança um [ValueError](class.valueerror.md) se `timeout` for menor que `0` ou maior que **`PHP_INT_MAX`**. |
| 8.0.0 | O parâmetro `multi_handle` agora espera uma instância de [CurlMultiHandle](class.curlmultihandle.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [curl\_multi\_init()](function.curl-multi-init.md) - Retorna um multi-identificador cURL

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
