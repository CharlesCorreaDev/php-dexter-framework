# Localiza a última ocorrência de um caractere em uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.iconv-strrpos.php

---

# iconv\_strrpos

(PHP 5, PHP 7, PHP 8)

iconv\_strrpos — Localiza a última ocorrência de um caractere em uma string

### Descrição

function **iconv\_strrpos**([string](language.types.string.md) `$haystack`, [string](language.types.string.md) `$needle`, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [int](language.types.integer.md)|[false](language.types.singleton.md)

Localiza a última ocorrência de `needle`
em `haystack`.

Em contraste com [strrpos()](function.strrpos.md), o valor de retorno de
**iconv\_strrpos()** é o número de caracteres que aparecem antes de
needle, em vez do deslocamento em bytes para a posição onde
needle foi encontrada. Os caracteres são contados
com base no `encoding` do conjunto de caracteres especificado.

### Parâmetros

`haystack`
:   The string inteira.

`needle`
:   A substring pesquisada.

`encoding`
:   Se o parâmetro `encoding` for omitido ou **`null`**,
    presume-se que a `string` esteja codificada em
    [iconv.internal\_encoding](iconv.configuration.md).

Se `haystack` ou `needle`
não for uma string, ela será convertida em uma string e aplicada
como o valor ordinal de um caractere.

### Valor Retornado

Retorna a posição numérica da última ocorrência de
`needle` em `haystack`.

Se `needle` não for encontrada,
**iconv\_strrpos()** retornará **`false`**.

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

### Veja também

- [strrpos()](function.strrpos.md) - Encontra a posição da última ocorrência de uma substring em uma string
- [iconv\_strpos()](function.iconv-strpos.md) - Localiza a posição da primeira ocorrência de um caractere em uma string
- [mb\_strrpos()](function.mb-strrpos.md) - Encontra a posição da última ocorrência de uma string em outra string

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
