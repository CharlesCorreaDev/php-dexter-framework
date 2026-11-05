# Cria uma rede neural de retropropagação padrão totalmente conectada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-create-standard.php

---

# fann\_create\_standard

(PECL fann >= 1.0.0)

fann\_create\_standard — Cria uma rede neural de retropropagação padrão totalmente conectada

### Descrição

function **fann\_create\_standard**(  
    [int](language.types.integer.md) `$num_layers`,  
    [int](language.types.integer.md) `$num_neurons1`,  
    [int](language.types.integer.md) `$num_neurons2`,  
    [int](language.types.integer.md) `...$num_neuronsN`  
): [resource](language.types.resource.md)

Cria uma rede neural de retropropagação padrão totalmente conectada.

Haverá um neurônio de polarização em cada camada (exceto a camada de saída),
e esse neurônio de polarização será conectado a todos os neurônios da próxima camada.
Ao executar a rede, os nós de polarização sempre emitem 1.

Para destruir uma rede neural use a função [fann\_destroy()](function.fann-destroy.md).

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

- [fann\_create\_standard\_array()](function.fann-create-standard-array.md) - Cria uma rede neural de retropropagação padrão totalmente conectada usando um array de tamanhos de camada
- [fann\_create\_sparse()](function.fann-create-sparse.md) - Cria uma rede neural de retropropagação padrão, que não está totalmente conectada
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
