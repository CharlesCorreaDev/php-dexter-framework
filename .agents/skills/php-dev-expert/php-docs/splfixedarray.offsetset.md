# Define um novo valor em um índice especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfixedarray.offsetset.php

---

# SplFixedArray::offsetSet

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplFixedArray::offsetSet — Define um novo valor em um índice especificado

### Descrição

public function **SplFixedArray::offsetSet**([int](language.types.integer.md) `$index`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

Define o valor no `index` especificado como `value`.

### Parâmetros

`index`
:   O índice a ser definido.

`value`
:   O novo valor para o `index`.

### Valor Retornado

Nenhum valor é retornado.

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
