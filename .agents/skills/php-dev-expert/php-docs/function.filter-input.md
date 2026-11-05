# Obtém uma variável externa específica por nome e filtra-a opcionalmente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.filter-input.php

---

# filter\_input

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

filter\_input — Obtém uma variável externa específica por nome e filtra-a opcionalmente

### Descrição

function **filter\_input**(  
    [int](language.types.integer.md) `$type`,  
    [string](language.types.string.md) `$var_name`,  
    [int](language.types.integer.md) `$filter` = **`FILTER_DEFAULT`**,  
    [array](language.types.array.md)|[int](language.types.integer.md) `$options` = 0  
): [mixed](language.types.mixed.md)

### Parâmetros

`type`
:   Uma das constantes **`INPUT_*`**.

    **Aviso**

    O conteúdo da superglobal que está sendo filtrada é o conteúdo "bruto"
    original fornecido pela SAPI,
    antes de qualquer modificação de usuário na superglobal.
    Para filtrar uma superglobal modificada, use
    a função [filter\_var()](function.filter-var.md).

`var_name`
:   Nome de uma variável a filtrar dentro da superglobal `type`
    correspondente.

`filter`
:   O filtro a ser aplicado.
    Pode ser um filtro de validação pelo uso de uma das constantes
    **`FILTER_VALIDATE_*`**,
    um filtro de sanitização pelo uso de uma das constantes
    **`FILTER_SANITIZE_*`**
    ou de **`FILTER_UNSAFE_RAW`**, ou um filtro cutomizado com o uso de
    **`FILTER_CALLBACK`**.

    > **Nota**:
    >
    > O padrão é **`FILTER_DEFAULT`**,
    > que é um sinônimo de **`FILTER_UNSAFE_RAW`**.
    > Isto resultará em nenhuma filtragem por padrão.

`options`
:   Um [array](language.types.array.md) associativo de opções,
    ou uma máscara de bits de constantes de opções de filtro
    **`FILTER_FLAG_*`**.

    Se `filter` aceitar opções,
    elas podem ser fornecidas pelo uso do campo `"flags"` do array.

### Valor Retornado

Valor da variável solicitada em caso de sucesso,
**`false`** se o filtro falhar
ou **`null`** se a varíavel `var_name` não estiver definida.
Se o sinalizador **`FILTER_NULL_ON_FAILURE`** for usado,
retorna **`false`** se a variável não estiver definida
e **`null`** e o filtro falhar.

### Examples

**Exemplo #1 Um exemplo de **filter\_input()****

```
<?php
$search_html = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_SPECIAL_CHARS);
$search_url = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_ENCODED);
echo "Você pesquisou por $search_html.\n";
echo "<a href='?search=$search_url'>Pesquise novamente.</a>";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Você pesquisou por Me &#38; son.
<a href='?search=Me%20%26%20son'>Pesquise novamente.</a>
```

### Veja também

- [filter\_input\_array()](function.filter-input-array.md) - Obtem variáveis externas e opcionalmente as filtra
- [filter\_var()](function.filter-var.md) - Filtra uma variável com um filtro especificado
- [filter\_var\_array()](function.filter-var-array.md) - Obtêm e opcionalmente filtra múltiplas variáveis
- Filtros de validação
  **`FILTER_VALIDATE_*`**
- Filtros de sanitização
  **`FILTER_SANITIZE_*`**

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
