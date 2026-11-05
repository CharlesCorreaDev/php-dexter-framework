# Filtra uma variável com um filtro especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.filter-var.php

---

# filter\_var

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

filter\_var — Filtra uma variável com um filtro especificado

### Descrição

function **filter\_var**([mixed](language.types.mixed.md) `$value`, [int](language.types.integer.md) `$filter` = **`FILTER_DEFAULT`**, [array](language.types.array.md)|[int](language.types.integer.md) `$options` = 0): [mixed](language.types.mixed.md)

Filtra uma variável usando filtros de validação
**`FILTER_VALIDATE_*`**,
filtros de sanitização
**`FILTER_SANITIZE_*`**,
ou um filtro customizado.

### Parâmetros

`value`
:   Valor a filtrar.

    **Aviso**

    Valores escalares são
    [convertidos para strings](language.types.string.md#language.types.string.casting)
    internamente antes de serem filtrados.

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

Em caso de sucesso, retorna os dados filtrados.
Em caso de falha, retorna **`false`**,
a não ser que a opção **`FILTER_NULL_ON_FAILURE`** seja usada,
neste caso retorna **`null`**.

### Examples

**Exemplo #1 Um exemplo de **filter\_var()****

```
<?php
var_dump(filter_var('bob@example.com', FILTER_VALIDATE_EMAIL));
var_dump(filter_var('https://example.com', FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED));
?>
```

O exemplo acima produzirá:

```
string(15) "bob@example.com"
bool(false)
```

**Exemplo #2 Exemplo de validação de entradas de um array**

```
<?php
$emails = [
    "bob@example.com",
    "test@example.local",
    "invalidemail"
];

var_dump(filter_var($emails, FILTER_VALIDATE_EMAIL, FILTER_REQUIRE_ARRAY));
?>
```

O exemplo acima produzirá:

```
array(3) {
  [0]=>
  string(15) "bob@example.com"
  [1]=>
  string(18) "test@example.local"
  [2]=>
  bool(false)
}
```

**Exemplo #3 Exemplo de passagem de um array em `options`**

```
<?php

$options = [
    'options' => [
        'min_range' => 10,
    ],
    'flags' => FILTER_FLAG_ALLOW_OCTAL,
];

var_dump(filter_var('0755', FILTER_VALIDATE_INT, $options));
var_dump(filter_var('011', FILTER_VALIDATE_INT, $options));

?>
```

O exemplo acima produzirá:

```
int(493)
bool(false)
```

**Exemplo #4 Fornecendo opções diretamente ou através de um [array](language.types.array.md)**

```
<?php

$str = 'string';

var_dump(filter_var($str, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));
var_dump(filter_var($str, FILTER_VALIDATE_BOOLEAN, ['flags' => FILTER_NULL_ON_FAILURE]));

?>
```

O exemplo acima produzirá:

```
NULL
NULL
```

### Veja também

- [filter\_var\_array()](function.filter-var-array.md) - Obtêm e opcionalmente filtra múltiplas variáveis
- [filter\_input()](function.filter-input.md) - Obtém uma variável externa específica por nome e filtra-a opcionalmente
- [filter\_input\_array()](function.filter-input-array.md) - Obtem variáveis externas e opcionalmente as filtra
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
