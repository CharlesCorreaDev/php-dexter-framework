# Restaura o dimensionamento do vetor de entrada com base em parâmetros previamente calculados, após obtê-lo da rede neural

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-descale-input.php

---

# fann\_descale\_input

(PECL fann >= 1.0.0)

fann\_descale\_input — Restaura o dimensionamento do vetor de entrada com base em parâmetros previamente calculados, após obtê-lo da rede neural

### Descrição

function **fann\_descale\_input**([resource](language.types.resource.md) `$ann`, [array](language.types.array.md) `$input_vector`): [bool](language.types.boolean.md)

Restaura o dimensionamento do vetor de entrada com base em parâmetros previamente calculados, após obtê-lo da rede neural.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`input_vector`
:   Vetor de entrada que será terá o dimensionamento restaurado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_scale\_input()](function.fann-scale-input.md) - Dimensiona dados no vetor de entrada com base em parâmetros previamente calculados, antes de inseri-lo na rede neural
- [fann\_descale\_output()](function.fann-descale-output.md) - Restaura o dimensionamento do vetor de saída com base em parâmetros previamente calculados, após obtê-lo da rede neural

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
