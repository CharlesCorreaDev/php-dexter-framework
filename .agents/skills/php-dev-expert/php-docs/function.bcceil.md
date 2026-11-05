# Arredonda para cima um número de precisão arbitrária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.bcceil.php

---

# bcceil

(PHP 8 >= 8.4.0)

bcceil — Arredonda para cima um número de precisão arbitrária

### Descrição

function **bcceil**([string](language.types.string.md) `$num`): [string](language.types.string.md)

Retorna o próximo valor inteiro mais alto, arredondando
`num` para cima se necessário.

### Parâmetros

`num`
:   O valor a ser arredondado.

### Valor Retornado

Retorna uma string numérica representando `num` arredondado para cima em direção ao inteiro mais próximo.

### Erros/Exceções

Esta função lança uma exceção [ValueError](class.valueerror.md) se
`num` não for uma string numérica BCMath bem formada.

### Examples

**Exemplo #1 Exemplo de **bcceil()****

```
<?php
var_dump(bcceil('4.3'));
var_dump(bcceil('9.999'));
var_dump(bcceil('-3.14'));
?>
```

O exemplo acima produzirá:

```
string(1) "5"
string(2) "10"
string(2) "-3"
```

### Veja também

- [bcfloor()](function.bcfloor.md) - Arredonda para baixo um número de precisão arbitrária
- [bcround()](function.bcround.md) - Arredonda número de precisão arbitrária
- [BcMath\Number::ceil()](bcmath-number.ceil.md) - Arredonda para cima um número de precisão arbitrária

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
