# Detecta a codificação de caracteres de entrada HTTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-http-input.php

---

# mb\_http\_input

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

mb\_http\_input — Detecta a codificação de caracteres de entrada HTTP

### Descrição

function **mb\_http\_input**([?](language.types.null.md)[string](language.types.string.md) `$type` = **`null`**): [array](language.types.array.md)|[string](language.types.string.md)|[false](language.types.singleton.md)

Detecta a codificação de caracteres de entrada HTTP.

### Parâmetros

`type`
:   A string de entrada especifica o tipo de entrada.
    `"G"` para GET, `"P"` para POST, `"C"` para COOKIE, `"S"` para string, `"L"` para lista, e
    `"I"` para a lista inteira (retornará um [array](language.types.array.md)).
    Se o tipo for omitido, ele retorna o último tipo de entrada processado.

### Valor Retornado

O nome da codificação de caracteres, conforme o `type`,
ou um array de nomes de codificação de caracteres, se `type` for `"I"`.
Se **mb\_http\_input()** não processar a entrada
HTTP especificada, ele retorna **`false`**.

### Erros/Exceções

Lança uma exceção [ValueError](class.valueerror.md) se
`type` for inválido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | **mb\_http\_input()** agora lança uma exceção [ValueError](class.valueerror.md) se `type` for inválido. `type` agora é anulável. |

### Veja também

- [mb\_internal\_encoding()](function.mb-internal-encoding.md) - Define/Obtém a codificação de caracteres interna
- [mb\_http\_output()](function.mb-http-output.md) - Define/Obtém a codificação de caracteres de saída HTTP
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
