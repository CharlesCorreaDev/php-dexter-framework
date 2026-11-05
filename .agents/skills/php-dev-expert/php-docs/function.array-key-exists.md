# Verifica se uma chave ou índice existe em um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-key-exists.php

---

# array\_key\_exists

(PHP 4 >= 4.0.7, PHP 5, PHP 7, PHP 8)

array\_key\_exists — Verifica se uma chave ou índice existe em um array

### Descrição

function **array\_key\_exists**([string](language.types.string.md)|[int](language.types.integer.md)|[float](language.types.float.md)|[bool](language.types.boolean.md)|[resource](language.types.resource.md)|[null](language.types.null.md) `$key`, [array](language.types.array.md) `$array`): [bool](language.types.boolean.md)

**array\_key\_exists()** retorna **`true`** se a chave
`key` existe no array.
`key` pode ser qualquer valor possível para um
índice de um array.

### Parâmetros

`key`
:   Valor para verificar.

`array`
:   Um array com chaves para verificar.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

> **Nota**:
>
> **array\_key\_exists()** procurará pelas chaves na primeira dimensão apenas.
> Chaves aninhadas em arrays multidimensionais não serão encontradas.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Usar [null](language.types.null.md) no parâmetro `key` foi descontinuado, use uma string vazia no lugar. |
| 8.0.0 | O parâmetro `key` agora aceita [bool](language.types.boolean.md), [float](language.types.float.md), [int](language.types.integer.md), [null](language.types.null.md), [resource](language.types.resource.md) e [string](language.types.string.md) como argumentos. |
| 8.0.0 | Passar um [object](language.types.object.md) para o parâmetro `array` não é mais suportado. |
| 7.4.0 | Passar um [object](language.types.object.md) para o parâmetro `array` foi descontinuado. Use [property\_exists()](function.property-exists.md) em seu lugar. |

### Examples

**Exemplo #1 Exemplo da função **array\_key\_exists()****

```
<?php
$searchArray = ['primeiro' => 1, 'segundo' => 4];
var_dump(array_key_exists('first', $searchArray));
?>
```

O exemplo acima produzirá:

```
bool(true)
```

**Exemplo #2 **array\_key\_exists()** versus [isset()](function.isset.md)**

[isset()](function.isset.md) não retorna **`true`** para valores de chave
que correspondam a um valor **`null`**, enquanto que
**array\_key\_exists()** faz isto.

```
<?php
$searchArray = ['primeiro' => null, 'segundo' => 4];

var_dump(isset($searchArray['first']));
var_dump(array_key_exists('first', $searchArray));
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
```

### Veja também

- [isset()](function.isset.md) - Determina se uma variável está declarada e é diferente de null
- [array\_keys()](function.array-keys.md) - Retorna todas as chaves ou uma parte das chaves de um array
- [in\_array()](function.in-array.md) - Verifica se um valor existe em um array
- [property\_exists()](function.property-exists.md) - Verifica se o objeto ou a classe tem uma propriedade

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
