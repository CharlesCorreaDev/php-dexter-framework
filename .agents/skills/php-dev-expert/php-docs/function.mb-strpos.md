# Encontra a posição da primeira ocorrência de uma string em outra

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-strpos.php

---

# mb\_strpos

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

mb\_strpos — Encontra a posição da primeira ocorrência de uma string em outra

### Descrição

function **mb\_strpos**(  
    [string](language.types.string.md) `$haystack`,  
    [string](language.types.string.md) `$needle`,  
    [int](language.types.integer.md) `$offset` = 0,  
    [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

Encontra a posição da primeira ocorrência de `needle` na string de `haystack`.

Realiza uma operação
[strpos()](function.strpos.md) segura para multibyte com base no número de
caracteres. A posição do primeiro caractere é 0, a posição do segundo
caractere é 1, e assim por diante.

### Parâmetros

`haystack`
:   A string da qual será obtida a posição da primeira ocorrência
    de `needle`.

`needle`
:   A string a ser encontrada em `haystack`. Em contraste
    com [strpos()](function.strpos.md), valores numéricos não são aplicados
    como o valor ordinal de um caractere.

`offset`
:   A posição de início da pesquisa. Se não for especificada, 0 é usado.
    Uma posição negativa conta a partir do final da string no sentido contrário.

`encoding`
:   O parâmetro `encoding`
    é a codificação de caracteres. Se for omitido ou **`null`**, o valor da codificação
    de caracteres interna será usado.

### Valor Retornado

Retorna a posição numérica da
primeira ocorrência de `needle` na
[string](language.types.string.md) `haystack`. Se
`needle` não for encontrada, retorna **`false`**.

### Erros/Exceções

- Se `offset` for maior que o comprimento de
  `haystack`, um
  [ValueError](class.valueerror.md) será lançado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `needle` agora aceita uma string vazia. |
| 8.0.0 | O parâmetro `encoding` agora pode ser nulo. |
| 7.1.0 | Adicionado suporte para posições negativas no parâmetro `offset`. |

### Veja também

- [mb\_internal\_encoding()](function.mb-internal-encoding.md) - Define/Obtém a codificação de caracteres interna
- [strpos()](function.strpos.md) - Encontra a posição da primeira ocorrência de uma substring em uma string

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
