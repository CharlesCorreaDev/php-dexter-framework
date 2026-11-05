# Remove o valor no $index especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfixedarray.offsetunset.php

---

# SplFixedArray::offsetUnset

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplFixedArray::offsetUnset — Remove o valor no $index especificado

### Descrição

public function **SplFixedArray::offsetUnset**([int](language.types.integer.md) `$index`): [void](language.types.void.md)

Remove o valor no índice especificado.

### Parâmetros

`index`
:   O índice a ser removido.

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
