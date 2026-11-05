# Desserializa um parâmetro de dados em um objeto BcMath\Number

> **Fonte / Source:** https://www.php.net/manual/pt_BR/bcmath-number.unserialize.php

---

# BcMath\Number::\_\_unserialize

(PHP 8 >= 8.4.0)

BcMath\Number::\_\_unserialize — Desserializa um parâmetro de dados em um objeto BcMath\Number

### Descrição

public function **BcMath\Number::\_\_unserialize**([array](language.types.array.md) `$data`): [void](language.types.void.md)

Desserializa um parâmetro de dados em um objeto [BcMath\Number](class.bcmath-number.md).

### Parâmetros

`data`
:   O parâmetro de dados serializado como um [array](language.types.array.md) associativo.

### Erros/Exceções

Este método lança uma exceção [ValueError](class.valueerror.md) se dados serializados inválidos forem passados.

### Veja também

- [BcMath\Number::\_\_construct()](bcmath-number.construct.md) - Cria um objeto BcMath\Number
- **BcMath\Number::serialize()**

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
