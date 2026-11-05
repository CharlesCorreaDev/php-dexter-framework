# Atualiza a cópia de trabalho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.svn-update.php

---

# svn\_update

(PECL svn >= 0.1.0)

svn\_update — Atualiza a cópia de trabalho

### Descrição

function **svn\_update**([string](language.types.string.md) `$path`, [int](language.types.integer.md) `$revno` = SVN\_REVISION\_HEAD, [bool](language.types.boolean.md) `$recurse` = **`true`**): [int](language.types.integer.md)

Atualiza a cópia de trabalho em `path` para a revisão
`revno`. Se `recurse` for igual a true,
os diretórios serão atualizados recursivamente.

### Parâmetros

`path`
:   Caminho para a cópia de trabalho local.

    > **Nota**:
    >
    > Os caminhos relativos serão resolvidos como se o diretório de trabalho atual fosse aquele que contém o binário do PHP. Para usar o diretório de trabalho do script de chamada, use [realpath()](function.realpath.md) ou dirname(\_\_FILE\_\_).

`revno`
:   Número da revisão para a qual a cópia será atualizada, o padrão é **`SVN_REVISION_HEAD`**.

`recurse`
:   Informa se os diretórios devem ou não ser atualizados recursivamente.

### Valor Retornado

Retorna um novo número de revisão em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo básico**

Este exemplo demonstra o uso básico desta função:

```
<?php
echo svn_update(realpath('working-copy'));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
234
```

### Notas

**Aviso**

Esta função é
*EXPERIMENTAL*. O comportamento desta função, seu nome e
documentação poderão mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

### Veja também

- [svn\_checkout()](function.svn-checkout.md) - Obtém uma cópia de trabalho do repositório
- [svn\_commit()](function.svn-commit.md) - Envia alterações da cópia de trabalho local para o repositório
- [» Documentação do SVN sobre svn update](https://svnbook.red-bean.com/en/1.2/svn.ref.svn.c.update.html)

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
