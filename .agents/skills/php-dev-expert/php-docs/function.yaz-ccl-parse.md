# Invoca o analisador CCL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.yaz-ccl-parse.php

---

# yaz\_ccl\_parse

(PHP 4 >= 4.0.5, PECL yaz >= 0.9.0)

yaz\_ccl\_parse — Invoca o analisador CCL

### Descrição

function **yaz\_ccl\_parse**([resource](language.types.resource.md) `$id`, [string](language.types.string.md) `$query`, [array](language.types.array.md) `&$result`): [bool](language.types.boolean.md)

Esta função invoca um analisador CCL. Ela converte uma consulta CCL FIND fornecida em
uma consulta RPN que pode ser passada para a função [yaz\_search()](function.yaz-search.md)
para realizar uma busca.

Para definir um conjunto de campos CCL válidos, chame [yaz\_ccl\_conf()](function.yaz-ccl-conf.md)
antes desta função.

### Parâmetros

`id`
:   O recurso de conexão retornado por [yaz\_connect()](function.yaz-connect.md).

`query`
:   A consulta CCL FIND.

`result`
:   Se a função foi executada com sucesso, este será um array
    contendo a consulta RPN válida sob a chave `rpn`.

    Em caso de falha, três índices são definidos neste array para indicar a causa
    da falha:

    - `errorcode` - o código de erro CCL (inteiro)
    - `errorstring` - a string de erro CCL
    - `errorpos` - posição aproximada na consulta de falha
      (o inteiro é a posição do caractere)

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Análise CCL**

Tentaremos pesquisar usando CCL. No exemplo abaixo,
`$ccl` é uma consulta CCL.

```
<?php

yaz_ccl_conf($id, $fields);  // veja o exemplo para yaz_ccl_conf
if (!yaz_ccl_parse($id, $ccl, $cclresult)) {
    echo 'Erro: ' . $cclresult["errorstring"];
} else {
    $rpn = $cclresult["rpn"];
    yaz_search($id, "rpn", $rpn);
}
?>
```

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
