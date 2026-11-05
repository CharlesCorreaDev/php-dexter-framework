# Verifica se os caracteres são de controle

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ctype-cntrl.php

---

# ctype\_cntrl

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

ctype\_cntrl — Verifica se os caracteres são de controle

### Descrição

function **ctype\_cntrl**([mixed](language.types.mixed.md) `$text`): [bool](language.types.boolean.md)

Verifica se todos os caracteres na [string](language.types.string.md) fornecida,
`text`, são caracteres de controle.
Caracteres de controle são e.g. line feed, tab, escape.

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
caracteres de controle da localidade atual, **`false`** caso contrário.
Quando chamada com uma string vazia, o resultado sempre será **`false`**.

### Examples

**Exemplo #1 Um exemplo de **ctype\_cntrl()****

```
<?php
$strings = array('string1' => "\n\r\t", 'string2' => 'arf12');
foreach ($strings as $name => $testcase) {
    if (ctype_cntrl($testcase)) {
        echo "A string '$name' consiste inteiramente de caracteres de controle.\n";
    } else {
        echo "A string '$name' não consiste inteiramente de caracteres de controle.\n";
    }
}
?>
```

O exemplo acima produzirá:

```
A string 'string1' consiste inteiramente de caracteres de controle.
A string 'string2' não consiste inteiramente de caracteres de controle.
```

### Veja também

- [ctype\_print()](function.ctype-print.md) - Verifica se os caracteres são imprimíveis
- [IntlChar::iscntrl()](intlchar.iscntrl.md) - Verifica se um ponto de código é um caractere de controle

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
