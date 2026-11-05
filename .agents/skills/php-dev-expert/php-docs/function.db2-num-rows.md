# Retorna o número de linhas afetadas por uma instrução SQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-num-rows.php

---

# db2\_num\_rows

(PECL ibm\_db2 >= 1.0.0)

db2\_num\_rows — 
Retorna o número de linhas afetadas por uma instrução SQL

### Descrição

function **db2\_num\_rows**([resource](language.types.resource.md) `$stmt`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o número de linhas excluídas, inseridas ou atualizadas por uma
instrução SQL.

Para determinar o número de linhas que serão retornadas por uma instrução SELECT,
emita SELECT COUNT(\*) com os mesmos predicados que a
instrução SELECT pretendida e recupere o valor.

Se a lógica da aplicação verifica o número de linhas retornadas por uma instrução SELECT
e ramifica se o número de linhas for 0, considere modificar a
aplicação para tentar retornar a primeira linha com uma das funções
[db2\_fetch\_assoc()](function.db2-fetch-assoc.md), [db2\_fetch\_both()](function.db2-fetch-both.md),
[db2\_fetch\_array()](function.db2-fetch-array.md) ou [db2\_fetch\_row()](function.db2-fetch-row.md),
e ramificar se a função retornar **`false`**.

> **Nota**:
>
> Se for emitida uma instrução SELECT usando um cursor rolável,
> **db2\_num\_rows()** retornará o número de linhas retornadas pela
> instrução SELECT. No entanto, a sobrecarga associada a cursores roláveis
> degrada significativamente o desempenho da aplicação. Portanto, se
> esta for a única razão pela qual estão sendo usados cursores roláveis,
> deve-se usar um cursor somente de avanço e chamar SELECT COUNT(\*) ou
> confiar no valor de retorno [bool](language.types.boolean.md) das funções de busca para
> obter a funcionalidade equivalente com desempenho muito melhor.

### Parâmetros

`stmt`
:   Um recurso `stmt` válido contendo um conjunto de resultados.

### Valor Retornado

Retorna o número de linhas afetadas pela última instrução SQL emitida pelo
identificador de instrução especificado, ou **`false`** em caso de falha

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
