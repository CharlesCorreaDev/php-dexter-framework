# Verifica se as strings são válidas para a codificação especificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-check-encoding.php

---

# mb\_check\_encoding

(PHP 4 >= 4.4.3, PHP 5 >= 5.1.3, PHP 7, PHP 8)

mb\_check\_encoding — Verifica se as strings são válidas para a codificação especificada

### Descrição

function **mb\_check\_encoding**([array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$value` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [bool](language.types.boolean.md)

Verifica se o fluxo de bytes especificado é válido para a codificação especificada.
Se `value` for do tipo [array](language.types.array.md), todas as chaves e valores são
validados recursivamente.
É útil para prevenir ataques chamados "Invalid Encoding Attack".

### Parâmetros

`value`
:   O fluxo de bytes ou [array](language.types.array.md) a ser verificado. Se omitido, esta função verifica
    toda a entrada desde o início da requisição.

    **Aviso**

    A partir do PHP 8.1.0, omitir este parâmetro ou passar **`null`** está descontinuado.

`encoding`
:   A codificação esperada.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Chamar esta função com **`null`** como `value` ou sem argumento está descontinuado. |
| 8.0.0 | `value` e `encoding` são anuláveis agora. |
| 7.2.0 | Esta função agora aceita também um [array](language.types.array.md) como `value`. Anteriormente, apenas [string](language.types.string.md)s eram suportadas. |

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
