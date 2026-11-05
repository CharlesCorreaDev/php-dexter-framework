# Agenda a adição de um item em um diretório de trabalho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.svn-add.php

---

# svn\_add

(PECL svn >= 0.1.0)

svn\_add — Agenda a adição de um item em um diretório de trabalho

### Descrição

function **svn\_add**([string](language.types.string.md) `$path`, [bool](language.types.boolean.md) `$recursive` = **`true`**, [bool](language.types.boolean.md) `$force` = **`false`**): [bool](language.types.boolean.md)

Adiciona o arquivo, diretório ou ligação simbólica em `path`
ao diretório de trabalho. O item será adicionado ao repositório
na próxima vez que [svn\_commit()](function.svn-commit.md) for chamada na cópia
de trabalho.

### Parâmetros

`path`
:   Caminho do item a ser adicionado.

    > **Nota**:
    >
    > Os caminhos relativos serão resolvidos como se o diretório de trabalho atual fosse aquele que contém o binário do PHP. Para usar o diretório de trabalho do script de chamada, use [realpath()](function.realpath.md) ou dirname(\_\_FILE\_\_).

`recursive`
:   Se o item for um diretório, se deve ou não adicionar recursivamente
    todo o seu conteúdo. O padrão é **`true`**.

`force`
:   Se verdadeiro, o Subversion recorrerá a diretórios já versionados
    para adicionar arquivos não versionados que possam estar ocultos nesses
    diretórios. O padrão é **`false`**.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **svn\_add()****

Em um diretório de trabalho onde **`svn status`**
retorna:

```
$ svn status
?      foobar.txt
```

...este código:

```
<?php
svn_add('foobar.txt');
?>
```

...irá programar foobar.txt para adição no
repositório.

### Notas

**Aviso**

Esta função é
*EXPERIMENTAL*. O comportamento desta função, seu nome e
documentação poderão mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

### Veja também

- [» Documentação do SVN sobre svn add](https://svnbook.red-bean.com/en/1.2/svn.ref.svn.c.add.html)

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
