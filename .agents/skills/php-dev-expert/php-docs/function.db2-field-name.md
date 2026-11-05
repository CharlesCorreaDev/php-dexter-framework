# Retorna o nome da coluna no conjunto de resultados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-field-name.php

---

# db2\_field\_name

(PECL ibm\_db2 >= 1.0.0)

db2\_field\_name — 
Retorna o nome da coluna no conjunto de resultados

### Descrição

function **db2\_field\_name**([resource](language.types.resource.md) `$stmt`, [int](language.types.integer.md)|[string](language.types.string.md) `$column`): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna o nome da coluna especificada no conjunto de resultados.

### Parâmetros

`stmt`
:   Especifica um recurso de instrução contendo um conjunto de resultados.

`column`
:   Especifica a coluna no conjunto de resultados. Isso pode ser um inteiro
    representando a posição indexada 0 da coluna, ou uma string
    contendo o nome da coluna.

### Valor Retornado

Retorna uma string contendo o nome da coluna especificada. Se a
coluna especificada não existir no conjunto de
resultados, **db2\_field\_name()** retornará **`false`**.

### Veja também

- [db2\_field\_display\_size()](function.db2-field-display-size.md) - Retorna o número máximo de bytes necessários para exibir uma coluna
- [db2\_field\_num()](function.db2-field-num.md) - Retorna a posição da coluna nomeada em um conjunto de resultados
- [db2\_field\_precision()](function.db2-field-precision.md) - Retorna a precisão da coluna indicada em um conjunto de resultados
- [db2\_field\_scale()](function.db2-field-scale.md) - Retorna a escala da coluna indicada em um conjunto de resultados
- [db2\_field\_type()](function.db2-field-type.md) - Retorna o tipo de dados da coluna indicada em um conjunto de resultados
- [db2\_field\_width()](function.db2-field-width.md) - Retorna a largura do valor atual da coluna indicada em um conjunto de resultados

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
