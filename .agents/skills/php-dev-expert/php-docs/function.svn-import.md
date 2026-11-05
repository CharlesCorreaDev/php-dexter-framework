# Importa um caminho não versionado para um repositório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.svn-import.php

---

# svn\_import

(PECL svn >= 0.2.0)

svn\_import — Importa um caminho não versionado para um repositório

### Descrição

function **svn\_import**([string](language.types.string.md) `$path`, [string](language.types.string.md) `$url`, [bool](language.types.boolean.md) `$nonrecursive`): [bool](language.types.boolean.md)

Envia o `path` não versionado no repositório em
`url`. Se `path` for um
diretório e `nonrecursive` for **`false`**,
o diretório será importado recursivamente.

### Parâmetros

`path`
:   Caminho do arquivo ou diretório a ser importado.

    > **Nota**:
    >
    > Os caminhos relativos serão resolvidos como se o diretório de trabalho atual fosse aquele que contém o binário do PHP. Para usar o diretório de trabalho do script de chamada, use [realpath()](function.realpath.md) ou dirname(\_\_FILE\_\_).

`url`
:   URL do repositório para importação.

`nonrecursive`
:   Informa se o processamento de diretórios será recursivo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo básico**

This example demonstrates a basic use-case of this function. To import
a directory named new-files into the repository at
http://www.example.com/svnroot/incoming/abc, use:

```
<?php
svn_import(realpath('new-files'), 'http://www.example.com/svnroot/incoming/abc', false);
?>
```

### Notas

**Aviso**

Esta função é
*EXPERIMENTAL*. O comportamento desta função, seu nome e
documentação poderão mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

### Veja também

- [svn\_add()](function.svn-add.md) - Agenda a adição de um item em um diretório de trabalho
- [» SVN documentation for svn import](https://svnbook.red-bean.com/en/1.2/svn.ref.svn.c.import.html)

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
