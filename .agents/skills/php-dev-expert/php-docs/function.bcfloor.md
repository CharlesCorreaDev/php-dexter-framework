# Arredonda para baixo um número de precisão arbitrária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.bcfloor.php

---

# bcfloor

(PHP 8 >= 8.4.0)

bcfloor — Arredonda para baixo um número de precisão arbitrária

### Descrição

function **bcfloor**([string](language.types.string.md) `$num`): [string](language.types.string.md)

Retorna o próximo valor inteiro mais baixo arredondando `num`
para baixo, se necessário.

### Parâmetros

`num`
:   O valor a ser arredondado.

### Valor Retornado

Retorna uma string numérica representando `num` arredondado para o número inteiro mais próximo.

### Erros/Exceções

Esta função lança uma exceção [ValueError](class.valueerror.md) se
`num` não for uma string numérica BCMath bem formada.

### Examples

**Exemplo #1 Exemplo de **bcfloor()****

```
<?php
var_dump(bcfloor('4.3'));
var_dump(bcfloor('9.999'));
var_dump(bcfloor('-3.14'));
?>
```

O exemplo acima produzirá:

```
string(1) "4"
string(1) "9"
string(2) "-4"
```

### Veja também

- [bcceil()](function.bcceil.md) - Arredonda para cima um número de precisão arbitrária
- [bcround()](function.bcround.md) - Arredonda número de precisão arbitrária
- [BcMath\Number::floor()](bcmath-number.floor.md) - Arredonda para baixo um número de precisão arbitrária

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
