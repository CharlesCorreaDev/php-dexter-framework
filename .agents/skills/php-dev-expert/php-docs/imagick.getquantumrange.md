# Retorna o intervalo Quantum do Imagick

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getquantumrange.php

---

# Imagick::getQuantumRange

(PECL imagick 2, PECL imagick 3)

Imagick::getQuantumRange — Retorna o intervalo Quantum do Imagick

### Descrição

public static function **Imagick::getQuantumRange**(): [array](language.types.array.md)

Retorna o intervalo Quantum da instância Imagick.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array associativo contento o intervalo Quantum como um
[int](language.types.integer.md) (`"quantumRangeLong"`) e como uma
[string](language.types.string.md) (`"quantumRangeString"`).

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

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
