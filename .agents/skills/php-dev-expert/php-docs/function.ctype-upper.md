# Verifica se os caracteres são maiúsculos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ctype-upper.php

---

# ctype\_upper

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

ctype\_upper — Verifica se os caracteres são maiúsculos

### Descrição

function **ctype\_upper**([mixed](language.types.mixed.md) `$text`): [bool](language.types.boolean.md)

Verifica se todos os caracteres na [string](language.types.string.md) fornecida,
`text`, são maiúsculos.

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
letras maiúsculas na localidade atual.
Quando chamada com uma string vazia, o resultado sempre será **`false`**.

### Examples

**Exemplo #1 Um exemplo de **ctype\_upper()** (usando a localidade padrão)**

```
<?php
$strings = array('AKLWC139', 'LMNSDO', 'akwSKWsm');
foreach ($strings as $testcase) {
    if (ctype_upper($testcase)) {
        echo "A string $testcase consiste inteiramente de letras maiúsculas.\n";
    } else {
        echo "A string $testcase não consiste inteiramente de letras maiúsculas.\n";
    }
}
?>
```

O exemplo acima produzirá:

```
A string AKLWC139 não consiste inteiramente de letras maiúsculas.
A string LMNSDO consiste inteiramente de letras maiúsculas.
A string akwSKWsm não consiste inteiramente de letras maiúsculas.
```

### Veja também

- [ctype\_alpha()](function.ctype-alpha.md) - Verifica se os caracteres são alfabéticos
- [ctype\_lower()](function.ctype-lower.md) - Verifica se os caracteres são minúsculos
- [setlocale()](function.setlocale.md) - Define informação de localidade
- [IntlChar::isupper()](intlchar.isupper.md) - Verifica se um ponto de código tem a categoria geral "Lu" (letra maiúscula)

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
