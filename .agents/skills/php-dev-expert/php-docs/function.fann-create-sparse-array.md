# Cria uma rede neural de retropropagação padrão, que não está totalmente conectada usando um array de tamanhos de camada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-create-sparse-array.php

---

# fann\_create\_sparse\_array

(PECL fann >= 1.0.0)

fann\_create\_sparse\_array — Cria uma rede neural de retropropagação padrão, que não está totalmente conectada usando um array de tamanhos de camada

### Descrição

function **fann\_create\_sparse\_array**([float](language.types.float.md) `$connection_rate`, [int](language.types.integer.md) `$num_layers`, [array](language.types.array.md) `$layers`): [resource](language.types.resource.md)

Cria uma rede neural de retropropagação padrão, que não está totalmente conectada usando um array de tamanhos de camada.

### Parâmetros

`connection_rate`
:   A taxa de conexão que controla quantas conexões haverá na rede. Se a taxa de conexão
    for definida como 1, a rede estará totalmente conectada, mas se for definida como 0.5, apenas metade das conexões
    serão definidas. Uma taxa de conexão de 1 produzirá o mesmo resultado que [fann\_create\_standard()](function.fann-create-standard.md).

`num_layers`
:   O número total de camadas, incluindo a camada de entrada e a camada de saída.

`layers`
:   Um array de tamanhos de camada.

### Valor Retornado

Retorna um recurso de rede neural em caso de sucesso, ou **`false`** em caso de erro.

### Veja também

- [fann\_create\_sparse()](function.fann-create-sparse.md) - Cria uma rede neural de retropropagação padrão, que não está totalmente conectada
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
