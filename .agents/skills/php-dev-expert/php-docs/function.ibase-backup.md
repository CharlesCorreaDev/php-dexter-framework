# Inicia uma tarefa de backup no gerenciador de serviços e retorna imediatamente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-backup.php

---

# ibase\_backup

(PHP 5, PHP 7 < 7.4.0)

ibase\_backup — Inicia uma tarefa de backup no gerenciador de serviços e retorna imediatamente

### Descrição

function **ibase\_backup**(  
    [resource](language.types.resource.md) `$service_handle`,  
    [string](language.types.string.md) `$source_db`,  
    [string](language.types.string.md) `$dest_file`,  
    [int](language.types.integer.md) `$options` = 0,  
    [bool](language.types.boolean.md) `$verbose` = **`false`**  
): [mixed](language.types.mixed.md)

Esta função passa os argumentos para o servidor de banco de dados (remoto). Lá, ele inicia um novo processo de backup.
Portanto, nenhuma resposta será obtida.

### Parâmetros

`service_handle`
:   Uma conexão aberta anteriormente com o servidor de banco de dados.

`source_db`
:   O caminho absoluto do arquivo para o banco de dados no servidor de banco de dados. Pode-se também usar um apelido de banco de dados.

`dest_file`
:   O caminho para o arquivo de backup no servidor de banco de dados.

`options`
:   Opções adicionais para passar ao servidor de banco de dados para backup.
    O parâmetro `options` pode ser uma combinação
    das seguintes constantes:
    **`IBASE_BKP_IGNORE_CHECKSUMS`**,
    **`IBASE_BKP_IGNORE_LIMBO`**,
    **`IBASE_BKP_METADATA_ONLY`**,
    **`IBASE_BKP_NO_GARBAGE_COLLECT`**,
    **`IBASE_BKP_OLD_DESCRIPTIONS`**,
    **`IBASE_BKP_NON_TRANSPORTABLE`** ou
    **`IBASE_BKP_CONVERT`**.
    Leia a seção sobre [Constantes predefinidas](ibase.constants.md) para mais informações.

`verbose`
:   Como o processo de backup é feito no servidor de banco de dados, a saída não
    poderá ser obtida. Este argumento é inútil.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

Como o processo de backup é feito no servidor (remoto), esta função apenas passa os argumentos para ele.
Embora os argumentos sejam legais, não será obtido **`false`**.

### Examples

**Exemplo #1 Exemplo de **ibase\_backup()****

```
<?php

// Conecta-se ao servidor de banco de dados por endereço IP e porta
$service = ibase_service_attach ('10.1.11.200/3050', 'sysdba', 'masterkey');

// Inicia o processo de backup no servidor de banco de dados
// Faz backup do banco de dados de funcionários usando o caminho completo para /srv/backup/employees.fbk
// Não usa nenhum argumento especial
ibase_backup($service, '/srv/firebird/employees.fdb', '/srv/backup/employees.fbk');

// Libera a conexão
ibase_service_detach ($service);
?>
```

**Exemplo #2 Exemplo de **ibase\_backup()** com argumentos**

```
<?php

// Conecta-se ao servidor de banco de dados por nome e porta padrão
$service = ibase_service_attach ('fb-server.contoso.local', 'sysdba', 'masterkey');

// Inicia o processo de backup no servidor de banco de dados
// Faz backup do banco de dados de funcionários usando o apelido /srv/backup/employees.fbk.
// Faz backup somente dos metadados. Não cria um backup transportável.
ibase_backup($service, 'employees.fdb', '/srv/backup/employees.fbk', IBASE_BKP_METADATA_ONLY | IBASE_BKP_NON_TRANSPORTABLE);

// Libera a conexão
ibase_service_detach ($service);
?>
```

### Veja também

- [ibase\_restore()](function.ibase-restore.md) - Inicia uma tarefa de restauração no gerenciador de serviços e retorna imediatamente

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
