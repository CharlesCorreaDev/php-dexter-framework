# Encontra a posição da primeira ocorrência de uma string dentro de outra, sem diferenciar maiúsculas de minúsculas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-stripos.php

---

# mb\_stripos

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

mb\_stripos — Encontra a posição da primeira ocorrência de uma string dentro de outra, sem diferenciar maiúsculas de minúsculas

### Descrição

function **mb\_stripos**(  
    [string](language.types.string.md) `$haystack`,  
    [string](language.types.string.md) `$needle`,  
    [int](language.types.integer.md) `$offset` = 0,  
    [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

**mb\_stripos()** retorna a posição numérica da
primeira ocorrência de `needle` na
string `haystack`.
Ao contrário de [mb\_strpos()](function.mb-strpos.md),
**mb\_stripos()** não faz distinção entre maiúsculas e minúsculas.
Se `needle` não for encontrado, retorna **`false`**.

### Parâmetros

`haystack`
:   A string da qual deve ser obtida a posição da primeira ocorrência
    de `needle`

`needle`
:   A string a ser encontrada em `haystack`

`offset`
:   A posição em `haystack`
    a partir da qual a pesquisa deve ser iniciada.
    Um valor negativo é contado no sentido contrário a partir do final da string.

`encoding`
:   O parâmetro `encoding`
    é a codificação de caracteres. Se for omitido ou **`null`**, o valor da codificação
    de caracteres interna será usado.

### Valor Retornado

Retorna a posição numérica da primeira ocorrência de
`needle` na string `haystack`,
ou **`false`** se `needle` não for encontrado.

### Erros/Exceções

- Se `offset` for maior que o comprimento de
  `haystack`, um
  [ValueError](class.valueerror.md) será lançado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `needle` agora aceita uma string vazia. |
| 8.0.0 | O parâmetro `encoding` agora pode ser nulo. |
| 7.1.0 | Adicionado suporte para `offset` negativo. |

### Veja também

- [stripos()](function.stripos.md) - Encontra a posição da primeira ocorrência de uma substring em uma string, de forma insensível a maiúsculas/minúsculas
- [strpos()](function.strpos.md) - Encontra a posição da primeira ocorrência de uma substring em uma string
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
