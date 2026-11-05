# Localiza a posição da primeira ocorrência de um caractere em uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.iconv-strpos.php

---

# iconv\_strpos

(PHP 5, PHP 7, PHP 8)

iconv\_strpos — Localiza a posição da primeira ocorrência de um caractere em uma string

### Descrição

function **iconv\_strpos**(  
    [string](language.types.string.md) `$haystack`,  
    [string](language.types.string.md) `$needle`,  
    [int](language.types.integer.md) `$offset` = 0,  
    [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

Localiza a posição da primeira ocorrência de um `needle`
em um `haystack`.

Em contraste com [strpos()](function.strpos.md), o valor de retorno de
**iconv\_strpos()** é o número de caracteres que
aparecem antes da agulha, em vez do deslocamento em bytes para a
posição onde a agulha foi encontrada. Os caracteres são contados
com base no `encoding` do conjunto de caracteres especificado.

### Parâmetros

`haystack`
:   A string inteira.

`needle`
:   A substring pesquisada.

`offset`
:   O parâmetro `offset` opcional especifica
    a posição a partir da qual a pesquisa deve ser realizada.
    Se o offset for negativo, ele será contado a partir do final da string.

`encoding`
:   Se o parâmetro `encoding` for omitido ou **`null`**,
    presume-se que a `string` esteja codificada em
    [iconv.internal\_encoding](iconv.configuration.md).

Se `haystack` ou `needle`
não for uma string, ela será convertida em uma string e
aplicada como o valor ordinal de um caractere.

### Valor Retornado

Retorna a posição numérica da primeira ocorrência de
`needle` em `haystack`.

Se `needle` não for encontrada,
**iconv\_strpos()** retornará **`false`**.

**Aviso**

Esta função pode
retornar o valor booleano **`false`**, mas também pode retornar um valor não booleano que pode ser
avaliado como **`false`**. Leia a seção sobre [Booleanos](language.types.boolean.md) para mais
informações. Use o [operador
===](language.operators.comparison.md) para testar o valor retornado por esta
função.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `encoding` é anulável agora. |
| 7.1.0 | O suporte para `offset`s negativas foi adicionado. |

### Veja também

- [strpos()](function.strpos.md) - Encontra a posição da primeira ocorrência de uma substring em uma string
- [iconv\_strrpos()](function.iconv-strrpos.md) - Localiza a última ocorrência de um caractere em uma string
- [mb\_strpos()](function.mb-strpos.md) - Encontra a posição da primeira ocorrência de uma string em outra

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
