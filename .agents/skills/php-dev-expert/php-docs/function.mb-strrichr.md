# Encontra a última ocorrência de um caractere em uma string dentro de outra, sem diferenciar maiúsculas de minúsculas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-strrichr.php

---

# mb\_strrichr

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

mb\_strrichr — Encontra a última ocorrência de um caractere em uma string dentro de outra, sem diferenciar maiúsculas de minúsculas

### Descrição

function **mb\_strrichr**(  
    [string](language.types.string.md) `$haystack`,  
    [string](language.types.string.md) `$needle`,  
    [bool](language.types.boolean.md) `$before_needle` = **`false`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**  
): [string](language.types.string.md)|[false](language.types.singleton.md)

**mb\_strrichr()** encontra a última ocorrência de
`needle` em `haystack`
e retorna a porção de `haystack`. Ao contrário de
[mb\_strrchr()](function.mb-strrchr.md), **mb\_strrichr()** é
insensível a maiúsculas e minúsculas.
Se `needle` não for encontrada, retorna **`false`**.

### Parâmetros

`haystack`
:   A string da será obtida a última ocorrência
    de `needle`.

`needle`
:   A string a ser encontrada em `haystack`.

`before_needle`
:   Determina qual porção de `haystack`
    esta função retorna.
    Se definido como **`true`**, retorna toda `haystack`
    desde o início até a última ocorrência de `needle`.
    Se definido como **`false`**, retorna toda `haystack`
    desde a última ocorrência de `needle` até o final.

`encoding`
:   O parâmetro `encoding`
    é a codificação de caracteres. Se for omitido ou **`null`**, o valor da codificação
    de caracteres interna será usado.

### Valor Retornado

Retorna a porção de `haystack`.
ou **`false`** se `needle` não for encontrada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `needle` agora aceita uma string vazia. |
| 8.0.0 | O parâmetro `encoding` agora pode ser nulo. |

### Veja também

- [mb\_stristr()](function.mb-stristr.md) - Encontra a primeira ocorrência de uma string dentro de outra, sem diferenciar maiúsculas de minúsculas
- [mb\_strrchr()](function.mb-strrchr.md) - Encontra a última ocorrência de um caractere em uma string dentro de outra

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
