# Altera o usuário da conexão com o banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.change-user.php

---

# mysqli::change\_user

# mysqli\_change\_user

(PHP 5, PHP 7, PHP 8)

mysqli::change\_user -- mysqli\_change\_user — Altera o usuário da conexão com o banco de dados

### Descrição

Estilo orientado a objetos

public function **mysqli::change\_user**([string](language.types.string.md) `$username`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$password`, [?](language.types.null.md)[string](language.types.string.md) `$database`): [bool](language.types.boolean.md)

Estilo procedural

function **mysqli\_change\_user**(  
    [mysqli](class.mysqli.md) `$mysql`,  
    [string](language.types.string.md) `$username`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$password`,  
    [?](language.types.null.md)[string](language.types.string.md) `$database`  
): [bool](language.types.boolean.md)

Tenta conexão ao banco de dados especificado usando as credenciais fornecidas.

Em comparação ao método [mysqli::connect()](mysqli.construct.md), este método não
não fechará a conexão atual se a nova conexão não puder ser aberta.

Para conseguir mudar usuários com sucesso, os parâmetors `username` e
`password` fornecidos devem ser válidos e este usuário deve ter
permissões suficientes para acessar o banco de dados desejado. Se por qualquer motivo a autorização
falhar, a autenticação do usuário atual irá permanecer.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

`username`
:   O nome do usuário MySQL.

`password`
:   A senha MySQL.

`database`
:   O nome do banco de dados. Se **`null`** ou uma string vazia forem passados,
    a conexão ao servidor será aberta sem banco de dados padrão.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Se o relatório de erros da extensão mysqli estiver habilitado (**`MYSQLI_REPORT_ERROR`**) e a operação solicitada falhar,
um aviso será gerado. Se, além disso, o modo for definido como **`MYSQLI_REPORT_STRICT`**,
uma exceção [mysqli\_sql\_exception](class.mysqli-sql-exception.md) será lançada em vez do aviso.

### Examples

**Exemplo #1 Redefinindo a sessão da conexão**

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "meu_usuario", "minha_senha", "teste");

$mysqli->query("SET @a:=1");

$mysqli->change_user("meu_usuario", "minha_senha", "mundo");

$result = $mysqli->query("SELECT DATABASE()");
$row = $result->fetch_row();
printf("Banco de dados padrão: %s\n", $row[0]);

$result = $mysqli->query("SELECT @a");
$row = $result->fetch_row();
if ($row[0] === null) {
    printf("Valor da variável 'a' é NULL\n");
}
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "meu_usuario", "minha_senha", "teste");

mysqli_query($link, "SET @a:=1");

mysqli_change_user($link, "meu_usuario", "minha_senha", "mundo");

$result = mysqli_query($link, "SELECT DATABASE()");
$row = mysqli_fetch_row($result);
printf("Banco de dados padrão: %s\n", $row[0]);

$result = mysqli_query($link, "SELECT @a");
$row = mysqli_fetch_row($result);
if ($row[0] === null) {
    printf("Valor da variável 'a' é NULL\n");
}
```

Os exemplos acima produzirão:

```
Banco de dados padrão: mundo
Valor da variável 'a' é NULL
```

**Exemplo #2 Se `database` for **`null`** a conexão é aberta sem selecionar nenhum banco de dados padrão**

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "meu_usuario", "minha_senha", "teste");

$mysqli->change_user("meu_usuario", "minha_senha", null);

$result = $mysqli->query("SELECT DATABASE()");
$row = $result->fetch_row();
printf("Banco de dados padrão: %s\n", $row[0]);
```

Os exemplos acima produzirão:

```
Banco de dados padrão:
```

### Notas

> **Nota**:
>
> Usar este comando sempre irá fazer com que a conexão atual se
> comporte como se fosse uma conexão totalmente nova, não importando se
> a operação foi completada com sucesso. Esta reinicialização inclui realizar
> uma reversão de dados em quaisquer transações ativas, fechando todas as tabelas temporárias e
> destravando todas as tabelas travadas.

### Veja também

- [mysqli\_connect()](function.mysqli-connect.md) - Sinônimo de mysqli::\_\_construct
- [mysqli\_select\_db()](mysqli.select-db.md) - Seleciona o banco de dados padrão para consultas de banco de dados

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
