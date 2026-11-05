# Conjuntos de caracteres

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqlinfo.concepts.charset.php

---

## Conjuntos de caracteres

Idealmente, um conjunto de caracteres adequado será definido no nível do servidor, e isso é descrito
na seção [» Configuração do conjunto de caracteres](https://dev.mysql.com/doc/mysql/en/charset-configuration.html)
do manual do servidor MySQL. Alternativamente, cada API MySQL oferece um método para definir
o conjunto de caracteres em tempo de execução.

**Cuidado**

# O conjunto de caracteres e escape de caracteres

O conjunto de caracteres deve ser entendido e definido, pois afeta todas as
ações e inclui implicações de segurança. Por exemplo, o mecanismo de escape
(por exemplo, [mysqli\_real\_escape\_string()](mysqli.real-escape-string.md) para mysqli e [PDO::quote()](pdo.quote.md) para PDO\_MySQL) irá aderir a
esta configuração. É importante perceber que essas funções não usarão o conjunto
de caracteres definido com uma consulta, portanto, por exemplo, o seguinte não terá efeito
sobre elas:

**Exemplo #1 Problemas ao definir o conjunto de caracteres com SQL**

```
<?php

$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

// Não afetará $mysqli->real_escape_string();
$mysqli->query("SET NAMES utf8mb4");

// Não afetará $mysqli->real_escape_string();
$mysqli->query("SET CHARACTER SET utf8mb4");

// Mas isto afetará $mysqli->real_escape_string();
$mysqli->set_charset('utf8mb4');

// Porém, isto NÃO irá afetá-la (UTF-8 vs utf8mb4) -- não use hífens aqui
$mysqli->set_charset('UTF-8');
?>
```

Abaixo estão exemplos que demonstram como alterar adequadamente o conjunto de caracteres em tempo de execução
usando cada API.

> **Nota**:
> **Possível confusão UTF-8**  
>
> Como os nomes dos conjuntos de caracteres no MySQL não contêm hífens, a string
> "utf8" é válida no MySQL para definir o conjunto de caracteres como UTF-8 (codificação Unicode UTF-8 de até 3 bytes). A string
> "UTF-8" não é válida, pois o uso de "UTF-8" não alterará o conjunto de caracteres e gerará um erro.

**Exemplo #2 Exemplo de definição do conjunto de caracteres: mysqli**

```
<?php
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

echo 'Conjunto de caracteres inicial: ' . $mysqli->character_set_name() . "\n";

if (!$mysqli->set_charset('utf8mb4')) {
    printf("Erro ao carregar o conjunto de caracteres utf8mb4: %s\n", $mysqli->error);
    exit;
}

echo 'Seu conjunto de caracteres atual é: ' . $mysqli->character_set_name() . "\n";
?>
```

**Exemplo #3 Exemplo de definição do conjunto de caracteres: [pdo\_mysql](ref.pdo-mysql.connection.md)**

```
<?php
$pdo = new PDO("mysql:host=localhost;dbname=world;charset=utf8mb4", 'my_user', 'my_pass');
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
