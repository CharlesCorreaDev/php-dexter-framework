# Encontra o comprimento do segmento inicial de uma string composta
   totalmente de caracteres contidos em uma máscara informada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.strspn.php

---

# strspn

(PHP 4, PHP 5, PHP 7, PHP 8)

strspn — 
Encontra o comprimento do segmento inicial de uma string composta
totalmente de caracteres contidos em uma máscara informada

### Descrição

function **strspn**(  
    [string](language.types.string.md) `$string`,  
    [string](language.types.string.md) `$characters`,  
    [int](language.types.integer.md) `$offset` = 0,  
    [?](language.types.null.md)[int](language.types.integer.md) `$length` = **`null`**  
): [int](language.types.integer.md)

Encontra o comprimento do segmento inicial da `string`
que contenha *somente* caracteres contidos em `characters`.

Se `offset` e `length`
forem omitidos, então toda a `string` será
examinada. Se forem incluídos, o efeito será o mesmo que
chamar `strspn(substr($string, $offset, $length),
$characters)` (consulte [substr](function.substr.md)
para mais informações).

A linha de código:

```
<?php
$var = strspn("42 is the answer to the 128th question.", "1234567890");
?>
```

atribuirá `2` para $var,
porque a string "42" é o segmento inicial
de `string` que consiste somente de caracteres
contidos em "1234567890".

### Parâmetros

`string`
:   A primeira string a ser examinada.

`characters`
:   A lista de caracteres permitidos.

`offset`
:   A posição na `string` para
    iniciar a pesquisa.

    Se `offset` for informado e não negativo,
    a função **strspn()** começará a
    examinar a `string` na posição
    `offset`. Por exemplo, na
    string '`abcdef`', o caractere na
    posição `0` é '`a`', na
    posição `2` é
    '`c`', e assim por diante.

    Se `offset` for informado e negativo,
    a função **strspn()** começará a
    examinar a `string` na posição
    `offset` a partir do final
    da `string`.

`length`
:   O tamanho do segmento da `string`
    a ser examinado.

    Se `length` for informado e não negativo,
    a `string` será examinada pelo
    número de caracteres em `length` a partir
    da posição inicial.

    Se `length` for informado e negativo,
    a `string` será examinada a partir
    da posição inicial até o número de caracteres informado em `length`
    contados a partir do final da `string`.

### Valor Retornado

Retorna o comprimento do segmento inicial de `string`
que consistir inteiramente dos caracteres definidos em `characters`.

> **Nota**:
>
> Quando o parâmetro `offset` estiver definido, o comprimento retornado
> é contado iniciando-se desta posição, não do início da
> `string`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `length` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de **strspn()****

```
<?php
// string não começa com nenhum dos caracteres da máscara
var_dump(strspn("foo", "o"));

// examina dois caracteres da string iniciando na posição 1
var_dump(strspn("foo", "o", 1, 2));

// examina um caractere da string iniciando na posição 1
var_dump(strspn("foo", "o", 1, 1));
?>
```

O exemplo acima produzirá:

```
int(0)
int(2)
int(1)
```

### Notas

> **Nota**:
>
> Esta função é
> compatível com dados binários.

### Veja também

- [strcspn()](function.strcspn.md) - Encontra o tamanho do segmento inicial que não corresponde à máscara

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
