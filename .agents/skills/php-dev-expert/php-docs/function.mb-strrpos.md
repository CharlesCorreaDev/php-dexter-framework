# Encontra a posição da última ocorrência de uma string em outra string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-strrpos.php

---

# mb\_strrpos

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

mb\_strrpos — Encontra a posição da última ocorrência de uma string em outra string

### Descrição

function **mb\_strrpos**(  
    [string](language.types.string.md) `$haystack`,  
    [string](language.types.string.md) `$needle`,  
    [int](language.types.integer.md) `$offset` = 0,  
    [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

Realiza uma operação segura para multibyte
[strrpos()](function.strrpos.md) com base no
número de caracteres. A posição de `needle`
é contada a partir do início de
`haystack`. A posição do primeiro caractere é
0. A posição do segundo caractere é 1.

### Parâmetros

`haystack`
:   A [string](language.types.string.md) que está sendo verificada, para a última ocorrência
    de `needle`

`needle`
:   A [string](language.types.string.md) a ser encontrada em `haystack`.

`offset`
:   Pode ser especificado para começar a busca a partir de um número arbitrário de caracteres
    em `haystack`. Valores negativos interromperão a busca em um ponto arbitrário
    antes do final de `haystack`.

`encoding`
:   O parâmetro `encoding`
    é a codificação de caracteres. Se for omitido ou **`null`**, o valor da codificação
    de caracteres interna será usado.

### Valor Retornado

Retorna a posição numérica da
última ocorrência de `needle` na
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
| 8.0.0 | O envio de `encoding` como terceiro argumento em vez de `offset` foi removido. |
| 8.0.0 | O parâmetro `encoding` agora pode ser nulo. |

### Veja também

- [mb\_strpos()](function.mb-strpos.md) - Encontra a posição da primeira ocorrência de uma string em outra
- [mb\_internal\_encoding()](function.mb-internal-encoding.md) - Define/Obtém a codificação de caracteres interna
- [strrpos()](function.strrpos.md) - Encontra a posição da última ocorrência de uma substring em uma string

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
