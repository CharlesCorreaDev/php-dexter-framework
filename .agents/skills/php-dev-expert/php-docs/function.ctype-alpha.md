# Verifica se os caracteres são alfabéticos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ctype-alpha.php

---

# ctype\_alpha

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

ctype\_alpha — Verifica se os caracteres são alfabéticos

### Descrição

function **ctype\_alpha**([mixed](language.types.mixed.md) `$text`): [bool](language.types.boolean.md)

Verifica se todos os caracteres na [string](language.types.string.md) fornecida,
`text`, são alfabéticos.
No padrão `C` locale letras são
`[A-Za-z]` e **ctype\_alpha()** é
equivalente a `(ctype_upper($text) || ctype_lower($text))`
se $text é um único caractere, mas outras linguagens possuem letras que
não são considerada nem maiúscula nem minúscula.

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
letra da localidade atual, **`false`** caso contrário.
Quando chamada com uma string vazia, o resultado sempre será **`false`**.

### Examples

**Exemplo #1 Um exemplo de **ctype\_alpha()** (usando a localidade padrão)**

```
<?php
$strings = array('KjgWZC', 'arf12');
foreach ($strings as $testcase) {
    if (ctype_alpha($testcase)) {
        echo "A string $testcase consiste inteiramente de letras.\n";
    } else {
        echo "A string $testcase não consiste inteiramente de letras.\n";
    }
}
?>
```

O exemplo acima produzirá:

```
A string KjgWZC consiste inteiramente de letras.
A string arf12 não consiste inteiramente de letras.
```

### Veja também

- [ctype\_upper()](function.ctype-upper.md) - Verifica se os caracteres são maiúsculos
- [ctype\_lower()](function.ctype-lower.md) - Verifica se os caracteres são minúsculos
- [setlocale()](function.setlocale.md) - Define informação de localidade
- [IntlChar::isalpha()](intlchar.isalpha.md) - Verifica se um ponto de código é uma letra

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
