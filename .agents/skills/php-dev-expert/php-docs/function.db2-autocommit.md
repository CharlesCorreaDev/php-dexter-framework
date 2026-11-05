# Retorna ou define o estado AUTOCOMMIT para uma conexão de banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-autocommit.php

---

# db2\_autocommit

(PECL ibm\_db2 >= 1.0.0)

db2\_autocommit — 
Retorna ou define o estado AUTOCOMMIT para uma conexão de banco de dados

### Descrição

function **db2\_autocommit**([resource](language.types.resource.md) `$connection`, [int](language.types.integer.md) `$value` = ?): [int](language.types.integer.md)|[bool](language.types.boolean.md)

Define ou obtém o comportamento AUTOCOMMIT do recurso de conexão especificado.

### Parâmetros

`connection`
:   Uma variável de recurso de conexão de banco de dados válida, conforme retornada de
    [db2\_connect()](function.db2-connect.md) ou [db2\_pconnect()](function.db2-pconnect.md).

`value`
:   Uma das seguintes constantes:

    **`DB2_AUTOCOMMIT_OFF`**
    :   Desativa o AUTOCOMMIT.

    **`DB2_AUTOCOMMIT_ON`**
    :   Ativa o AUTOCOMMIT.

### Valor Retornado

Quando **db2\_autocommit()** recebe apenas o parâmetro
`connection`, ele retorna o estado atual
de AUTOCOMMIT para a conexão solicitada como um valor inteiro. Um valor de
**`DB2_AUTOCOMMIT_OFF`** indica que AUTOCOMMIT está desligado,
enquanto um valor de **`DB2_AUTOCOMMIT_ON`** indica que
AUTOCOMMIT está ligado.

Quando **db2\_autocommit()** recebe o parâmetro
`connection` e o parâmetro
`autocommit`, ele tenta definir o
estado AUTOCOMMIT da conexão solicitada para o estado correspondente.
Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Recuperando o valor AUTOCOMMIT para uma conexão**

No exemplo a seguir, uma conexão que foi criada com
AUTOCOMMIT desativado é testada com a
função **db2\_autocommit()**.

```
<?php
$options = array('autocommit' => DB2_AUTOCOMMIT_OFF);
$conn = db2_connect($database, $user, $password, $options);
$ac = db2_autocommit($conn);
if ($ac == DB2_AUTOCOMMIT_OFF) {
    print "$ac -- AUTOCOMMIT está desativado.";
} else {
    print "$ac -- AUTOCOMMIT está ativado.";
}
?>
```

O exemplo acima produzirá:

```
0 -- AUTOCOMMIT está desativado.
```

**Exemplo #2 Definindo o valor AUTOCOMMIT para uma conexão**

No exemplo a seguir, uma conexão que foi inicialmente criada com
AUTOCOMMIT desativado tem seu comportamento alterado para ativar AUTOCOMMIT.

```
<?php
$options = array('autocommit' => DB2_AUTOCOMMIT_OFF);
$conn = db2_connect($database, $user, $password, $options);

// Ativa o AUTOCOMMIT
$rc = db2_autocommit($conn, DB2_AUTOCOMMIT_ON);
if ($rc) {
    print "Ativação do AUTOCOMMIT bem sucedida.\n";
}

// Verifica o estado do AUTOCOMMIT
$ac = db2_autocommit($conn);
if ($ac == DB2_AUTOCOMMIT_OFF) {
    print "$ac -- AUTOCOMMIT está desativado.";
} else {
    print "$ac -- AUTOCOMMIT está ativado.";
}
?>
```

O exemplo acima produzirá:

```
Ativação do AUTOCOMMIT bem sucedida.
1 -- AUTOCOMMIT está ativado.
```

### Veja também

- [db2\_connect()](function.db2-connect.md) - Retorna uma conexão com um banco de dados
- [db2\_pconnect()](function.db2-pconnect.md) - Retorna uma conexão persistente a um banco de dados

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
