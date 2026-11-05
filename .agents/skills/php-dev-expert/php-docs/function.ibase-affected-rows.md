# Retorna o número de linhas que foram afetados pela consulta anterior

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-affected-rows.php

---

# ibase\_affected\_rows

(PHP 5, PHP 7 < 7.4.0)

ibase\_affected\_rows — Retorna o número de linhas que foram afetados pela consulta anterior

### Descrição

function **ibase\_affected\_rows**([resource](language.types.resource.md) `$link_identifier` = ?): [int](language.types.integer.md)

Esta função retorna o número de registros que foram afetados pela
consulta anterior (INSERT, UPDATE ou DELETE) que foi executada de dentro
do contexto da transação especificada.

### Parâmetros

`link_identifier`
:   Um contexto de transação. Se `link_identifier` é um
    resource de conexão, a transação padrão é usada.

### Valor Retornado

Retorna o número de linhas como um inteiro.

### Veja também

- [ibase\_query()](function.ibase-query.md) - Executa uma consulta em um banco de dados InterBase
- [ibase\_execute()](function.ibase-execute.md) - Executa uma consulta preparada anteriormente

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
