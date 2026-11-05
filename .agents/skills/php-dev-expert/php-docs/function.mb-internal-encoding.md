# Define/Obtém a codificação de caracteres interna

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-internal-encoding.php

---

# mb\_internal\_encoding

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

mb\_internal\_encoding — Define/Obtém a codificação de caracteres interna

### Descrição

function **mb\_internal\_encoding**([?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [string](language.types.string.md)|[bool](language.types.boolean.md)

Define/Obtém a codificação de caracteres interna

### Parâmetros

`encoding`
:   `encoding` é o nome da codificação de caracteres
    usado para a conversão de codificação de caracteres de entrada HTTP, conversão
    de codificação de caracteres de saída HTTP, e a codificação de
    caracteres padrão para funções de string definidas pelo módulo mbstring.
    Deve-se observar que a codificação interna é totalmente diferente da utilizada em regex multibyte.

### Valor Retornado

Se `encoding` for definido, então
Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
Nesse caso, a codificação de caracteres para regex multibyte NÃO é alterada.
Se `encoding` for omitido, então
o nome atual da codificação de caracteres é retornado.

### Erros/Exceções

A partir do PHP 8.0.0, um [ValueError](class.valueerror.md) é lançado se
o valor de `encoding` for uma codificação inválida.
Antes do PHP 8.0.0, um **`E_WARNING`** era emitido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `encoding` agora pode ser nulo. |
| 8.0.0 | Agora lança um [ValueError](class.valueerror.md) se `encoding` for uma codificação inválida. Anteriormente, um **`E_WARNING`** era emitido. |

### Examples

**Exemplo #1 Exemplo de **mb\_internal\_encoding()****

```
<?php
/* Define a codificação de caracteres interna como UTF-8 */
mb_internal_encoding("UTF-8");

/* Exibe a codificação de caracteres interna atual */
echo mb_internal_encoding();
?>
```

### Veja também

- [mb\_http\_input()](function.mb-http-input.md) - Detecta a codificação de caracteres de entrada HTTP
- [mb\_http\_output()](function.mb-http-output.md) - Define/Obtém a codificação de caracteres de saída HTTP
- [mb\_detect\_order()](function.mb-detect-order.md) - Define ou obtém a ordem de detecção de codificação de caracteres
- [mb\_regex\_encoding()](function.mb-regex-encoding.md) - Define/Obtém codificação de caracteres para regex multibyte

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
