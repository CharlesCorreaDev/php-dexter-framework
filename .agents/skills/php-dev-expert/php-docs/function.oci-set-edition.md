# Define a edição do banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-set-edition.php

---

# oci\_set\_edition

(PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL OCI8 >= 1.4.0)

oci\_set\_edition — Define a edição do banco de dados

### Descrição

function **oci\_set\_edition**([string](language.types.string.md) `$edition`): [bool](language.types.boolean.md)

Define a "edição" do banco de dados dos objetos a serem usados ​​por conexões
subsequentes.

As edições Oracle permitem que versões simultâneas de aplicações sejam executadas
usando o mesmo esquema e nomes de objetos. Isso é útil para
atualizar sistemas ativos.

Chame **oci\_set\_edition()** antes de chamar
[oci\_connect()](function.oci-connect.md), [oci\_pconnect()](function.oci-pconnect.md)
ou [oci\_new\_connect()](function.oci-new-connect.md).

Se uma edição definida que não seja válida no banco de dados, a conexão
falhará mesmo que **oci\_set\_edition()** retorne sucesso.

Ao usar conexões persistentes, se uma conexão com a
configuração de edição solicitada já existir, ela será reutilizada. Caso contrário,
uma conexão persistente diferente será criada.

### Parâmetros

`edition`
:   Nome da edição do Oracle Database criada anteriormente com o comando SQL
    "`CREATE EDITION`".

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Dois scripts podem usar versões diferentes de myfunc() ao mesmo tempo**

```
<?php

// Arquivo 1

echo "Versão 1 da aplicação\n";

oci_set_edition('ORA$BASE');
$c = oci_connect('hr', 'welcome', 'localhost/XE');

$s = oci_parse($c, "begin :r := myfunc(); end;");
oci_bind_by_name($s, ":r", $r, 20);
oci_execute($s);
echo "O resultado é $r\n";

?>
```

```
<?php

// Arquivo 2

echo "Versão 2 da aplicação\n";

oci_set_edition('E1');
$c = oci_connect('hr', 'welcome', 'localhost/XE');

$s = oci_parse($c, "begin :r := myfunc(); end;");
oci_bind_by_name($s, ":r", $r, 20);
oci_execute($s);
echo "O resultado é $r\n";

?>
```

### Notas

> **Nota**:
> **Requisito de versão Oracle**  
>
> Esta função está disponível a partir do Oracle 11*g*R2.

**Cuidado**

# Conexões persistentes

Para evitar inconsistências e erros inesperados, não utilize ALTER
SESSION SET EDITION para alterar a edição em conexões persistentes.

**Cuidado**

# Pool de conexões DRCP

Para evitar inconsistências e erros inesperados ao usar edições
e [DRCP](oci8.connection.md) com o Oracle
11.2.0.1, mantenha uma correspondência um-para-um entre
o [oci8.connection\_class](oci8.configuration.md#ini.oci8.connection-class)
e o nome da edição usada pelas aplicações. Cada servidor em pool de
uma determinada classe de conexão deve ser usado apenas com uma edição.
Essa restrição foi removida com o Oracle 11.2.0.2.

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
