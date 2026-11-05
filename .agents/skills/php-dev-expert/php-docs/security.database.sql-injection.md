# Injeção de SQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/security.database.sql-injection.php

---

## Injeção de SQL

A injeção de SQL é uma técnica onde o agressor explora falhas
no código da aplicação responsável em criar e povoar instruções SQL.
O agressor pode assim obter acesso privilegiado a partes da aplicação,
extrair todos os dados do banco de dados, alterar os dados,
e até mesmo executar comandos perigosos em nível do sistema onde o banco
de dados roda. A falha ocorre quando desenvolvedores concatenam ou
interpolam dados arbitrários em instruções SQL.

**Exemplo #1
Dividindo o conjunto de resultados em páginas ... e criando super-usuários
(PostgreSQL)**

No exemplo a seguir, dados de usuário são diretamente interpolados na
instrução SQL, permitindo ao agressor obter uma conta de superusuário no banco de dados.

```
<?php

$offset = $_GET['offset']; // Usando os dados sem validação!
$query  = "SELECT id, name FROM products ORDER BY name LIMIT 20 OFFSET $offset;";
$result = pg_query($conn, $query);

?>
```

Usuários normais clicam nos links 'próxima' e 'anterior' onde $offset
é codificado na URL. O script espera que o valor de
$offset seja um número decimal. No entanto, e se alguém tentar
quebrar a instrução SQL, utilizando a seguinte URL:

```
0;
insert into pg_shadow(usename,usesysid,usesuper,usecatupd,passwd)
    select 'crack', usesysid, 't','t','crack'
    from pg_shadow where usename='postgres';
--
```

Se isso acontecesse, então o script daria de presente acesso de superusuário ao
atacante. Perceba que `0;` é para fornecer uma deslocamento válido
para a consulta original e terminá-la.

> **Nota**:
>
> É uma técnica comum forçar o avaliador de SQL ignorar o resto da consulta
> escrita pelo desenvolvedor com `--`, que é o sinal de
> comentário no SQL.

Uma maneira de ganhar senhas é desviar suas páginas de resultado de busca.
A única coisa que o atacante precisa fazer é ver se alguma variável enviada
é usada em um comando SQL que não é tratado corretamente. Esses filtros podem ser
configurados de forma a personalizar cláusulas `WHERE, ORDER BY,
LIMIT` e `OFFSET` em cláusulas `SELECT`
Se seu banco de dados suporta o construtor `UNION`,
o atacante pode tentar adicionar uma consulta inteira à consulta original para
listar senhas de uma tabela arbitrária. É altamente recomendável gravar apenas
hashs criptográficos das senhas, ao invés de gravar a senha.

**Exemplo #2
Listando artigos ... e algumas senhas (qualquer banco de dados)**

```
<?php

$query  = "SELECT id, name, inserted, size FROM products
           WHERE size = '$size'";
$result = odbc_exec($conn, $query);

?>
```

A parte estática da consulta pode ser combinada com outro comando
`SELECT` que revela todas as senhas:

```
'
union select '1', concat(uname||'-'||passwd) as name, '1971-01-01', '0' from usertable;
--
```

Instruções `UPDATE` e `INSERT` também podem
ser abusadas em ataques.

**Exemplo #3
De recuperando uma senha ... para ganhando mais privilégios (qualquer banco de dados)**

```
<?php
$query = "UPDATE usertable SET pwd='$pwd' WHERE uid='$uid';";
?>
```

Se um usuário malicioso envia o valor
`' or uid like'%admin%` para $uid para
mudar a senha do administrador, ou simplesmente configura $pwd para
`hehehe', trusted=100, admin='yes` (com um espaço
sobrando) para ganhar mais privilégios. Então, a consulta ficará retorcida:

```
<?php

// $uid: ' or uid like '%admin%
$query = "UPDATE usertable SET pwd='...' WHERE uid='' or uid like '%admin%';";

// $pwd: hehehe', trusted=100, admin='yes
$query = "UPDATE usertable SET pwd='hehehe', trusted=100, admin='yes' WHERE
...;";

?>
```

Pode parecer que o agressor precisa saber alguma coisa
da arquitetura do banco para conduzir um ataque
efetivo, mas obter esse tipo de informação é geralmente bem simples. Por exemplo,
o código pode ser parte de um sistema open source e publicamente disponível.
Esse tipo de informação pode também pode ser obtido
em sistemas de código fechado -- mesmo no caso dele estar ofuscado ou compilado --
e mesmo através do seu próprio código, através de mensagens de erro.
Outros métodos incluem o uso de nomes típicos de tabelas e colunas. Por
exemplo, um formulário de login normalmente utiliza tabelas chamadas 'user' com
colunas chamadas 'id', 'username', e 'password'.

**Exemplo #4 Atacando o sistema de um banco de dados (MSSQL Server)**

Um exemplo assustador de como comandos do sistema operacional podem ser acessados
em alguns bancos de dados.

```
<?php

$query  = "SELECT * FROM products WHERE id LIKE '%$prod%'";
$result = mssql_query($query);

?>
```

Se o atacante enviar o valor
`a%' exec master..xp_cmdshell 'net user test testpass /ADD' --`
para $prod, então $query terá o valor:

```
<?php

$query  = "SELECT * FROM products
           WHERE id LIKE '%a%'
           exec master..xp_cmdshell 'net user test testpass /ADD'--";
$result = mssql_query($query);

?>
```

O MSSQL Server executa comandos SQL em um lote incluindo um comando
para adicionar um novo usuário para o banco de dados de contas locais. Se essa aplicação
estiver sendo executada como `sa` e o serviço MSSQLSERVER estivesse
sendo executado com privilégios suficientes, o atacante teria agora uma
conta com a qual poderia acessar essa máquina.

> **Nota**:
>
> A função **mssql\_query()** pertencia à
> extensão `mssql`, que foi
> [removida no PHP 7.0.0](migration70.removed-exts-sapis.md).
> Ela é usada aqui apenas para ilustrar o ataque; o código atual conectando
> ao MSSQL Server deve usar as extensões [sqlsrv](book.sqlsrv.md) ou
> [pdo\_sqlsrv](ref.pdo-sqlsrv.md).

> **Nota**:
>
> Alguns dos exemplos acima estão ligados a bancos específicos. Isso não
> significa que um ataque similar é impossível contra outros produtos.
> Seu servidor de banco de dados pode ter uma vulnerabilidade similar de outra maneira.

![Um exemplo humorado dos problemas relacionados à injeção de SQL](images/fa7c5b5f326e3c4a6cc9db19e7edbaf0-xkcd-bobby-tables.png)

Imagem cortesia de [» xkcd](https://xkcd.com/327)

### Técnicas para evitar ataques

A maneira recomendada de evitar ataques de injeção de SQL é informar todos os
dados em instruções preparadas. Usar instruções parametrizadas não é o suficiente
para evitar SQL injection, mas é a maneira mais rápida e segura de fornecer dados
a instruções SQL. Todos os dados dinâmicos em `WHERE`,
`SET`, e `VALUES` precisam ser
substituídos por âncoras. Os dados em si serão informados durante a
execução, e serão enviados separadamente do comando SQL.

Informar dados via parâmetros deve ser utilizado apenas para dados. Outras partes dinâmicas
de uma instrução SQL precisa ser filtrada por uma lista prévia e conhecida de valores válidos.

**Exemplo #5 Evitando SQL injection ao utilizar instruções preparadas PDO**

```
<?php

// A parte SQL dinâmica precisa é validada a partir de dados prévios
$sortingOrder = $_GET['sortingOrder'] === 'DESC' ? 'DESC' : 'ASC';
$productId = $_GET['productId'];
// O SQL é preparado utilizando âncoras
$stmt = $pdo->prepare("SELECT * FROM products WHERE id LIKE ? ORDER BY price {$sortingOrder}");
// O valor é informado, incluindo caracteres curinga
$stmt->execute(["%{$productId}%"]);

?>
```

Instruções preparadas são fornecidas
[no PDO](pdo.prepared-statements.md),
[no MySQLi](mysqli.quickstart.prepared-statements.md),
e por outras bibliotecas de bancos de dados.

Ataques de injeção de SQL são principalmente baseados na exploração de código que não é
escrito pensando em segurança. Nunca confie em nenhum dado enviado pelo usuário,
e menos ainda em dados enviados pelo navegador, mesmo que o dado venha de um option box
ou um campo hidden, nem mesmo cookies. O primeiro exemplo mostra como
uma instrução SQL muito simples pode causar um dano desastroso.

Uma estratégia de defesa envolve várias boas práticas de codificação:

- Nunca se conecte ao banco de dados utilizando um usuário administrador ou dono
  dos objetos do banco. Sempre utilize usuários com privilégios mínimos.
- Sempre verifique se o dado enviado tem o tipo esperado. O PHP possui
  várias funções de validação de dados, de coisas simples como
  as encontradas em [funções de variável](ref.var.md) e
  em [funções de string](ref.ctype.md)
  (por exemplo, [is\_numeric()](function.is-numeric.md), [ctype\_digit()](function.ctype-digit.md))
  a coisas mais avançadas como
  suporte a
  [expressões regulares compatíveis com Perl](ref.pcre.md).
- Se a aplicação espera dados numéricos, considere verificar os dados
  com [ctype\_digit()](function.ctype-digit.md), ou modificar os dados utilizando
  [settype()](function.settype.md), ou ainda reformatar o dado
  com [sprintf()](function.sprintf.md).
- Se o banco de dados não suportar enviar dados por parâmetros, então
  é necessário escapar todos os dados de usuário não numéricos, passando
  o dado para funções específicas de escape do banco (por exemplo
  [mysql\_real\_escape\_string()](function.mysql-real-escape-string.md),
  **sqlite\_escape\_string()**, etc).
  Funções genéricas como [addslashes()](function.addslashes.md) são úteis apenas
  em contextos específicos (por exemplo, no MySQL é possível modificar o
  comportamento das aspas com NO\_BACKSLASH\_ESCAPES), então
  o escape específico é necessário.
- Nunca imprima nenhum dado ou erro específico do banco de dados, especialmente
  dados referentes a schema. Veja também [exibição de erros](security.errors.md) e [funções de manipulação e log de erros](ref.errorfunc.md).

Além disso, você ganha em relatar consultas ou dentro do script
ou no próprio banco de dados, se esse suportar. Obviamente, o relatório é incapaz
de prevenir qualquer tentativa danosa, mas pode ser útil para ajudar a
rastrear qual aplicação foi atacada. O relatório não é útil em si, mas
através da informação que ele contém. Mais detalhes geralmente é melhor que menos.

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
