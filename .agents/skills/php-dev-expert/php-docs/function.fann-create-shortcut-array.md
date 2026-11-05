# Cria uma rede neural de retropropagação padrão que não está totalmente conectada e possui conexões de atalho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-create-shortcut-array.php

---

# fann\_create\_shortcut\_array

(PECL fann >= 1.0.0)

fann\_create\_shortcut\_array — Cria uma rede neural de retropropagação padrão que não está totalmente conectada e possui conexões de atalho

### Descrição

function **fann\_create\_shortcut\_array**([int](language.types.integer.md) `$num_layers`, [array](language.types.array.md) `$layers`): [resource](language.types.resource.md)

Cria uma rede neural de retropropagação padrão que não está totalmente conectada e possui conexões de atalho usando um array de tamanhos de camadas.

### Parâmetros

`num_layers`
:   O número total de camadas, incluindo a camada de entrada e a camada de saída.

`layers`
:   Um array de tamanhos de camadas.

### Valor Retornado

Retorna um recurso de rede neural em caso de sucesso, ou **`false`** em caso de erro.

### Veja também

- [fann\_create\_shortcut()](function.fann-create-shortcut.md) - Cria uma rede neural de retropropagação padrão que não está totalmente conectada e possui conexões de atalho
- [fann\_create\_sparse()](function.fann-create-sparse.md) - Cria uma rede neural de retropropagação padrão, que não está totalmente conectada
- [fann\_create\_standard()](function.fann-create-standard.md) - Cria uma rede neural de retropropagação padrão totalmente conectada

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
