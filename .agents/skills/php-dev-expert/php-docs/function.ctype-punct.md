# Verifica se é um caractere imprimível que não é um caractere de espaço ou
   alfanumério

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ctype-punct.php

---

# ctype\_punct

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

ctype\_punct — 
Verifica se é um caractere imprimível que não é um caractere de espaço ou
alfanumério

### Descrição

function **ctype\_punct**([mixed](language.types.mixed.md) `$text`): [bool](language.types.boolean.md)

Verifica se todos os caracteres da [string](language.types.string.md) fornecida,
`text`, são caracteres de pontuação.

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

Retorna **`true`** se cada caractere em `text`
é imprimível, não sendo letra, dígito ou espaço em branco, **`false`** caso contrário.
Quando chamada com uma string vazia, o resultado sempre será **`false`**.

### Examples

**Exemplo #1 Um exemplo de **ctype\_punct()****

```
<?php
$strings = array('ABasdk!@!$#', '!@ # $', '*&$()');
foreach ($strings as $testcase) {
    if (ctype_punct($testcase)) {
        echo "A string $testcase consiste inteiramente de caracteres de pontuação.\n";
    } else {
        echo "A string $testcase não consiste inteiramente de caracteres de pontuação.\n";
    }
}
?>
```

O exemplo acima produzirá:

```
A string ABasdk!@!$# não consiste inteiramente de caracteres de pontuação.
A string !@ # $ não consiste inteiramente de caracteres de pontuação.
A string *&$() consiste inteiramente de caracteres de pontuação.
```

### Veja também

- [ctype\_cntrl()](function.ctype-cntrl.md) - Verifica se os caracteres são de controle
- [ctype\_graph()](function.ctype-graph.md) - Verifica se os caracteres são imprimíveis exceto espaço
- [IntlChar::ispunct()](intlchar.ispunct.md) - Verifica se um ponto de código é um caractere de pontuação

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
