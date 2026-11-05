# Exclui itens de uma cópia de trabalho ou repositório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.svn-delete.php

---

# svn\_delete

(PECL svn >= 0.4.0)

svn\_delete — Exclui itens de uma cópia de trabalho ou repositório

### Descrição

function **svn\_delete**([string](language.types.string.md) `$path`, [bool](language.types.boolean.md) `$force` = **`false`**): [bool](language.types.boolean.md)

Exclui o arquivo, diretório ou ligação simbólica em `path`
do diretório de trabalho. O item será excluído do repositório
na próxima vez que [svn\_commit()](function.svn-commit.md) for chamada na cópia
de trabalho.

### Parâmetros

`path`
:   Caminho do item a ser excluído.

    > **Nota**:
    >
    > Os caminhos relativos serão resolvidos como se o diretório de trabalho atual fosse aquele que contém o binário do PHP. Para usar o diretório de trabalho do script de chamada, use [realpath()](function.realpath.md) ou dirname(\_\_FILE\_\_).

`force`
:   Se **`true`**, o arquivo será excluído mesmo que tenha modificações locais.
    Caso contrário, as modificações locais resultarão em falha. O padrão é
    **`false`**.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Notas

**Aviso**

Esta função é
*EXPERIMENTAL*. O comportamento desta função, seu nome e
documentação poderão mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

### Veja também

- [» Documentação do SVN sobre svn
  delete](https://svnbook.red-bean.com/en/1.2/svn.ref.svn.c.delete.html)

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
