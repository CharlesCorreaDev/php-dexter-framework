# Define uma conexão na rede

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-weight.php

---

# fann\_set\_weight

(PECL fann >= 1.0.0)

fann\_set\_weight — Define uma conexão na rede

### Descrição

function **fann\_set\_weight**(  
    [resource](language.types.resource.md) `$ann`,  
    [int](language.types.integer.md) `$from_neuron`,  
    [int](language.types.integer.md) `$to_neuron`,  
    [float](language.types.float.md) `$weight`  
): [bool](language.types.boolean.md)

Define uma conexão na rede.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`from_neuron`
:   O neurônio onde a conexão inicia.

`to_neuron`
:   O neurônio onde a conexão termina.

`weight`
:   Peso da conexão.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

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
