# Abre o banco de dados de forma persistente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dba-popen.php

---

# dba\_popen

(PHP 4, PHP 5, PHP 7, PHP 8)

dba\_popen — Abre o banco de dados de forma persistente

### Descrição

function **dba\_popen**(  
    [string](language.types.string.md) `$path`,  
    [string](language.types.string.md) `$mode`,  
    [?](language.types.null.md)[string](language.types.string.md) `$handler` = **`null`**,  
    [int](language.types.integer.md) `$permission` = 0644,  
    [int](language.types.integer.md) `$map_size` = 0,  
    [?](language.types.null.md)[int](language.types.integer.md) `$flags` = **`null`**  
): [Dba\Connection](class.dba-connection.md)|[false](language.types.singleton.md)

**dba\_popen()** estabelece uma instância persistente do banco de dados
informado em `path` com o modo definido por `mode` usando o manipulador
especificado em `handler`.

### Parâmetros

`path`
:   Normalmente um caminho comum no seu sistema de arquivos.

`mode`
:   Define os modos: `r` para acesso de leitura, `w` para
    acesso de leitura/gravação a um baco de dados já existente, `c`
    para leitura/gravação e criação de banco de dados se ainda não existir,
    e `n` para criar, truncar e acesso leitura/gravação.

`handler`
:   O nome do [manipulador](dba.requirements.md) que
    deve ser usado para acessar o arquivo definido em `path`. São passados
    ​​todos os parâmetros opcionais fornecidos para **dba\_popen()** e
    pode agir em nome deles. Se `handler` for **`null`**,
    o manipulador padrão será invocado.

`permission`
:   Parâmetro opcional [int](language.types.integer.md) que é passado ao driver. Tem o mesmo significado que
    o parâmetro `permissions` de [chmod()](function.chmod.md) (\*nix)
    e o padrão é `0644`.

    Os drivers `db1`, `db2`, `db3`,
    `db4`, `dbm`, `gdbm`,
    `ndbm` e `lmdb` suportam o
    parâmetro `permission`.

`map_size`
:   Parâmetro opcional [int](language.types.integer.md) que é passado ao driver. Seu valor deve ser um múltiplo do
    tamanho da página do sistema operacional, ou zero, para usar o tamanho padrão do mapa.

    Somente o driver `lmdb` aceita o parâmetro `map_size`.

`flags`
:   Permite passar opções aos drivers de banco de dados. Atualmente, suporte apenas ao driver LMDB com as opções
    **`DBA_LMDB_USE_SUB_DIR`** e **`DBA_LMDB_NO_SUB_DIR`**.

### Valor Retornado

Retorna uma instância de [Dba\Connection](class.dba-connection.md) em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

**`false`** é retornado e um erro de nível **`E_WARNING`** é emitido quando
`handler` for **`null`** mas não houver manipulador padrão.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Retorna agora uma instância de [Dba\Connection](class.dba-connection.md); anteriormente, retornava um [resource](language.types.resource.md). |
| 8.2.0 | `flags` foi adicionado. |
| 8.1.0 | `handler` agora pode ser nulo. |
| 7.3.14, 7.4.2 | O driver `lmdb` agora suporta o parâmetro adicional `map_size`. |

### Veja também

- [dba\_open()](function.dba-open.md) - Abre um banco de dados
- [dba\_close()](function.dba-close.md) - Fecha um banco de dados DBA

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
