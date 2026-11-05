# Importa variáveis para a tabela de símbolos a partir de um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.extract.php

---

# extract

(PHP 4, PHP 5, PHP 7, PHP 8)

extract — Importa variáveis para a tabela de símbolos a partir de um array

### Descrição

function **extract**([array](language.types.array.md) `&$array`, [int](language.types.integer.md) `$flags` = **`EXTR_OVERWRITE`**, [string](language.types.string.md) `$prefix` = ""): [int](language.types.integer.md)

Importa variáveis a partir de um array para a
[tabela de símbolos](features.gc.refcounting-basics.md) atual.

Verifica se cada chave tem um nome válido de variável.
Também verifica por colisões com variáveis já existentes
na tabela de símbolos.

**Aviso**

Não use **extract()** em dados inseguros, como informações externas
(ex.: [$\_GET](reserved.variables.get.md), [$\_FILES](reserved.variables.files.md)).

### Parâmetros

`array`
:   Um array associativo. Esta função trata chaves como nomes de variáveis
    e valores como os valores das variáveis. Para cada par chave/valor ela cria
    uma variável na tabela de símbolos atual, seguindo os parâmetros
    `flags` e `prefix`.

    É necesário usar um array associativo, um array numericamente indexado
    não produzirá resultados até que seja usa a opção **`EXTR_PREFIX_ALL`** ou
    **`EXTR_PREFIX_INVALID`**.

`flags`
:   A forma como chaves inválidas/numéricas e colisões são tratadas é determinada
    pelas opções de extração definidas no parâmetro `flags`. Pode ser um dos
    seguintes valores:

    **`EXTR_OVERWRITE`**
    :   Se houver uma colisão, sobrescreve a variável existente.

    **`EXTR_SKIP`**
    :   Se houver uma colisão, não sobrescreve a variável
        existente.

    **`EXTR_PREFIX_SAME`**
    :   Se houver uma colisão, adiciona um prefixo ao nome da
        variável definido pelo argumento `prefix`.

    **`EXTR_PREFIX_ALL`**
    :   Adiciona um prefixo ao nome de todas as variáveis definido por
        `prefix`.

    **`EXTR_PREFIX_INVALID`**
    :   Adiciona um prefixo definido por `prefix` apenas
        para variáveis como nomes inválidos ou numéricos.

    **`EXTR_IF_EXISTS`**
    :   Só sobrescreve a variável se ela já existe na tabela de símbolos
        corrente, caso contrário, não faz nada. Isso é útil
        quando se quer definir uma lista de variáveis válidas e então
        extrair só as que foram definidas em
        [$\_REQUEST](reserved.variables.request.md), por exemplo.

    **`EXTR_PREFIX_IF_EXISTS`**
    :   Só cria nomes de variáveis usando o prefixo se na tabela de símbolos
        já existe uma variável com o nome sem esse prefixo.

    **`EXTR_REFS`**
    :   Extrai variáveis como referências, ou seja, os valores das variáveis
        importadas ainda estarão referenciando os valores do parâmetro
        `array`. Essa opção pode ser usada
        sozinha ou em conjunto com as outras usando o operador 'ou' em
        `flags`.

    Se `flags` não for especificado, é assumido
    o valor **`EXTR_OVERWRITE`**.

`prefix`
:   Note que `prefix` só é necessário se
    `flags` for **`EXTR_PREFIX_SAME`**,
    **`EXTR_PREFIX_ALL`**, ou **`EXTR_PREFIX_INVALID`** ou
    **`EXTR_PREFIX_IF_EXISTS`**. Se o nome com o prefixo
    não for um nome de variável válido, ela não será importada para a tabela
    de símbolos. Prefixos são automaticamente separados da chave do array pelo
    caractere de sublinhado (\_).

### Valor Retornado

Retorna o número de variáveis importadas com sucesso para a tabela de
símbolos.

### Examples

**Exemplo #1 Exemplo da **extract()****

```
<?php
$size = "large";
$var_array = array(
    "color" => "blue",
    "size"  => "medium",
    "shape" => "sphere"
);

extract($var_array, EXTR_PREFIX_SAME, "wddx");

echo "$color, $size, $shape, $wddx_size\n";

?>
```

O exemplo acima produzirá:

```
blue, large, sphere, medium
```

A variável $size não foi sobrescrita porque foi especificada a opção
**`EXTR_PREFIX_SAME`**, o que resultou na criação da variável
$wddx\_size. Se **`EXTR_SKIP`** fosse
utilizada, então $wddx\_size não seria criada.
**`EXTR_OVERWRITE`** teria feito com que
$size tivesse o valor "medium", e
**`EXTR_PREFIX_ALL`** resultaria em novas variáveis
com os nomes $wddx\_color, $wddx\_size e
$wddx\_shape.

### Notas

**Aviso**

Não use **extract()** em dados não confiáveis, como
entrada de usuário
(por exemplo, [$\_GET](reserved.variables.get.md), [$\_FILES](reserved.variables.files.md), etc.).
Se usar, certifique-se de que está usando um dos valores de
`flags` que não fazem sobrescrita como
**`EXTR_SKIP`** e tenha cuidado para que extraia
na mesma ordem que é definida em
[variables\_order](ini.core.md#ini.variables-order) no
[php.ini](ini.md).

### Veja também

- [compact()](function.compact.md) - Cria um array contendo variáveis e seus valores
- [list()](function.list.md) - Cria variáveis como se fossem arrays

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
