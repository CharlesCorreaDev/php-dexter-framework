# Cria uma rede neural de retropropagação padrão totalmente conectada usando um array de tamanhos de camada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-create-standard-array.php

---

# fann\_create\_standard\_array

(PECL fann >= 1.0.0)

fann\_create\_standard\_array — Cria uma rede neural de retropropagação padrão totalmente conectada usando um array de tamanhos de camada

### Descrição

function **fann\_create\_standard\_array**([int](language.types.integer.md) `$num_layers`, [array](language.types.array.md) `$layers`): [resource](language.types.resource.md)

Cria uma rede neural de retropropagação padrão totalmente conectada.

Haverá um neurônio de polarização em cada camada (exceto a camada de saída),
e esse neurônio de polarização será conectado a todos os neurônios da próxima camada.
Ao executar a rede, os nós de polarização sempre emitem 1.

Para destruir uma rede neural use a função [fann\_destroy()](function.fann-destroy.md).

### Parâmetros

`num_layers`
:   O número total de camadas, incluindo a camada de entrada e a camada de saída.

`layers`
:   Um array de tamanhos de camada.

### Valor Retornado

Retorna um recurso de rede neural em caso de sucesso, ou **`false`** em caso de erro.

### Veja também

- [fann\_create\_standard()](function.fann-create-standard.md) - Cria uma rede neural de retropropagação padrão totalmente conectada
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
