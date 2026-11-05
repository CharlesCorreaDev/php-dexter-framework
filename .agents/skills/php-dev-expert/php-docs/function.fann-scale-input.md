# Dimensiona dados no vetor de entrada com base em parâmetros previamente calculados, antes de inseri-lo na rede neural

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-scale-input.php

---

# fann\_scale\_input

(PECL fann >= 1.0.0)

fann\_scale\_input — Dimensiona dados no vetor de entrada com base em parâmetros previamente calculados, antes de inseri-lo na rede neural

### Descrição

function **fann\_scale\_input**([resource](language.types.resource.md) `$ann`, [array](language.types.array.md) `$input_vector`): [bool](language.types.boolean.md)

Dimensiona dados no vetor de entrada com base em parâmetros previamente calculados, antes de inseri-lo na rede neural.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`input_vector`
:   O vetor de entrada que será dimensionado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_descale\_input()](function.fann-descale-input.md) - Restaura o dimensionamento do vetor de entrada com base em parâmetros previamente calculados, após obtê-lo da rede neural
- [fann\_scale\_output()](function.fann-scale-output.md) - Dimensiona dados no vetor de saída com base em parâmetros previamente calculados, após obtê-lo da rede neural

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
