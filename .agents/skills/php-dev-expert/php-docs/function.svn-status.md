# Retorna o status dos arquivos e diretórios da cópia de trabalho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.svn-status.php

---

# svn\_status

(PECL svn >= 0.1.0)

svn\_status — Retorna o status dos arquivos e diretórios da cópia de trabalho

### Descrição

function **svn\_status**([string](language.types.string.md) `$path`, [int](language.types.integer.md) `$flags` = 0): [array](language.types.array.md)

Retorna o status dos arquivos e diretórios da cópia de trabalho, fornecendo modificações,
adições, exclusões e outras alterações nos itens da cópia de trabalho.

### Parâmetros

`path`
:   Caminho local para o arquivo ou diretório para recuperar o status.

    > **Nota**:
    >
    > Os caminhos relativos serão resolvidos como se o diretório de trabalho atual fosse aquele que contém o binário do PHP. Para usar o diretório de trabalho do script de chamada, use [realpath()](function.realpath.md) ou dirname(\_\_FILE\_\_).

`flags`
:   Qualquer combinação de **`Svn::NON_RECURSIVE`**,
    **`Svn::ALL`** (independentemente do status da modificação),
    **`Svn::SHOW_UPDATES`** (entradas serão adicionadas para itens
    desatualizados), **`Svn::NO_IGNORE`** (desconsidera as propriedades
    `svn:ignore` ao procurar por novos arquivos)
    e **`Svn::IGNORE_EXTERNALS`**.

### Valor Retornado

Retorna um array indexado numericamente de arrays associativos detalhando
o status dos itens no repositório:

```
Array (
    [0] => Array (
        // informação sobre o item
    )
    [1] => ...
)
```

As informações sobre o item são um array associativo que pode conter
as seguintes chaves:

path
:   String com o caminho para o arquivo/diretório desta entrada no sistema de arquivos local.

text\_status
:   Status do texto do item. Consulte as [constantes de status](svn.constants.md#svn.constants.status) para obter os valores possíveis.

repos\_text\_status
:   Status do texto do item no repositório. Tem precisão somente se
    `update` estiver definido como **`true`**.
    Consulte as [constantes de status](svn.constants.md#svn.constants.status) para obter os valores possíveis.

prop\_status
:   Status das propriedades do item. Consulte as [constantes de status](svn.constants.md#svn.constants.status) para obter os valores possíveis.

repos\_prop\_status
:   Status da propriedade do item no repositório. Tem precisão somente se
    `update` estiver definido como **`true`**. Consulte as [constantes de status](svn.constants.md#svn.constants.status) para obter os valores possíveis.

locked
:   Se o item está bloqueado ou não. (Definido somente se **`true`**.)

copied
:   Se o item foi copiado ou não (agendado para adição com
    histórico). (Definido somente se **`true`**.)

switched
:   Se o item foi alternado ou não usando o comando switch.
    (Definido somente se **`true`**)

Essas chaves só serão definidas se o item for versionado:

name
:   Nome base do item no repositório.

url
:   URL do item no repositório.

repos
:   URL base do repositório.

revision
:   Número inteiro com revisão do item na cópia de trabalho.

kind
:   Tipo de item, ou seja, arquivo ou diretório. Consulte as [constantes de tipo](svn.constants.md#svn.constants.type) para obter os valores possíveis.

schedule
:   Ação agendada para o item, ou seja, adição ou exclusão. Constantes
    para esses números mágicos não estão disponíveis, elas podem
    ser emuladas usando:

    ```
    <?php
    if (!defined('svn_wc_schedule_normal')) {
        define('svn_wc_schedule_normal',  0); // nada de especial
        define('svn_wc_schedule_add',     1); // item será adicionado
        define('svn_wc_schedule_delete',  2); // item será excluído
        define('svn_wc_schedule_replace', 3); // item será adicionado e excluído
    }
    ?>
    ```

deleted
:   Se o item foi excluído ou não, mas a revisão dos pais está
    atrasada. (Definido somente se **`true`**.)

absent
:   Se o item está ausente ou não, ou seja, o Subversion sabe que
    deveria haver algo lá, mas não há. (Definido somente se
    **`true`**.)

incomplete
:   Se o arquivo de entradas de um diretório está incompleto ou não.
    (Definido somente se **`true`**.)

cmt\_date
:   Inteiro com o timestamp Unix da data/horário do último envio. (Não afetado por `update`.)

cmt\_rev
:   Inteiro com a revisão do último envio. (Não afetado por `update`.)

cmt\_author
:   String com o nome do autor do último envio. (Não afetado por `update`.)

prop\_time
:   Inteiro com o timestamp Unix do último horário atualizado para as propriedades.

text\_time
:   Inteiro com o timestamp Unix do último horário atualizado para o texto.

### Examples

**Exemplo #1 Exemplo básico**

Este exemplo demonstra um uso teórico básico desta função.

```
<?php
print_r(svn_status(realpath('wc')));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array (
    [0] => Array (
        [path] => /home/bob/wc/sandwich.txt
        [text_status] => 8 // item foi modificado
        [repos_text_status] => 1 // nenhuma informação disponível, use 'update'
        [prop_status] => 3 // sem alterações
        [repos_prop_status] => 1 // nenhuma informação disponível, use 'update'
        [name] => sandwich.txt
        [url] => http://www.example.com/svnroot/deli/trunk/sandwich.txt
        [repos] => http://www.example.com/svnroot/
        [revision] => 123
        [kind] => 1 // arquivo
        [schedule] => 0 // nenhuma ação especial programada
        [cmt_date] => 1165543135
        [cmt_rev] => 120
        [cmt_author] => Alice
        [prop_time] => 1180201728
        [text_time] => 1180201729
    )
)
```

### Notas

**Aviso**

Esta função é
*EXPERIMENTAL*. O comportamento desta função, seu nome e
documentação poderão mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

### Veja também

- [svn\_update()](function.svn-update.md) - Atualiza a cópia de trabalho
- [svn\_log()](function.svn-log.md) - Retorna as mensagens de registro de envios de uma URL de repositório
- [» Documentação do SVN sobre svn status](https://svnbook.red-bean.com/en/1.2/svn.ref.svn.c.status.html)

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
