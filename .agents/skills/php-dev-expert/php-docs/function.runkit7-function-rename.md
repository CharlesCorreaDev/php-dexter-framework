# Altera o nome de uma função

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.runkit7-function-rename.php

---

# runkit7\_function\_rename

(PECL runkit7 >= Unknown)

runkit7\_function\_rename — 
Altera o nome de uma função

### Descrição

function **runkit7\_function\_rename**([string](language.types.string.md) `$source_name`, [string](language.types.string.md) `$target_name`): [bool](language.types.boolean.md)

> **Nota**:
>
> Por padrão, apenas
> funções criadas pelo usuário podem ser removidas, renomeadas ou modificadas. Para
> sobrescrever funções internas, a configuração
> `runkit.internal_override` deve ser habilitada no php.ini.

### Parâmetros

`source_name`
:   Nome atual da função.

`target_name`
:   Novo nome da função.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [runkit7\_function\_add()](function.runkit7-function-add.md) - Adiciona uma nova função, semelhante a create\_function
- [runkit7\_function\_copy()](function.runkit7-function-copy.md) - Copia uma função para um novo nome de função
- [runkit7\_function\_redefine()](function.runkit7-function-redefine.md) - Substitui uma definição de função por uma nova implementação
- [runkit7\_function\_remove()](function.runkit7-function-remove.md) - Remove uma definição de função

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
