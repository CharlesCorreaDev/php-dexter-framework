# Encontra a posição da última ocorrência de uma substring em uma string, insensível a maiúsculas/minúsculas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.strripos.php

---

# strripos

(PHP 5, PHP 7, PHP 8)

strripos — Encontra a posição da última ocorrência de uma substring em uma string, insensível a maiúsculas/minúsculas

### Descrição

function **strripos**([string](language.types.string.md) `$haystack`, [string](language.types.string.md) `$needle`, [int](language.types.integer.md) `$offset` = 0): [int](language.types.integer.md)|[false](language.types.singleton.md)

Encontra a posição numérica da última ocorrência de
`needle` na string `haystack`.

Diferentemente de [strrpos()](function.strrpos.md), **strripos()** é
insensível a maiúsculas/minúsculas.

### Parâmetros

`haystack`
:   A string onde a substring será procurada.

`needle`
:   A substring procurada.

    Antes do PHP 8.0.0, se `needle` não for uma string, ela será convertida
    para um número inteiro e aplicada como o valor ordinal de um caractere.
    Este comportamento foi descontinuado a partir do PHP 7.3.0 e depender dele é altamente
    desaconselhado. Dependendo do comportamento pretendido, o parâmetro
    `needle` deve ser explicitamente convertido em string
    ou uma chamada explícita para [chr()](function.chr.md) deve ser realizada.

`offset`
:   Se zero ou positivo, a pesquisa é realizada da esquerda para a direita pulando os
    primeiros `offset` bytes de
    `haystack`.

    Se negativo, a pesquisa é realizada da direita para a esquerda pulando os
    últimos `offset` bytes de
    `haystack` e pesquisando pela primeira ocorrência
    de `needle`.
    > **Nota**:
    >
    > Efetivamente, é o mesmo que procurar pela última ocorrência de
    > `needle` antes dos últimos
    > `offset` bytes.

### Valor Retornado

Retorna a posição onde a string procurada `needle` existe relativamente ao início da
string `haystack` (independente da direção de busca
ou de `offset`).
> **Nota**:
>
> A posições na string iniciam em 0, e não em 1.

Retorna **`false`** se a string em `needle` não for encontrada.

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
| 8.0.0 | Passar [int](language.types.integer.md) no parâmetro `needle` não é mais suportado. |
| 7.3.0 | Passar um [int](language.types.integer.md) no parâmetro `needle` foi descontinuado. |

### Examples

**Exemplo #1 Um exemplo simples de **strripos()****

```
<?php

$haystack = 'ababcd';
$needle   = 'aB';

$pos      = strripos($haystack, $needle);

if ($pos === false) {
    echo "Desculpe, não encontramos `$needle` em `$haystack`";
} else {
    echo "Parabéns!\n";
    echo "Encontramos a última ocorrência de `$needle` em `$haystack` na posição `$pos`";
}

?>
```

O exemplo acima produzirá:

```
Parabéns!
Encontramos a última ocorrência de `aB` em `ababcd` na posição `2`
```

### Veja também

- [strpos()](function.strpos.md) - Encontra a posição da primeira ocorrência de uma substring em uma string
- [stripos()](function.stripos.md) - Encontra a posição da primeira ocorrência de uma substring em uma string, de forma insensível a maiúsculas/minúsculas
- [strrpos()](function.strrpos.md) - Encontra a posição da última ocorrência de uma substring em uma string
- [strrchr()](function.strrchr.md) - Encontra a última ocorrência de um caractere em uma string
- [stristr()](function.stristr.md) - strstr insensível a maiúsculas/minúsculas
- [substr()](function.substr.md) - Retorna parte de uma string

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
