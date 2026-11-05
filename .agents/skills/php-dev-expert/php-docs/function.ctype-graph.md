# Verifica se os caracteres são imprimíveis exceto espaço

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ctype-graph.php

---

# ctype\_graph

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

ctype\_graph — Verifica se os caracteres são imprimíveis exceto espaço

### Descrição

function **ctype\_graph**([mixed](language.types.mixed.md) `$text`): [bool](language.types.boolean.md)

Verifica se todos os caracteres na [string](language.types.string.md) fornecida,
`text`, são visíveis.

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

Retorna **`true`** se todos caracteres em `text` são
imprimíveis e criam uma saída visível (sem espaço em branco), **`false`**
caso contrário.
Quando chamada com uma string vazia, o resultado sempre será **`false`**.

### Examples

**Exemplo #1 Exemplo de **ctype\_graph()****

```
<?php
$strings = array('string1' => "asdf\n\r\t", 'string2' => 'arf12', 'string3' => 'LKA#@%.54');
foreach ($strings as $name => $testcase) {
    if (ctype_graph($testcase)) {
        echo "A string '$name' consiste inteiramente de caracteres (visivelmente) imprimíveis.\n";
    } else {
        echo "A string '$name' não consiste inteiramente de caracteres (visivelmente) imprimíveis.\n";
    }
}
?>
```

O exemplo acima produzirá:

```
A string 'string1' não consiste inteiramente de caracteres (visivelmente) imprimíveis.
A string 'string2' consiste inteiramente de caracteres (visivelmente) imprimíveis.
A string 'string3' consiste inteiramente de caracteres (visivelmente) imprimíveis.
```

### Veja também

- [ctype\_alnum()](function.ctype-alnum.md) - Verifica se os caracteres são alfanuméricos
- [ctype\_print()](function.ctype-print.md) - Verifica se os caracteres são imprimíveis
- [ctype\_punct()](function.ctype-punct.md) - Verifica se é um caractere imprimível que não é um caractere de espaço ou
  alfanumério
- [IntlChar::isgraph()](intlchar.isgraph.md) - Verifica se um ponto de código é um caractere gráfico

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
