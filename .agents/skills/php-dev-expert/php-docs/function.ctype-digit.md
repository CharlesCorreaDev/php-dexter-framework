# Verifica se os caracteres são numéricos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ctype-digit.php

---

# ctype\_digit

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

ctype\_digit — Verifica se os caracteres são numéricos

### Descrição

function **ctype\_digit**([mixed](language.types.mixed.md) `$text`): [bool](language.types.boolean.md)

Verifica se todos os caracteres na [string](language.types.string.md) fornecida,
`text`, são numéricos.

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

Retorna **`true`** se todos caracteres na string
`text` forem dígitos decimais, **`false`** caso contrário.
Quando chamada com uma string vazia, o resultado sempre será **`false`**.

### Examples

**Exemplo #1 Um exemplo de **ctype\_digit()****

```
<?php
$strings = array('1820.20', '10002', 'wsl!12');
foreach ($strings as $caso_de_teste) {
    if (ctype_digit($caso_de_teste)) {
        echo "A string $caso_de_teste consiste inteiramente de dígitos.\n";
    } else {
        echo "A string $caso_de_teste não consiste inteiramente de dígitos.\n";
    }
}
?>
```

O exemplo acima produzirá:

```
A string 1820.20 não consiste inteiramente de dígitos.
A string 10002 consiste inteiramente de dígitos.
A string wsl!12 não consiste inteiramente de dígitos.
```

**Exemplo #2 Um exemplo de **ctype\_digit()** comparando strings com inteiros**

```
<?php

$string_numerica = '42';
$inteiro         = 42;

ctype_digit($string_numerica);  // verdadeiro
ctype_digit($inteiro);          // false (código ASCII 42 é o caractere *)

is_numeric($string_numerica);   // verdadeiro
is_numeric($inteiro);           // verdadeiro
?>
```

### Veja também

- [ctype\_alnum()](function.ctype-alnum.md) - Verifica se os caracteres são alfanuméricos
- [ctype\_xdigit()](function.ctype-xdigit.md) - Verifica se os caracteres representam um dígito hexadecimal
- [is\_numeric()](function.is-numeric.md) - Verifica se uma variável é um número ou uma string numérica
- [is\_int()](function.is-int.md) - Informa se o tipo de uma variável é um inteiro
- [is\_string()](function.is-string.md) - Verifica se o tipo de uma variável é string
- [IntlChar::isdigit()](intlchar.isdigit.md) - Verifica se um ponto de código é um caractere de dígito

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
