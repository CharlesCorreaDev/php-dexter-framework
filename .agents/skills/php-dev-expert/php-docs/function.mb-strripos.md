# Encontra a posição da última ocorrência de uma string em outra, sem diferenciar maiúsculas de minúsculas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-strripos.php

---

# mb\_strripos

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

mb\_strripos — Encontra a posição da última ocorrência de uma string em outra, sem diferenciar maiúsculas de minúsculas

### Descrição

function **mb\_strripos**(  
    [string](language.types.string.md) `$haystack`,  
    [string](language.types.string.md) `$needle`,  
    [int](language.types.integer.md) `$offset` = 0,  
    [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

**mb\_strripos()** realiza uma operação segura para multibyte
de [strripos()](function.strripos.md) com base no
número de caracteres. A posição de `needle`
é contada a partir do início de
`haystack`. A posição do primeiro caractere é
0. A posição do segundo caractere é 1.
Ao contrário de [mb\_strrpos()](function.mb-strrpos.md),
**mb\_strripos()** é insensível a maiúsculas e minúsculas.

### Parâmetros

`haystack`
:   A string da qual deve ser obtida a posição da última ocorrência
    de `needle`.

`needle`
:   A string a ser encontrada em `haystack`.

`offset`
:   Pode ser especificado para iniciar a busca a partir de um número arbitrário de caracteres de
    `haystack`. Valores negativos encerram a busca em um ponto arbitrário
    antes do final de `haystack`.

`encoding`
:   O parâmetro `encoding`
    é a codificação de caracteres. Se for omitido ou **`null`**, o valor da codificação
    de caracteres interna será usado.

### Valor Retornado

Retorna a posição numérica da
última ocorrência de `needle` na
string `haystack` ou **`false`**
se `needle` não for encontrada.

### Erros/Exceções

- Se `offset` for maior que o comprimento de
  `haystack`, um
  [ValueError](class.valueerror.md) será lançado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `needle` agora aceita uma string vazia. |
| 8.0.0 | O parâmetro `encoding` agora pode ser nulo. |

### Veja também

- [strripos()](function.strripos.md) - Encontra a posição da última ocorrência de uma substring em uma string, insensível a maiúsculas/minúsculas
- [strrpos()](function.strrpos.md) - Encontra a posição da última ocorrência de uma substring em uma string
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
