# Obtém uma cópia de trabalho do repositório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.svn-checkout.php

---

# svn\_checkout

(PECL svn >= 0.1.0)

svn\_checkout — Obtém uma cópia de trabalho do repositório

### Descrição

function **svn\_checkout**(  
    [string](language.types.string.md) `$repos`,  
    [string](language.types.string.md) `$targetpath`,  
    [int](language.types.integer.md) `$revision` = ?,  
    [int](language.types.integer.md) `$flags` = 0  
): [bool](language.types.boolean.md)

Obtém uma cópia de trabalho do repositório em `repos`
para o caminho `targetpath` na revisão `revision`.

### Parâmetros

`repos`
:   String com caminho do URL para o diretório do repositório a ser obtido.

`targetpath`
:   String com o caminho local do diretório onde o repositório será copiado.

    > **Nota**:
    >
    > Os caminhos relativos serão resolvidos como se o diretório de trabalho atual fosse aquele que contém o binário do PHP. Para usar o diretório de trabalho do script de chamada, use [realpath()](function.realpath.md) ou dirname(\_\_FILE\_\_).

`revision`
:   Número inteiro da revisão do repositório a ser obtida. O padrão é
    HEAD, a revisão mais recente.

`flags`
:   Qualquer combinação de **`SVN_NON_RECURSIVE`** com
    **`SVN_IGNORE_EXTERNALS`**.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo básico**

Este exemplo demonstra como fazer a obtenção de um diretório de
um repositório para um diretório chamado calc:

```
<?php
svn_checkout('http://www.example.com/svnroot/calc/trunk', dirname(__FILE__) . '/calc');
?>
```

A chamada `dirname(__FILE__)` é necessária para
converter o caminho relativo do calc em um caminho absoluto. Se o calc
existir, também pode ser usada a função [realpath()](function.realpath.md) para recuperar
um caminho absoluto.

### Notas

**Aviso**

Esta função é
*EXPERIMENTAL*. O comportamento desta função, seu nome e
documentação poderão mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

### Veja também

- [svn\_add()](function.svn-add.md) - Agenda a adição de um item em um diretório de trabalho
- [svn\_commit()](function.svn-commit.md) - Envia alterações da cópia de trabalho local para o repositório
- [svn\_status()](function.svn-status.md) - Retorna o status dos arquivos e diretórios da cópia de trabalho
- [svn\_update()](function.svn-update.md) - Atualiza a cópia de trabalho
- [» Documentação do SVN sobre svn checkout](https://svnbook.red-bean.com/en/1.2/svn.ref.svn.c.checkout.html)

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
