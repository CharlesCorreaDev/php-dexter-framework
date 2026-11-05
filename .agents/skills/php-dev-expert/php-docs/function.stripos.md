# Encontra a posição da primeira ocorrência de uma substring em uma string, de forma insensível a maiúsculas/minúsculas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stripos.php

---

# stripos

(PHP 5, PHP 7, PHP 8)

stripos — Encontra a posição da primeira ocorrência de uma substring em uma string, de forma insensível a maiúsculas/minúsculas

### Descrição

function **stripos**([string](language.types.string.md) `$haystack`, [string](language.types.string.md) `$needle`, [int](language.types.integer.md) `$offset` = 0): [int](language.types.integer.md)|[false](language.types.singleton.md)

Encontra a posição da primeira ocorrência de
`needle` na string `haystack`.

Diferentemente de [strpos()](function.strpos.md), **stripos()** é
insensível a maiúsculas/minúsculas.

### Parâmetros

`haystack`
:   A string onde a substring será procurada.

`needle`
:   A substring sendo pesquisada.

    Antes do PHP 8.0.0, se `needle` não for uma string, ela será convertida
    para um número inteiro e aplicada como o valor ordinal de um caractere.
    Este comportamento foi descontinuado a partir do PHP 7.3.0 e depender dele é altamente
    desaconselhado. Dependendo do comportamento pretendido, o parâmetro
    `needle` deve ser explicitamente convertido em string
    ou uma chamada explícita para [chr()](function.chr.md) deve ser realizada.

`offset`
:   Se especificado, a pesquisa iniciará nesse número de caracteres contados a partir
    do início da string. Se o deslocamento for negativo, a busca iniciará
    nesse número de caracteres contados a partir do final da string.

### Valor Retornado

Retorna a posição onde a substring pesquisada existe em relação ao início da
string `haystack` (independente do deslocamento).
Observe também que as posições das strings começam em 0 e não em 1.

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
| 8.2.0 | A redução de todas as letras a maiúsculas ou minúsculas não depende mais da localidade definida com [setlocale()](function.setlocale.md). Somente a redução de todas as letras ASCII a maiúsculas ou minúsculas será feita. Os bytes não ASCII serão comparados por seu valor de byte. |
| 8.0.0 | O parâmetro `needle` agora aceita uma string vazia. |
| 8.0.0 | Passar um [int](language.types.integer.md) em `needle` não é mais suportado. |
| 7.3.0 | Passar um [int](language.types.integer.md) em `needle` foi descontinuado. |
| 7.1.0 | Suporte para valores negativos em `offset` foi adicionado. |

### Examples

**Exemplo #1 Exemplos de **stripos()****

```
<?php
$findme    = 'a';
$mystring1 = 'xyz';
$mystring2 = 'ABC';

$pos1 = stripos($mystring1, $findme);
$pos2 = stripos($mystring2, $findme);

// Não, 'a' certamente não existe em 'xyz'
if ($pos1 === false) {
    echo "A string '$findme' não foi encontrada na string '$mystring1'", PHP_EOL;
}

// Observe o uso de !==.  Simplesmente != não iria funcionar como esperado
// porque a posição de 'a' é na posição 0 (primeiro) caractere.
if ($pos2 !== false) {
    echo "Encontrado '$findme' em '$mystring2' na posição $pos2", PHP_EOL;
}
?>
```

### Notas

> **Nota**:
>
> Esta função é
> compatível com dados binários.

### Veja também

- [mb\_stripos()](function.mb-stripos.md) - Encontra a posição da primeira ocorrência de uma string dentro de outra, sem diferenciar maiúsculas de minúsculas
- [str\_contains()](function.str-contains.md) - Determina se uma string contém uma substring fornecida
- [str\_ends\_with()](function.str-ends-with.md) - Verifica se uma string termina com uma substring fornecida
- [str\_starts\_with()](function.str-starts-with.md) - Verifica se uma string começa com uma substring fornecida
- [strpos()](function.strpos.md) - Encontra a posição da primeira ocorrência de uma substring em uma string
- [strrpos()](function.strrpos.md) - Encontra a posição da última ocorrência de uma substring em uma string
- [strripos()](function.strripos.md) - Encontra a posição da última ocorrência de uma substring em uma string, insensível a maiúsculas/minúsculas
- [stristr()](function.stristr.md) - strstr insensível a maiúsculas/minúsculas
- [substr()](function.substr.md) - Retorna parte de uma string
- [str\_ireplace()](function.str-ireplace.md) - Versão insensível a maiúsculas/minúsculas de str\_replace

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
