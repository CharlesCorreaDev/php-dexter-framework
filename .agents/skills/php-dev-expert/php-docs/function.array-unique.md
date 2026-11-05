# Remove os valores duplicados de um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-unique.php

---

# array\_unique

(PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8)

array\_unique — Remove os valores duplicados de um array

### Descrição

function **array\_unique**([array](language.types.array.md) `$array`, [int](language.types.integer.md) `$flags` = **`SORT_STRING`**): [array](language.types.array.md)

Recebe uma entrada `array` e retorna um novo array
sem valores duplicados.

Note que as chaves são preservadas. Se vários elementos forem iguais sob
as `flags` fornecidas, então a chave e o valor
do primeiro elemento igual serão retidos.

> **Nota**:
>
> Dois elementos são considerados iguais se, e somente se,
> `(string) $elem1 === (string) $elem2`, ou seja,
> quando a representação em string é a mesma, o primeiro elemento será usado.

### Parâmetros

`array`
:   O array de entrada.

`flags`
:   O segundo parâmetro opcional `flags`
    pode ser utilizado para modificar o comportamento de comparação usando estes valores:

    Flags de tipo de comparação:

    - **`SORT_REGULAR`** - compara os itens normalmente
      (não altera tipos)
    - **`SORT_NUMERIC`** - compara itens numericamente
    - **`SORT_STRING`** - compara itens como strings
    - **`SORT_LOCALE_STRING`** - compara itens como
      strings baseado na localidade atual.

### Valor Retornado

Retorna o array filtrado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.2.0 | Se `flags` for **`SORT_STRING`**, o `array` anterior foi copiado e os elementos não únicos foram removidos (sem empacotar o array em seguida), mas um novo array é criado ao adicionar os novos elementos. Isto pode resultar em índices numéricos diferentes. |

### Examples

**Exemplo #1 Exemplo de **array\_unique()****

```
<?php

$input = ["a" => "verde", "vermelho", "b" => "verde", "azul", "vermelho"];
$result = array_unique($input);
print_r($result);

?>
```

O exemplo acima produzirá:

```
Array
(
    [a] => verde
    [0] => vermelho
    [1] => azul
)
```

**Exemplo #2 **array\_unique()** e tipos**

```
<?php

$input = [4, "4", "3", 4, 3, "3"];
$result = array_unique($input);
var_dump($result);

?>
```

O exemplo acima produzirá:

```
array(2) {
  [0]=>
  int(4)
  [2]=>
  string(1) "3"
}
```

### Notas

> **Nota**:
>
> Note que **array\_unique()** não se destina
> a funcionar em arrays multidimensionais.

### Veja também

- [array\_count\_values()](function.array-count-values.md) - Conta as ocorrências de cada valor distinto em um array

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
