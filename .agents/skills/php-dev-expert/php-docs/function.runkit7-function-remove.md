# Remove uma definição de função

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.runkit7-function-remove.php

---

# runkit7\_function\_remove

(PECL runkit7 >= Unknown)

runkit7\_function\_remove — 
Remove uma definição de função

### Descrição

function **runkit7\_function\_remove**([string](language.types.string.md) `$function_name`): [bool](language.types.boolean.md)

> **Nota**:
>
> Por padrão, apenas
> funções criadas pelo usuário podem ser removidas, renomeadas ou modificadas. Para
> sobrescrever funções internas, a configuração
> `runkit.internal_override` deve ser habilitada no php.ini.

### Parâmetros

`function_name`
:   Nome da função a ser excluída

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [runkit7\_function\_add()](function.runkit7-function-add.md) - Adiciona uma nova função, semelhante a create\_function
- [runkit7\_function\_copy()](function.runkit7-function-copy.md) - Copia uma função para um novo nome de função
- [runkit7\_function\_redefine()](function.runkit7-function-redefine.md) - Substitui uma definição de função por uma nova implementação
- [runkit7\_function\_rename()](function.runkit7-function-rename.md) - Altera o nome de uma função

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
