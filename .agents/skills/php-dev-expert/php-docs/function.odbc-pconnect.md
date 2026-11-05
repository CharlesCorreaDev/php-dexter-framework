# Abre uma conexão persistente com o banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-pconnect.php

---

# odbc\_pconnect

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_pconnect — Abre uma conexão persistente com o banco de dados

### Descrição

function **odbc\_pconnect**(  
    [string](language.types.string.md) `$dsn`,  
    [?](language.types.null.md)[string](language.types.string.md) `$user` = **`null`**,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[string](language.types.string.md) `$password` = **`null`**,  
    [int](language.types.integer.md) `$cursor_option` = **`SQL_CUR_USE_DRIVER`**  
): [Odbc\Connection](class.odbc-connection.md)|[false](language.types.singleton.md)

Abre uma conexão persistente com o banco de dados.

Esta função é muito parecida com
[odbc\_connect()](function.odbc-connect.md), exceto que a conexão não
é realmente fechada quando o script termina. Solicitações futuras
para uma conexão com a mesma combinação de `dsn`,
`user`, `password`
(via [odbc\_connect()](function.odbc-connect.md) e
**odbc\_pconnect()**) pode reutilizar a conexão
persistente.

### Parâmetros

Consulte [odbc\_connect()](function.odbc-connect.md) para detalhes.

### Valor Retornado

Retorna uma conexão ODBC, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Esta função agora retorna uma instância de [Odbc\Connection](class.odbc-connection.md); anteriormente, retornava um [resource](language.types.resource.md). |
| 8.4.0 | `user` e `password` agora podem ser nulos e também são opcionais e têm o valor padrão **`null`**. |
| 8.4.0 | Anteriormente, usar uma string vazia para `password` não incluiria `pwd` na string de conexão gerada para `dsn`. Agora é gerada para uncluir um `pwd` que tem uma string vazia como seu valor. Para restaurar o comportamento anterior, `password` agora pode ser definido para **`null`**. |
| 8.4.0 | Anteriormente, se `dsn` contivesse `uid` ou `pwd`, os parâmetros `user` e `password` seriam ignorados. Agora, `user` somente é ignorado se `dsn` contiver `uid`, e `password` somente é ignorado se `dsn` contiver `pwd`. |

### Notas

> **Nota**:
>
> Conexões persistentes não têm efeito se o PHP for usado como um
> programa CGI.

### Veja também

- [odbc\_connect()](function.odbc-connect.md) - Conecta a uma fonte de dados
- [Conexões de banco de dados persistentes](features.persistent-connections.md)

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
