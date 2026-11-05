# Cria uma rede neural de retropropagação padrão, que não está totalmente conectada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-create-sparse.php

---

# fann\_create\_sparse

(PECL fann >= 1.0.0)

fann\_create\_sparse — Cria uma rede neural de retropropagação padrão, que não está totalmente conectada

### Descrição

function **fann\_create\_sparse**(  
    [float](language.types.float.md) `$connection_rate`,  
    [int](language.types.integer.md) `$num_layers`,  
    [int](language.types.integer.md) `$num_neurons1`,  
    [int](language.types.integer.md) `$num_neurons2`,  
    [int](language.types.integer.md) `...$num_neuronsN`  
): [resource](language.types.resource.md)

Cria uma rede neural de retropropagação padrão, que não está totalmente conectada.

### Parâmetros

`connection_rate`
:   A taxa de conexão que controla quantas conexões haverá na rede. Se a taxa de conexão
    for definida como 1, a rede estará totalmente conectada, mas se for definida como 0.5, apenas metade das conexões
    serão definidas. Uma taxa de conexão de 1 produzirá o mesmo resultado que [fann\_create\_standard()](function.fann-create-standard.md).

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

- [fann\_create\_sparse\_array()](function.fann-create-sparse-array.md) - Cria uma rede neural de retropropagação padrão, que não está totalmente conectada usando um array de tamanhos de camada
- [fann\_create\_standard()](function.fann-create-standard.md) - Cria uma rede neural de retropropagação padrão totalmente conectada
- [fann\_create\_shortcut()](function.fann-create-shortcut.md) - Cria uma rede neural de retropropagação padrão que não está totalmente conectada e possui conexões de atalho

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
