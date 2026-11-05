# Inicia uma tarefa de restauração no gerenciador de serviços e retorna imediatamente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-restore.php

---

# ibase\_restore

(PHP 5, PHP 7 < 7.4.0)

ibase\_restore — Inicia uma tarefa de restauração no gerenciador de serviços e retorna imediatamente

### Descrição

function **ibase\_restore**(  
    [resource](language.types.resource.md) `$service_handle`,  
    [string](language.types.string.md) `$source_file`,  
    [string](language.types.string.md) `$dest_db`,  
    [int](language.types.integer.md) `$options` = 0,  
    [bool](language.types.boolean.md) `$verbose` = **`false`**  
): [mixed](language.types.mixed.md)

Esta função passa os argumentos para o servidor de banco de dados (remoto). Lá, ele inicia um novo processo de restauração. Portanto, você
não obterá nenhuma resposta.

### Parâmetros

`service_handle`
:   Uma conexão aberta anteriormente com o servidor de banco de dados.

`source_file`
:   O caminho absoluto no servidor onde o arquivo de backup está localizado.

`dest_db`
:   O caminho para criar o novo banco de dados no servidor. Pode-se também usar o apelido do banco de dados.

`options`
:   Opções adicionais para passar ao servidor de banco de dados para restauração.
    O parâmetro `options` pode ser uma combinação
    das seguintes constantes:
    **`IBASE_RES_DEACTIVATE_IDX`**,
    **`IBASE_RES_NO_SHADOW`**,
    **`IBASE_RES_NO_VALIDITY`**,
    **`IBASE_RES_ONE_AT_A_TIME`**,
    **`IBASE_RES_REPLACE`**,
    **`IBASE_RES_CREATE`**,
    **`IBASE_RES_USE_ALL_SPACE`**,
    **`IBASE_PRP_PAGE_BUFFERS`**,
    **`IBASE_PRP_SWEEP_INTERVAL`** e
    **`IBASE_RES_CREATE`**.
    Leia a seção sobre [Constantes predefinidas](ibase.constants.md) para mais informações.

`verbose`
:   Como o processo de restauração é feito no servidor de banco de dados, não há como
    obter sua saída. Este argumento é inútil.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

Como o processo de restauração é feito no servidor (remoto), esta função apenas passa os argumentos para ele.
Embora os argumentos sejam legais, não será obtido **`false`**.

### Examples

**Exemplo #1 Exemplo de **ibase\_restore()****

```
<?php

// Conecta-se ao servidor de banco de dados por endereço IP e porta
$service = ibase_service_attach ('10.1.11.200/3050', 'sysdba', 'masterkey');

// Inicia o processo de restauração no servidor de banco de dados
// Restaura o backup 'employees' para o novo banco de dados 'emps.fdb'
// Não usa nenhum argumento especial
ibase_restore($service, '/srv/backup/employees.fbk', '/srv/firebird/emps.fdb');

// Libera a conexão
ibase_service_detach ($service);
?>
```

**Exemplo #2 Exemplo de **ibase\_restore()** com argumentos**

```
<?php

// Conecta-se ao servidor de banco de dados por nome e porta padrão
$service = ibase_service_attach ('fb-server.contoso.local', 'sysdba', 'masterkey');

// Inicia o processo de restauração no servidor de banco de dados
// Restaurar o banco de dados 'employees' usando o apelido.
// Restaura sem índices. Substitui banco de dados existente.
ibase_restore($service, '/srv/backup/employees.fbk', 'employees.fdb', IBASE_RES_DEACTIVATE_IDX | IBASE_RES_REPLACE);

// Libera a conexão
ibase_service_detach ($service);
?>
```

### Veja também

- [ibase\_backup()](function.ibase-backup.md) - Inicia uma tarefa de backup no gerenciador de serviços e retorna imediatamente

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
