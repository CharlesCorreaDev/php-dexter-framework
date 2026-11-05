# Encontra a posição da última ocorrência de uma substring em uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.strrpos.php

---

# strrpos

(PHP 4, PHP 5, PHP 7, PHP 8)

strrpos — Encontra a posição da última ocorrência de uma substring em uma string

### Descrição

function **strrpos**([string](language.types.string.md) `$haystack`, [string](language.types.string.md) `$needle`, [int](language.types.integer.md) `$offset` = 0): [int](language.types.integer.md)|[false](language.types.singleton.md)

Encontra a posição numérica da última ocorrência de
`needle` na string `haystack`.

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

    Se negativo, a pesquisa inicia a `offset` bytes
    da direita ao invés do início de `haystack`.
    A pesquisa é realizada da direita para a esquerda, pesquisando pela primeira
    ocorrência de `needle` a partir do byte selecionado.
    > **Nota**:
    >
    > Efetivamente, é o mesmo que procurar pela última ocorrência de
    > `needle` antes dos últimos
    > `offset` bytes.

### Valor Retornado

Retorna a posição onde a string procurada existe relativamente ao início da
string `haystack` (independente da direção de busca
ou do deslocamento).
> **Nota**:
>
> A posições na string iniciam em 0, e não em 1.

Retorna **`false`** se a string não for encontrada.

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
| 8.0.0 | O parâmetro `needle` agora aceita uma string vazia. |
| 8.0.0 | Passar [int](language.types.integer.md) no parâmetro `needle` não é mais suportado. |
| 7.3.0 | Passar um [int](language.types.integer.md) no parâmetro `needle` foi descontinuado. |

### Examples

**Exemplo #1 Verificando se uma substring existe em uma string**

É fácil se enganar nos valores de retorno para "caracteres encontrados na
posição 0" e "caractere não encontrado". Veja como detectar
a diferença:

```
<?php
$mystring = 'Elephpant';

$pos = strrpos($mystring, "b");
if ($pos === false) { // observe: três sinais de igualdade
    // não encontrada
}

?>
```

**Exemplo #2 Pesquisa com deslocamentos**

```
<?php
$foo = "0123456789a123456789b123456789c";

// Procurando por '0' a partir do byte 0 (a partir do início)
var_dump(strrpos($foo, '0', 0));

// Procurando por '0' a partir do byte 1 (depois do byte 0)
var_dump(strrpos($foo, '0', 1));

// Procurando por '7' a partir do byte 20
var_dump(strrpos($foo, '7', 20));

// Procurando por '7' a partir do byte 28
var_dump(strrpos($foo, '7', 28));

// Procurando por '7' da direita para a esquerda a partir do 5º byte contando do final
var_dump(strrpos($foo, '7', -5));

// Procurando por 'c' da direita para a esquerda a partir do 2º byte contando do final
var_dump(strrpos($foo, 'c', -2));

// Procurando por '9c' da direita para a esquerda a partir do 2º byte condando do final
var_dump(strrpos($foo, '9c', -2));
?>
```

O exemplo acima produzirá:

```
int(0)
bool(false)
int(27)
bool(false)
int(17)
bool(false)
int(29)
```

### Veja também

- [strpos()](function.strpos.md) - Encontra a posição da primeira ocorrência de uma substring em uma string
- [stripos()](function.stripos.md) - Encontra a posição da primeira ocorrência de uma substring em uma string, de forma insensível a maiúsculas/minúsculas
- [strripos()](function.strripos.md) - Encontra a posição da última ocorrência de uma substring em uma string, insensível a maiúsculas/minúsculas
- [strrchr()](function.strrchr.md) - Encontra a última ocorrência de um caractere em uma string
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
