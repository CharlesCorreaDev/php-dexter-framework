# Abre um banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dba-open.php

---

# dba\_open

(PHP 4, PHP 5, PHP 7, PHP 8)

dba\_open — Abre um banco de dados

### Descrição

function **dba\_open**(  
    [string](language.types.string.md) `$path`,  
    [string](language.types.string.md) `$mode`,  
    [?](language.types.null.md)[string](language.types.string.md) `$handler` = **`null`**,  
    [int](language.types.integer.md) `$permission` = 0644,  
    [int](language.types.integer.md) `$map_size` = 0,  
    [?](language.types.null.md)[int](language.types.integer.md) `$flags` = **`null`**  
): [Dba\Connection](class.dba-connection.md)|[false](language.types.singleton.md)

**dba\_open()** estabelece uma instância de banco de dados para
o arquivo especificado em `path` no modo definido por `mode` usando
o manipulador informado em `handler`.

### Parâmetros

`path`
:   Normalmente um caminho comum no seu sistema de arquivos.

`mode`
:   Define os modos: `r` para acesso de leitura, `w` para
    acesso de leitura/gravação a um baco de dados já existente, `c`
    para leitura/gravação e criação de banco de dados se ainda não existir,
    e `n` para criar, truncar e acesso leitura/gravação.
    O banco de dados é criado modo de árvore binária (BTree), outros modos (como Hash ou Queue)
    não são suportados.

    Além disso, pode ser definido o método de trava do banco de dados com o próximo caractere.
    Use `l` para travar o banco de dados com um arquivo .lck
    ou `d` para travar o próprio arquivo de banco de dados. É
    importante que todas as aplicações façam isso de forma consistente.

    Se a intenção for testar o acesso e não esperar pela trava,
    pode-se adicionar `t` como terceiro caractere. Quando
    houver certeza absoluta de que não é necessário travar o banco de dados,
    pode-se fazê-lo usando `-` em vez de `l` ou
    `d`. Quando nenhum dos caracteres `d`,
    `l` ou `-` forem usados, o DBA irá travar
    o arquivo de banco de dados como faria com `d`.

    > **Nota**:
    >
    > Só pode haver um gravador para um arquivo de banco de dados. Quando um DBA é usados
    > em um servidor web e mais de uma solicitação requerer operações de gravação, elas só
    > poderão ser feitas uma após a outra. Também não será permitido ler durante a gravação.
    > A extensão DBA usa travas para evitar isso. Veja a tabela a seguir:
    >
    > **Travas DBA**
    >
    > | já aberto | `mode` = "rl" | `mode` = "rlt" | `mode` = "wl" | `mode` = "wlt" | `mode` = "rd" | `mode` = "rdt" | `mode` = "wd" | `mode` = "wdt" |
    > | --- | --- | --- | --- | --- | --- | --- | --- | --- |
    > | não aberto | ok | ok | ok | ok | ok | ok | ok | ok |
    > | `mode` = "rl" | ok | ok | espera | falso | ilegal | ilegal | ilegal | ilegal |
    > | `mode` = "wl" | espera | falso | espera | falso | ilegal | ilegal | ilegal | ilegal |
    > | `mode` = "rd" | ilegal | ilegal | ilegal | ilegal | ok | ok | espera | falso |
    > | `mode` = "wd" | ilegal | ilegal | ilegal | ilegal | espera | falso | espera | falso |
    >
    > - ok: a segunda chamada será bem sucedida.
    > - espera: a segunda chamada espera até que [dba\_close()](function.dba-close.md) seja chamada para a primeira.
    > - falso: a segunda chamada retorna falso.
    > - ilegal: não se deve misturar os modificadores `"l"` e `"d"` no parâmetro `mode`.

`handler`
:   O nome do [manipulador](dba.requirements.md) que
    deve ser usado para acessar o arquivo definido em `path`. São passados
    ​​todos os parâmetros opcionais fornecidos para **dba\_open()** e
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
:   Opções a serem passadas aos drivers de banco de dados. Se for **`null`**, as opções padrão serão passadas.
    Atualmente, apenas o driver LMDB suporta as opções
    **`DBA_LMDB_USE_SUB_DIR`** e
    **`DBA_LMDB_NO_SUB_DIR`**.

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
| 8.2.0 | `handler` agora pode ser nulo. |
| 7.3.14, 7.4.2 | O driver `lmdb` agora suporta o parâmetro adicional `map_size`. |

### Veja também

- [dba\_popen()](function.dba-popen.md) - Abre o banco de dados de forma persistente
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
