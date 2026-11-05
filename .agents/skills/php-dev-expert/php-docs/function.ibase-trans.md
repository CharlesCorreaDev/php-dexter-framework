# Inicia uma transação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-trans.php

---

# ibase\_trans

(PHP 5, PHP 7 < 7.4.0)

ibase\_trans — Inicia uma transação

### Descrição

function **ibase\_trans**([int](language.types.integer.md) `$trans_args` = ?, [resource](language.types.resource.md) `$link_identifier` = ?): [resource](language.types.resource.md)

function **ibase\_trans**([resource](language.types.resource.md) `$link_identifier` = ?): [resource](language.types.resource.md)

Inicia uma transação.

> **Nota**:
>
> A primeira chamada para **ibase\_trans()** não retornará a transação padrão
> de uma conexão. Todas as transações iniciadas por **ibase\_trans()**
> serão revertidas no final do script se não foram confirmadas ou
> revertidas por [ibase\_commit()](function.ibase-commit.md) ou
> [ibase\_rollback()](function.ibase-rollback.md).

> **Nota**:
>
> Esta função aceitará múltiplos argumentos `trans_args`
> e `link_identifier`. Isso permite transações
> em múltiplas conexões de banco de dados, que são confirmadas usando um algoritmo de confirmação de 2 fases.
> Isso significa pode-se confiar nas atualizações para ter sucesso em todos os
> bancos de dados ou falhar em todos os bancos de dados. Isso NÃO significa que podem ser usadas tabelas de
> diferentes bancos de dados na mesma consulta!
>
> Se forem usadas transações em vários bancos de dados, deve-se especificar tanto
> o `link_id` quanto o `transaction_id`
> em chamadas para [ibase\_query()](function.ibase-query.md) e [ibase\_prepare()](function.ibase-prepare.md).

### Parâmetros

`trans_args`
:   `trans_args` pode ser uma combinação das constantes
    **`IBASE_READ`**,
    **`IBASE_WRITE`**,
    **`IBASE_COMMITTED`**,
    **`IBASE_CONSISTENCY`**,
    **`IBASE_CONCURRENCY`**,
    **`IBASE_REC_VERSION`**,
    **`IBASE_REC_NO_VERSION`**,
    **`IBASE_WAIT`** e
    **`IBASE_NOWAIT`**.

`link_identifier`
:   Um identificador de ligação do InterBase. Se omitido, a última ligação aberta é
    assumida.

### Valor Retornado

Retorna um identificador de transação ou **`false`** em caso de erro.

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
