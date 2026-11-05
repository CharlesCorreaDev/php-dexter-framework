# Retorna o valor no índice especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfixedarray.offsetget.php

---

# SplFixedArray::offsetGet

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplFixedArray::offsetGet — Retorna o valor no índice especificado

### Descrição

public function **SplFixedArray::offsetGet**([int](language.types.integer.md) `$index`): [mixed](language.types.mixed.md)

Retorna o valor no índice `index`.

### Parâmetros

`index`
:   O índice com o valor.

### Valor Retornado

O valor no `index` especificado.

### Erros/Exceções

Lança [RuntimeException](class.runtimeexception.md) quando o `index` está fora
do tamanho definido do array ou quando o `index` não pode ser analisado como um número inteiro.

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
