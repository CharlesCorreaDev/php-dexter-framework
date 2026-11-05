# Calcula parâmetros de entrada e saída para uso futuro com base nos dados de treinamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-scaling-params.php

---

# fann\_set\_scaling\_params

(PECL fann >= 1.0.0)

fann\_set\_scaling\_params — Calcula parâmetros de entrada e saída para uso futuro com base nos dados de treinamento

### Descrição

function **fann\_set\_scaling\_params**(  
    [resource](language.types.resource.md) `$ann`,  
    [resource](language.types.resource.md) `$train_data`,  
    [float](language.types.float.md) `$new_input_min`,  
    [float](language.types.float.md) `$new_input_max`,  
    [float](language.types.float.md) `$new_output_min`,  
    [float](language.types.float.md) `$new_output_max`  
): [bool](language.types.boolean.md)

Calcula parâmetros de entrada e saída para uso futuro com base nos dados de treinamento.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`train_data`
:   [resource](language.types.resource.md) dos dados de treinamento da rede neural.

`new_input_min`
:   O limite inferior desejado nos dados de entrada após o dimensionamento (não seguido estritamente)

`new_input_max`
:   O limite superior desejado nos dados de entrada após o dimensionamento (não seguido estritamente)

`new_output_min`
:   O limite inferior desejado nos dados de saída após o dimensionamento (não seguido estritamente)

`new_output_max`
:   O limite superior desejado nos dados de saída após o dimensionamento (não seguido estritamente)

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_set\_input\_scaling\_params()](function.fann-set-input-scaling-params.md) - Calcula os parâmetros de dimensionamento da entrada para uso futuro com base nos dados de treinamento
- [fann\_set\_output\_scaling\_params()](function.fann-set-output-scaling-params.md) - Calcula os parâmetros de dimensionamento de saída para uso futuro com base nos dados de treinamento

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
