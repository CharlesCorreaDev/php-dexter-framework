# Versão insensível a maiúsculas/minúsculas de str_replace

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.str-ireplace.php

---

# str\_ireplace

(PHP 5, PHP 7, PHP 8)

str\_ireplace — Versão insensível a maiúsculas/minúsculas de [str\_replace()](function.str-replace.md)

### Descrição

function **str\_ireplace**(  
    [array](language.types.array.md)|[string](language.types.string.md) `$search`,  
    [array](language.types.array.md)|[string](language.types.string.md) `$replace`,  
    [string](language.types.string.md)|[array](language.types.array.md) `$subject`,  
    [int](language.types.integer.md) `&$count` = **`null`**  
): [string](language.types.string.md)|[array](language.types.array.md)

Esta função retorna uma string ou um array com todas as ocorrências de
`search` em `subject`
(ignorando maiúsculas e minúsculas) substituídas pelo valor `replace`
fornecido.

Para substituir texto baseado em um padrão em vez de uma string fixa,
use [preg\_replace()](function.preg-replace.md) com o [modificador de expressões regulares](reference.pcre.pattern.modifiers.md)
`i`.

### Parâmetros

Se `search` e `replace` forem
arrays, **str\_ireplace()** pega um valor de cada
array e os usa para pesquisar e substituir em
`subject`. Se `replace` tiver menos
valores que `search`, uma string vazia será usada para
o restante dos valores de substituição. Se `search` for um
array e `replace` for uma string, esta string de
substituição será usada para cada valor de `search`. O
inverso não faria sentido, no entanto.

Se `search` ou `replace`
forem arrays, seus elementos serão processados ​​do primeiro ao último.

`search`
:   O valor que está sendo pesquisado, também conhecido como
    *agulha*. Um array pode ser usado para designar
    múltiplas agulhas.

`replace`
:   O valor de substituição que substitui os valores de `search`
    encontrados. Um array pode ser usado para designar múltiplas substituições.

`subject`
:   A string ou array sendo pesquisado e substituído,
    também conhecido como o *palheiro*.

    Se `subject` for um array, a pesquisa e
    a substituição são realizadas com cada entrada de
    `subject`, e o valor de retorno é também
    um array.

`count`
:   Se informado, será definido como o número de substituições realizadas.

### Valor Retornado

Retorna uma string ou um array de substituições.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | A redução de todas as letras a maiúsculas ou minúsculas não depende mais da localidade definida com [setlocale()](function.setlocale.md). Somente a redução de todas as letras ASCII a maiúsculas ou minúsculas será feita. Os bytes não ASCII serão comparados por seu valor de byte. |

### Examples

**Exemplo #1 Exemplo de **str\_ireplace()****

```
<?php
$bodytag = str_ireplace("%body%", "black", "<body text=%BODY%>");
echo $bodytag; // <body text=black>
?>
```

### Notas

> **Nota**:
>
> Esta função é
> compatível com dados binários.

**Cuidado**

# Armadilha na ordem de substituição

Como **str\_ireplace()** substitui da esquerda para a direita, ela pode
substituir um valor inserido anteriormente ao realizar múltiplas substituições.
O exemplo #2 na documentação da função [str\_replace()](function.str-replace.md)
demonstra o efeito disto na prática.

### Veja também

- [str\_replace()](function.str-replace.md) - Substitui todas as ocorrências da string de pesquisa com a string de substituição
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
