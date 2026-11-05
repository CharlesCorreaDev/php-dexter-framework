# Verifica se um valor existe em um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.in-array.php

---

# in\_array

(PHP 4, PHP 5, PHP 7, PHP 8)

in\_array — Verifica se um valor existe em um array

### Descrição

function **in\_array**([mixed](language.types.mixed.md) `$needle`, [array](language.types.array.md) `$haystack`, [bool](language.types.boolean.md) `$strict` = **`false`**): [bool](language.types.boolean.md)

Procura por `needle` (agulha) no `haystack` (palheiro) usando comparação relaxada
a não ser que `strict` seja definido.

### Parâmetros

`needle`
:   O valor procurado.

    > **Nota**:
    >
    > Se `needle` for uma string, a comparação é feita
    > diferenciando caracteres maiúsculos e minúsculos.

`haystack`
:   O array.

`strict`
:   Se o terceiro parâmetro `strict` for **`true`** então
    **in\_array()** também irá checar os [tipos](language.types.md) de `needle` em
    `haystack`.

    > **Nota**:
    >
    > Antes do PHP 8.0.0, uma `needle` `string` irá corresponder a um valor
    > de `0` no array em modo não estrito, e vice-versa. Isso pode levar a resultados
    > indesejáveis. Casos extremos similares exitem para outros tipos, também. Se não houver certeza absoluta dos
    > tipos dos valores envolvidos, a opção `strict` deve ser sempre usada para evitar comportamento inesperado.

### Valor Retornado

Retorna **`true`** se `needle` for encontrado no array,
**`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **in\_array()****

```
<?php
$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Tem Irix";
}
if (in_array("mac", $os)) {
    echo "Tem mac";
}
?>
```

A segunda condicional falha pois **in\_array()**
diferencia letras minúsculas e maiúsculas. Então, a saída seria:

```
Tem Irix
```

**Exemplo #2 **in\_array()** com verificação de tipos**

```
<?php
$a = array('1.10', 12.4, 1.13);

if (in_array('12.4', $a, true)) {
    echo "'12.4' encontrado com verificação de tipo\n";
}

if (in_array(1.13, $a, true)) {
    echo "1.13 encontrado com verificação de tipo\n";
}
?>
```

O exemplo acima produzirá:

```
1.13 encontrado com verificação de tipo
```

**Exemplo #3 Exemplo de **in\_array()** passando um array como agulha**

```
<?php
$a = array(array('p', 'h'), array('p', 'r'), 'o');

if (in_array(array('p', 'h'), $a)) {
    echo "'ph' foi encontrado\n";
}

if (in_array(array('f', 'i'), $a)) {
    echo "'fi' foi encontrado\n";
}

if (in_array('o', $a)) {
    echo "'o' foi encontrado\n";
}
?>
```

O exemplo acima produzirá:

```
'ph' foi encontrado
'o' foi encontrado
```

### Veja também

- [array\_search()](function.array-search.md) - Procura por um valor em um array e retorna sua chave correspondente caso seja encontrado
- [isset()](function.isset.md) - Determina se uma variável está declarada e é diferente de null
- [array\_key\_exists()](function.array-key-exists.md) - Verifica se uma chave ou índice existe em um array

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
