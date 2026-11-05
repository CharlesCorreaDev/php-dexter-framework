# Fecha uma conexão persistente a um banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-pclose.php

---

# db2\_pclose

(PECL ibm\_db2 >= 1.8.0)

db2\_pclose — Fecha uma conexão persistente a um banco de dados

### Descrição

function **db2\_pclose**([resource](language.types.resource.md) `$connection`): [bool](language.types.boolean.md)

Esta função fecha uma conexão de cliente DB2 criada com
[db2\_pconnect()](function.db2-pconnect.md) e retorna os recursos correspondentes
para o servidor de banco de dados.
> **Nota**:
>
> Esta função só está disponível no i5/OS em resposta a solicitações de
> administração do sistema i5/OS.

Se houver uma conexão de cliente DB2 persistente criada com
[db2\_pconnect()](function.db2-pconnect.md), esta função pode ser usada para fechar a
conexão. Para evitar penalidades substanciais no desempenho da conexão, esta
função deve ser usada apenas em casos raros quando a conexão persistente
parar de responder ou não for necessária por
um longo período de tempo.

### Parâmetros

`connection`
:   Especifica uma conexão de cliente DB2 ativa.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Fechando uma conexão persistente**

O exemplo a seguir demonstra uma tentativa bem-sucedida de fechar uma
conexão com um banco de dados IBM DB2 i5/OS.

```
<?php
$conn = db2_pconnect('', '', '');
$rc = db2_pclose($conn);
if ($rc) {
    echo "A conexão foi encerrada com sucesso.";
}
?>
```

O exemplo acima produzirá:

```
A conexão foi encerrada com sucesso.
```

### Veja também

- [db2\_close()](function.db2-close.md) - Fecha uma conexão de banco de dados
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
