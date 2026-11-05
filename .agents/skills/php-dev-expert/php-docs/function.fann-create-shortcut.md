# Cria uma rede neural de retropropagação padrão que não está totalmente conectada e possui conexões de atalho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-create-shortcut.php

---

# fann\_create\_shortcut

(PECL fann >= 1.0.0)

fann\_create\_shortcut — Cria uma rede neural de retropropagação padrão que não está totalmente conectada e possui conexões de atalho

### Descrição

function **fann\_create\_shortcut**(  
    [int](language.types.integer.md) `$num_layers`,  
    [int](language.types.integer.md) `$num_neurons1`,  
    [int](language.types.integer.md) `$num_neurons2`,  
    [int](language.types.integer.md) `...$num_neuronsN`  
): [resource](language.types.resource.md)

Cria uma rede neural de retropropagação padrão, que não está totalmente conectada e que também possui conexões de atalho.

Conexões de atalho são conexões que ignoram camadas. Uma rede totalmente conectada com conexões de atalho é uma rede
onde todos os neurônios estão conectados a todos os neurônios nas camadas posteriores. Incluindo conexões diretas da camada de entrada para a camada de saída.

### Parâmetros

`num_layers`
:   O número total de camadas, incluindo a camada de entrada e a camada de saída.

`num_neurons1`
:   Número de neurônios na primeira camada.

`num_neurons2`
:   Número de neurônios na segunda camada.

`num_neuronsN`
:   Número de neurônios em outras camadas.

### Valor Retornado

Retorna um recurso de rede neural em caso de sucesso, ou **`false`** em caso de erro.

### Veja também

- [fann\_create\_shortcut\_array()](function.fann-create-shortcut-array.md) - Cria uma rede neural de retropropagação padrão que não está totalmente conectada e possui conexões de atalho
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
