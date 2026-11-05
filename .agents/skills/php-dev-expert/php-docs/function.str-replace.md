# Substitui todas as ocorrências da string de pesquisa com a string de substituição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.str-replace.php

---

# str\_replace

(PHP 4, PHP 5, PHP 7, PHP 8)

str\_replace — Substitui todas as ocorrências da string de pesquisa com a string de substituição

### Descrição

function **str\_replace**(  
    [array](language.types.array.md)|[string](language.types.string.md) `$search`,  
    [array](language.types.array.md)|[string](language.types.string.md) `$replace`,  
    [string](language.types.string.md)|[array](language.types.array.md) `$subject`,  
    [int](language.types.integer.md) `&$count` = **`null`**  
): [string](language.types.string.md)|[array](language.types.array.md)

Esta função retorna uma string ou um array com todas as ocorrências de
`search` em `subject`
substituídas com o valor informado em `replace`.

Para substituir texto baseado em um padrão que não seja uma string
fixa, use [preg\_replace()](function.preg-replace.md).

### Parâmetros

Se `search` e `replace` forem
arrays, então **str\_replace()** pega um valor de cada array
e os usa para pesquisar e substituir em `subject`. Se
`replace` tiver menos valores do que
`search`, então uma string vazia é usada para o restante dos
valores de substituição. Se `search` for um array e
`replace` for uma string, então esta string de substituição é
usada para cada valor de `search`. O contrário não
faria sentido, contudo.

Se `search` ou `replace`
forem arrays, seus elementos são processados do primeiro ao último.

`search`
:   O valor sendo pesquisado, também conhecido como *agulha*.
    Um array pode ser usado para designar múltiplas agulhas.

`replace`
:   O valor de substituição que será usado no lugar dos valores de `search`
    encontrados. Um array pode ser usado para deignar múltiplas substituições.

`subject`
:   A string ou array sendo pesquisado ou substituído,
    também conhecido como o *palheiro*.

    Se `subject` for um array, então a pesquisa e
    a substituição são executadas com cada entrada de
    `subject`, e o valor de retorno é um array
    também.

`count`
:   Se passado, será definido para o número de substituições realizadas.

### Valor Retornado

Esta função retorna uma string ou um array com os valores substituídos.

### Examples

**Exemplo #1 Exemplos básicos de **str\_replace()****

```
<?php
// Produz: <body text='black'>
$bodytag = str_replace("%body%", "black", "<body text='%body%'>");
echo $bodytag, PHP_EOL;

// Produz: Hll Wrld f PHP
$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
echo $onlyconsonants, PHP_EOL;

// Produz: Você deveria comer pizza, cerveja e sorvete todos os dias.
$frase    = "Você deveria comer frutas, vegetais, e fibra todos os dias.";
$saudavel = array("frutas", "vegetais", "fibra");
$saboroso = array("pizza", "cerveja", "sorvete");

$novafrase = str_replace($saudavel, $saboroso, $frase);
echo $novafrase, PHP_EOL;

// Produz: 2
$str = str_replace("ll", "", "good golly miss molly!", $count);
echo $count, PHP_EOL;
?>
```

**Exemplo #2 Exemplos de armadilhas potenciais de **str\_replace()****

```
<?php
// Ordem da substituição
$str     = "Linha 1\nLinha 2\rLinha 3\r\nLinha 4\n";
$order   = array("\r\n", "\n", "\r");
$replace = '<br />';

// Processa \r\n primeiro para que não sejam substituídos duas vezes.
$newstr = str_replace($order, $replace, $str);
echo $newstr, PHP_EOL;

// Mostra F porque A é substituído por B, depois B é substituído por C, e assim por diante...
// Finalmente E é substituído por F, porque a substituição é feita da esquerda para a direita.
$search  = array('A', 'B', 'C', 'D', 'E');
$replace = array('B', 'C', 'D', 'E', 'F');
$subject = 'A';
echo str_replace($search, $replace, $subject), PHP_EOL;

// Mostra: apearpearle pear
// Pelo memos motivo mencionado acima
$letters = array('a', 'p');
$fruit   = array('apple', 'pear');
$text    = 'a p';
$output  = str_replace($letters, $fruit, $text);
echo $output, PHP_EOL;
?>
```

### Notas

> **Nota**:
>
> Esta função é
> compatível com dados binários.

**Cuidado**

# Armadilha da ordem de substituição

Como **str\_replace()** substitui da esquerda para a direita, ela pode
substituir um valor previamente inserido quando estiver fazendo múltiplas substituições.
Veja também os exemplos neste documento.

> **Nota**:
>
> Esta função é sensível a maiúsculas/minúsculas. Use [str\_ireplace()](function.str-ireplace.md)
> para substituição insensível a maiúsculas/minúsculas.

### Veja também

- [str\_ireplace()](function.str-ireplace.md) - Versão insensível a maiúsculas/minúsculas de str\_replace
- [substr\_replace()](function.substr-replace.md) - Substitui o texto dentro de uma parte de uma string
- [preg\_replace()](function.preg-replace.md) - Realiza uma pesquisa por uma expressão regular e substitui
- [strtr()](function.strtr.md) - Traduz caracteres ou substitui substrings

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
