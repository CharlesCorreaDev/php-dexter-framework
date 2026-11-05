# Faz ping em uma conexão de servidor ou tenta reconectar se a conexão cair

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.ping.php

---

# mysqli::ping

# mysqli\_ping

(PHP 5, PHP 7, PHP 8)

mysqli::ping -- mysqli\_ping — Faz ping em uma conexão de servidor ou tenta reconectar se a conexão cair

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.4.0. O uso desta função
é fortemente desencorajado.

### Descrição

Estilo orientado a objetos

#[[\Deprecated](class.deprecated.md)]  
public function **mysqli::ping**(): [bool](language.types.boolean.md)

Estilo procedural

#[[\Deprecated](class.deprecated.md)]  
function **mysqli\_ping**([mysqli](class.mysqli.md) `$mysql`): [bool](language.types.boolean.md)

Verifica se a conexão com o servidor está funcionando. Se ele estiver inativo e a
opção global [mysqli.reconnect](mysqli.configuration.md#ini.mysqli.reconnect) estiver habilitada,
uma reconexão automática será tentada.

> **Nota**:
>
> A configuração mysqli.reconnect do php.ini é ignorada pelo driver mysqlnd, então a
> reconexão automática nunca é tentada.

Esta função pode ser utilizada por clientes que ficam muito tempo ociosos,
para verificar se o servidor encerrou a conexão e reconectar se
necessário.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Se o relatório de erros da extensão mysqli estiver habilitado (**`MYSQLI_REPORT_ERROR`**) e a operação solicitada falhar,
um aviso será gerado. Se, além disso, o modo for definido como **`MYSQLI_REPORT_STRICT`**,
uma exceção [mysqli\_sql\_exception](class.mysqli-sql-exception.md) será lançada em vez do aviso.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | O método **mysqli::ping()** e a função **mysqli\_ping()** foram descontinuados. A partir do PHP 8.2.0, o recurso de `reconnect` (reconexão) não está mais disponível, tornando esta função obsoleta. |

### Examples

**Exemplo #1 Exemplo de **mysqli::ping()****

Estilo orientado a objetos

```
<?php
$mysqli = new mysqli("localhost", "meu_usuario", "minha_senha", "mundo");

/* verifica a conexão */
if ($mysqli->connect_errno) {
    printf("Falha na conexão: %s\n", $mysqli->connect_error);
    exit();
}

/* verifica se o servidor está ativo */
if ($mysqli->ping()) {
    printf ("Nossa conexão está ok!\n");
} else {
    printf ("Erro: %s\n", $mysqli->error);
}

/* encerra a conexão */
$mysqli->close();
?>
```

Estilo procedural

```
<?php
$link = mysqli_connect("localhost", "meu_usuario", "minha_senha", "mundo");

/* verifica a conexão */
if (mysqli_connect_errno()) {
    printf("Falha na conexão: %s\n", mysqli_connect_error());
    exit();
}

/* verifica se o servidor está ativo */
if (mysqli_ping($link)) {
    printf ("Nossa conexão está ok!\n");
} else {
    printf ("Erro: %s\n", mysqli_error($link));
}

/* encerra a conexão */
mysqli_close($link);
?>
```

Os exemplos acima produzirão:

```
Nossa conexão está ok!
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
