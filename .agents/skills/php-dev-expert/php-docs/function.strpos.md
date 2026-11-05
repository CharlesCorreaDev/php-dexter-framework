# Encontra a posição da primeira ocorrência de uma substring em uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.strpos.php

---

# strpos

(PHP 4, PHP 5, PHP 7, PHP 8)

strpos — Encontra a posição da primeira ocorrência de uma substring em uma string

### Descrição

function **strpos**([string](language.types.string.md) `$haystack`, [string](language.types.string.md) `$needle`, [int](language.types.integer.md) `$offset` = 0): [int](language.types.integer.md)|[false](language.types.singleton.md)

Encontra a posição numérica da primeira ocorrência de
`needle` na string `haystack`.

### Parâmetros

`haystack`
:   A string onde a substring será pesquisada.

`needle`
:   A substring a ser procurada.

    Antes do PHP 8.0.0, se `needle` não for uma string, ela será convertida
    para um número inteiro e aplicada como o valor ordinal de um caractere.
    Este comportamento foi descontinuado a partir do PHP 7.3.0 e depender dele é altamente
    desaconselhado. Dependendo do comportamento pretendido, o parâmetro
    `needle` deve ser explicitamente convertido em string
    ou uma chamada explícita para [chr()](function.chr.md) deve ser realizada.

`offset`
:   Se especificado, a pesquisa iniciará nessa posição de caractere contada a partir
    do início da string. Se for negativo, a pesquisa iniciará
    nessa posição de caractere contada a partir do final da string.

### Valor Retornado

Retorna a posição em que a substring existe relativa ao início da
string `haystack` (independente do `offset`).
Observe também que as posições de string iniciam em `0`, e não em `1`.

Retorna **`false`** se a substring não for encontrada.

**Aviso**

Esta função pode
retornar o valor booleano **`false`**, mas também pode retornar um valor não booleano que pode ser
avaliado como **`false`**. Leia a seção sobre [Booleanos](language.types.boolean.md) para mais
informações. Use o [operador
===](language.operators.comparison.md) para testar o valor retornado por esta
função.

### Erros/Exceções

- Se `offset` for maior que o comprimento de
  `haystack`, um
  [ValueError](class.valueerror.md) será lançado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `needle` agora aceita uma string vazia. |
| 8.0.0 | Passar um [int](language.types.integer.md) em `needle` não é mais suportado. |
| 7.3.0 | Passar um [int](language.types.integer.md) em `needle` foi descontinuado. |
| 7.1.0 | Suporte a `offset` negativo foi adicionado. |

### Examples

**Exemplo #1 Usando `===`**

```
<?php
$mystring = 'abc';
$findme   = 'a';
$pos = strpos($mystring, $findme);

// Observe o uso de ===. Simplesmente == não funcionaria como esperado
// porque o caractere 'a' fica na posição 0 (primeira) da string.
if ($pos === false) {
    echo "A string '$findme' não foi encontrada em '$mystring'";
} else {
    echo "A string '$findme' foi encontrada em '$mystring'";
    echo " e existe na posição $pos";
}
?>
```

**Exemplo #2 Usando !==**

```
<?php
$mystring = 'abc';
$findme   = 'a';
$pos = strpos($mystring, $findme);

// O operador !== também pode ser usado. Usar != não funcionaria como esperado
// porque a posição de 'a' é 0. A comparação (0 != false) é avaliada
// como falsa.
if ($pos !== false) {
     echo "A string '$findme' foi encontrada em '$mystring'";
         echo " e existe na posição $pos";
} else {
     echo "A string '$findme' não foi encontrada em '$mystring'";
}
?>
```

**Exemplo #3 Usando um deslocamento**

```
<?php
// Pode-se procurar um caractere, ignorando tudo antes do deslocamento
$newstring = 'abcdef abcdef';
$pos = strpos($newstring, 'a', 1); // $pos = 7, e não 0

echo $pos, PHP_EOL;
?>
```

### Notas

> **Nota**:
>
> Esta função é
> compatível com dados binários.

### Veja também

- [stripos()](function.stripos.md) - Encontra a posição da primeira ocorrência de uma substring em uma string, de forma insensível a maiúsculas/minúsculas
- [str\_contains()](function.str-contains.md) - Determina se uma string contém uma substring fornecida
- [str\_ends\_with()](function.str-ends-with.md) - Verifica se uma string termina com uma substring fornecida
- [str\_starts\_with()](function.str-starts-with.md) - Verifica se uma string começa com uma substring fornecida
- [strrpos()](function.strrpos.md) - Encontra a posição da última ocorrência de uma substring em uma string
- [strripos()](function.strripos.md) - Encontra a posição da última ocorrência de uma substring em uma string, insensível a maiúsculas/minúsculas
- [strstr()](function.strstr.md) - Encontra a primeira ocorrência de uma string
- [strpbrk()](function.strpbrk.md) - Procura na string por um dos caracteres de um conjunto
- [substr()](function.substr.md) - Retorna parte de uma string
- [preg\_match()](function.preg-match.md) - Realiza uma correspondência com expressão regular

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
