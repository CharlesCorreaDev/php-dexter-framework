# Define/Obtém a codificação de caracteres de saída HTTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-http-output.php

---

# mb\_http\_output

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

mb\_http\_output — Define/Obtém a codificação de caracteres de saída HTTP

### Descrição

function **mb\_http\_output**([?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [string](language.types.string.md)|[bool](language.types.boolean.md)

Define/obtém a codificação de caracteres de saída HTTP.
A saída após a chamada desta função será convertida da codificação interna definida para `encoding`.

### Parâmetros

`encoding`
:   Se `encoding` estiver definido,
    **mb\_http\_output()** define a codificação de caracteres de saída
    HTTP para `encoding`.

    Se `encoding` for omitido,
    **mb\_http\_output()** retorna a codificação de caracteres
    de saída HTTP atual.

### Valor Retornado

Se `encoding` for omitido,
**mb\_http\_output()** retorna a codificação de caracteres de saída HTTP atual.
Caso contrário,
Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Lança uma exceção [ValueError](class.valueerror.md) se
`encoding` contiver bytes nulos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | **mb\_http\_output()** agora lança uma exceção [ValueError](class.valueerror.md) se `encoding` contiver bytes nulos. |
| 8.0.0 | O parâmetro `encoding` agora pode ser nulo. |

### Veja também

- [mb\_internal\_encoding()](function.mb-internal-encoding.md) - Define/Obtém a codificação de caracteres interna
- [mb\_http\_input()](function.mb-http-input.md) - Detecta a codificação de caracteres de entrada HTTP
- [mb\_detect\_order()](function.mb-detect-order.md) - Define ou obtém a ordem de detecção de codificação de caracteres

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
