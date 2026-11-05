# Encontra a primeira ocorrência de uma string em outra

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-strstr.php

---

# mb\_strstr

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

mb\_strstr — Encontra a primeira ocorrência de uma string em outra

### Descrição

function **mb\_strstr**(  
    [string](language.types.string.md) `$haystack`,  
    [string](language.types.string.md) `$needle`,  
    [bool](language.types.boolean.md) `$before_needle` = **`false`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**  
): [string](language.types.string.md)|[false](language.types.singleton.md)

**mb\_strstr()** encontra a primeira ocorrência de
`needle` em `haystack`
e retorna a porção de `haystack`.
Se `needle` não for encontrado, retorna **`false`**.

### Parâmetros

`haystack`
:   A string da qual obter a primeira ocorrência
    de `needle`

`needle`
:   A string a ser encontrada em `haystack`

`before_needle`
:   Determina qual parte de `haystack`
    essa função retorna.
    Se definido como **`true`**, retorna toda a `haystack`
    desde o início até a primeira ocorrência de `needle` (excluindo needle).
    Se definido como **`false`**, retorna toda a `haystack`
    da primeira ocorrência de `needle` até o final (incluindo needle).

`encoding`
:   O parâmetro `encoding`
    é a codificação de caracteres. Se for omitido ou **`null`**, o valor da codificação
    de caracteres interna será usado.

### Valor Retornado

Retorna a porção de `haystack`,
ou **`false`** se `needle` não for encontrado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `needle` agora aceita uma string vazia. |
| 8.0.0 | O parâmetro `encoding` agora pode ser nulo. |

### Veja também

- [stristr()](function.stristr.md) - strstr insensível a maiúsculas/minúsculas
- [strstr()](function.strstr.md) - Encontra a primeira ocorrência de uma string
- [mb\_stristr()](function.mb-stristr.md) - Encontra a primeira ocorrência de uma string dentro de outra, sem diferenciar maiúsculas de minúsculas

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
