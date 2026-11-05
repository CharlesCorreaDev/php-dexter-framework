# Verifica se os caracteres são espaço em branco

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ctype-space.php

---

# ctype\_space

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

ctype\_space — Verifica se os caracteres são espaço em branco

### Descrição

function **ctype\_space**([mixed](language.types.mixed.md) `$text`): [bool](language.types.boolean.md)

Verifica se todos os caracteres na [string](language.types.string.md) fornecida,
`text`, são espaços em branco.

### Parâmetros

`text`
:   A string a ser testada.
    > **Nota**:
    >
    > Se um [int](language.types.integer.md) entre -128 e 255 inclusive for fornecido, ele será interpretado como
    > o valor ASCII de um único caractere (valores negativos são somados a 256 para permitir
    > caracteres no intervalo ASCII estendido). Qualquer outro inteiro será interpretado como uma string
    > contendo os dígitos decimais do inteiro.

    **Aviso**

    A partir do PHP 8.1.0, passar um argumento que não seja string foi descontinuado.
    No futuro, o argumento será interpretado como uma string em vez de um ponto de código ASCII.
    Dependendo do comportamento esperado, o argumento deve ser convertido para [string](language.types.string.md)
    ou uma chamada explícita para [chr()](function.chr.md) deve ser feita.

### Valor Retornado

Retorna **`true`** se todos caracteres em `text`
são espaços em branco, **`false`** caso contrário. Além de
caracteres de espaço, também são considerados em branco os caracteres de tabulação horizontal, tabulação vertical, alimentação de linha,
retorno de carro e alimentação de formulário.
Quando chamada com uma string vazia, o resultado sempre será **`false`**.

### Examples

**Exemplo #1 Um exemplo de **ctype\_space()****

```
<?php
$strings = array(
    'string1' => "\n\r\t",
    'string2' => "\narf12",
    'string3' => '\n\r\t' // observe as aspas simples
);
foreach ($strings as $name => $testcase) {
    if (ctype_space($testcase)) {
        echo "A string '$name' consiste apenas em caracteres de espaço em branco.\n";
    } else {
        echo "A string '$name' contém caracteres sem espaço em branco.\n";
    }
}
?>
```

O exemplo acima produzirá:

```
A string 'string1' consiste apenas em caracteres de espaço em branco.
A string 'string2' contém caracteres sem espaço em branco.
A string 'string3' contém caracteres sem espaço em branco.
```

### Veja também

- [ctype\_cntrl()](function.ctype-cntrl.md) - Verifica se os caracteres são de controle
- [ctype\_graph()](function.ctype-graph.md) - Verifica se os caracteres são imprimíveis exceto espaço
- [ctype\_punct()](function.ctype-punct.md) - Verifica se é um caractere imprimível que não é um caractere de espaço ou
  alfanumério
- [IntlChar::isspace()](intlchar.isspace.md) - Verifica se um ponto de código é um caractere de espaçamento

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
