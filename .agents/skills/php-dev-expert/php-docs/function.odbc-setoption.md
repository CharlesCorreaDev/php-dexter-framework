# Ajusta configurações do ODBC

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-setoption.php

---

# odbc\_setoption

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_setoption — Ajusta configurações do ODBC

### Descrição

function **odbc\_setoption**(  
    [Odbc\Connection](class.odbc-connection.md)|[Odbc\Result](class.odbc-result.md) `$odbc`,  
    [int](language.types.integer.md) `$which`,  
    [int](language.types.integer.md) `$option`,  
    [int](language.types.integer.md) `$value`  
): [bool](language.types.boolean.md)

Esta função permite manipular as opções ODBC para uma
determinada conexão ou resultado de consulta. Ela foi escrita para ajudar
a encontrar soluções para problemas em drivers ODBC peculiares. Esta função
deve ser usada por um programador ODBC que
compreenda os efeitos que as diversas opções terão. Será necessária
uma boa referência ODBC para explicar todas as diferentes
opções e valores que podem ser usados. Diferentes versões de driver
oferecem suporte a diferentes opções.

Como os efeitos podem variar dependendo do driver ODBC, o uso
desta função em scripts a serem disponibilizados publicamente é
fortemente desencorajado. Além disso, algumas opções de ODBC não estão disponíveis
para esta função porque devem ser definidas antes de a conexão
ser estabelecida ou a consulta ser preparada. No entanto, se em um
determinado trabalho ela puder fazer o PHP funcionar de forma seja evitada
uma pressão para que seja usado um produto comercial, isso é tudo que realmente
importa.

### Parâmetros

`odbc`
:   É um ID de conexão ou ID de resultado no qual as configurações serão alteradas.
    Para SQLSetConnectOption(), este é um ID de conexão.
    Para SQLSetStmtOption(), este é um ID de resultado.

`which`
:   É a função ODBC a ser usada. O valor deve ser
    1 para SQLSetConnectOption() e
    2 para SQLSetStmtOption().

`option`
:   A opção a ser definida.

`value`
:   O valor para a opção informada em `option`.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `odbc` agora espera uma instância de [Odbc\Connection](class.odbc-connection.md) ou de [Odbc\Result](class.odbc-result.md); anteriormente, esperava um [resource](language.types.resource.md). |

### Examples

**Exemplo #1 Exemplos de **odbc\_setoption()****

```
<?php
// 1. Opção 102 de SQLSetConnectOption() é SQL_AUTOCOMMIT.
//    Valor 1 de SQL_AUTOCOMMIT é SQL_AUTOCOMMIT_ON.
//    Este exemplo tem o mesmo efeito de
//    odbc_autocommit($conn, true);

odbc_setoption($conn, 1, 102, 1);

// 2. Opção 0 de SQLSetStmtOption() é SQL_QUERY_TIMEOUT.
//    Este exemplo define que a consulta expira após 30 segundos.

$result = odbc_prepare($conn, $sql);
odbc_setoption($result, 2, 0, 30);
odbc_execute($result);
?>
```

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
