# Obtêm e opcionalmente filtra múltiplas variáveis

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.filter-var-array.php

---

# filter\_var\_array

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

filter\_var\_array — Obtêm e opcionalmente filtra múltiplas variáveis

### Descrição

function **filter\_var\_array**([array](language.types.array.md) `$array`, [array](language.types.array.md)|[int](language.types.integer.md) `$options` = **`FILTER_DEFAULT`**, [bool](language.types.boolean.md) `$add_empty` = **`true`**): [array](language.types.array.md)|[false](language.types.singleton.md)|[null](language.types.null.md)

Filtra um [array](language.types.array.md) associativo de valores usando filtros de validação
**`FILTER_VALIDATE_*`**,
filtros de sanitização
**`FILTER_SANITIZE_*`**,
ou filtros customizados.

### Parâmetros

`array`
:   Um [array](language.types.array.md) associativo contendo os dados a filtrar.

`options`
:   Pode ser um [array](language.types.array.md) associativo de opções,
    ou o filtro a aplicar a cada entrada,
    que pode ser um filtro de validação usando uma das constantes
    **`FILTER_VALIDATE_*`**,
    ou um filtro de sanitização, usando uma das
    constantes
    **`FILTER_SANITIZE_*`**.

    O array de opções é um array associativo onde a chave corresponde
    a uma chave no `array` de dados e o valor
    associado é o filtro a ser aplicado a esta entrada
    ou um array associativo descrevendo como e qual filtro deve ser
    aplicado a esta entrada.

    O array associativo que descreve como um filtro deve ser aplicado
    deve conter a chave `'filter'` cujo valor associado
    é o filtro a ser aplicado, que pode ser uma das constantes
    **`FILTER_VALIDATE_*`**,
    **`FILTER_SANITIZE_*`**,
    **`FILTER_UNSAFE_RAW`** ou
    **`FILTER_CALLBACK`**.
    Opcionalmente, ele pode conter a chave `'flags'`
    que especifica os sinalizadores que se aplicam ao filtro,
    e a chave `'options'` que especifica quaisquer opções
    que se aplicam ao filtro.

`add_empty`
:   Adiciona chaves ausentes como **`null`** ao valor de retorno.

### Valor Retornado

Um array contendo valores das variáveis requisitadas em caso de sucesso, ou **`false`**
em caso de falha. Um valor de array será **`false`** se o filtro falhar, ou **`null`** se
a variável não estiver definida.

### Examples

**Exemplo #1 Um exemplo de **filter\_var\_array()****

```
<?php

$data = [
    'product_id' => 'libgd<script>',
    'component'  => '10',
    'versions'   => '2.0.33',
    'testscalar' => ['2', '23', '10', '12'],
    'testarray'  => '2',
];

$filters = [
    'product_id'   => FILTER_SANITIZE_ENCODED,
    'component'    => [
        'filter'   => FILTER_VALIDATE_INT,
        'flags'    => FILTER_FORCE_ARRAY,
        'options'  => [
            'min_range' => 1,
            'max_range' => 10,
        ],
    ],
    'versions'     => [
        'filter' => FILTER_SANITIZE_ENCODED
    ],
    'testscalar'   => [
        'filter' => FILTER_VALIDATE_INT,
        'flags'  => FILTER_REQUIRE_SCALAR,
    ],
    'testarray'    => [
        'filter' => FILTER_VALIDATE_INT,
        'flags'  => FILTER_FORCE_ARRAY,
    ],
    'doesnotexist' => FILTER_VALIDATE_INT,
];

var_dump(filter_var_array($data, $filters));

?>
```

O exemplo acima produzirá:

```
array(6) {
  ["product_id"]=>
  string(17) "libgd%3Cscript%3E"
  ["component"]=>
  array(1) {
    [0]=>
    int(10)
  }
  ["versions"]=>
  string(6) "2.0.33"
  ["testscalar"]=>
  bool(false)
  ["testarray"]=>
  array(1) {
    [0]=>
    int(2)
  }
  ["doesnotexist"]=>
  NULL
}
```

### Veja também

- [filter\_input\_array()](function.filter-input-array.md) - Obtem variáveis externas e opcionalmente as filtra
- [filter\_var()](function.filter-var.md) - Filtra uma variável com um filtro especificado
- [filter\_input()](function.filter-input.md) - Obtém uma variável externa específica por nome e filtra-a opcionalmente
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
