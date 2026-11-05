# Verifica se os caracteres são minúsculos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ctype-lower.php

---

# ctype\_lower

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

ctype\_lower — Verifica se os caracteres são minúsculos

### Descrição

function **ctype\_lower**([mixed](language.types.mixed.md) `$text`): [bool](language.types.boolean.md)

Verifica se todos os caracteres na [string](language.types.string.md) fornecida,
`text`, são letras minúsculas.

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
letras minúsculas na localidade atual.
Quando chamada com uma string vazia, o resultado sempre será **`false`**.

### Examples

**Exemplo #1 Um exemplo de **ctype\_lower()** (usando a localidade padrão)**

```
<?php
$strings = array('aac123', 'qiutoas', 'QASsdks');
foreach ($strings as $testcase) {
    if (ctype_lower($testcase)) {
        echo "A string $testcase consiste inteiramente de letras minúsculas.\n";
    } else {
        echo "A string $testcase não consiste inteiramente de letras minúsculas.\n";
    }
}
?>
```

O exemplo acima produzirá:

```
A string aac123 não consiste inteiramente de letras minúsculas.
A string qiutoas consiste inteiramente de letras minúsculas.
A string QASsdks não consiste inteiramente de letras minúsculas.
```

### Veja também

- [ctype\_alpha()](function.ctype-alpha.md) - Verifica se os caracteres são alfabéticos
- [ctype\_upper()](function.ctype-upper.md) - Verifica se os caracteres são maiúsculos
- [setlocale()](function.setlocale.md) - Define informação de localidade
- [IntlChar::islower()](intlchar.islower.md) - Verifica se um ponto de código é uma letra minúscula

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
