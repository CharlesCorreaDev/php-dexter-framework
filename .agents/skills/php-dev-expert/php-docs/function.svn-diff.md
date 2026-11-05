# Diferencia recursivamente dois caminhos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.svn-diff.php

---

# svn\_diff

(PECL svn >= 0.1.0)

svn\_diff — Diferencia recursivamente dois caminhos

### Descrição

function **svn\_diff**(  
    [string](language.types.string.md) `$path1`,  
    [int](language.types.integer.md) `$rev1`,  
    [string](language.types.string.md) `$path2`,  
    [int](language.types.integer.md) `$rev2`  
): [array](language.types.array.md)

Diferencia recursivamente dois caminhos, `path1` e
`path2`.

> **Nota**:
>
> Este não é um utilitário de comparação de uso geral. Somente arquivos locais
> que são versionados podem ser comparados: outros arquivos falharão.

### Parâmetros

`path1`
:   Primeiro caminho. Pode ser uma URL para um arquivo/diretório em um repositório SVN
    ou um caminho de arquivo/diretório local.

    > **Nota**:
    >
    > Os caminhos relativos serão resolvidos como se o diretório de trabalho atual fosse aquele que contém o binário do PHP. Para usar o diretório de trabalho do script de chamada, use [realpath()](function.realpath.md) ou dirname(\_\_FILE\_\_).

    **Aviso**

    Se um caminho de arquivo local tiver apenas barras invertidas e nenhuma barra normal,
    esta extensão não conseguirá encontrar o caminho. Sempre
    substitua todas as barras invertidas por barras normais ao usar esta
    função.

`rev1`
:   Número de revisão do primeiro caminho. Use **`SVN_REVISION_HEAD`**
    para especificar a revisão mais recente.

`path2`
:   Segundo caminho. Veja `path1` para descrição.

`rev2`
:   Número de revisão do segundo caminho. Veja `rev1`
    para descrição.

### Valor Retornado

Retorna uma lista de arrays composta por dois fluxos: o primeiro é a saída do diff
e o segundo contém a saída do fluxo de erro. Os fluxos podem ser
lidos usando [fread()](function.fread.md). Retorna **`false`** ou **`null`** em caso de
erro.

A saída do diff estará, por padrão, no formato diff unificado
personalizado do Subversion, mas um
[» mecanismo diff
externo](https://svnbook.red-bean.com/en/1.2/svn.advanced.externaldifftools.html) pode ser
usado dependendo da configuração do Subversion.

### Examples

**Exemplo #1 Exemplo básico**

Este exemplo demonstra o uso básico desta função e
a recuperação de conteúdo do fluxo:

```
<?php
list($diff, $errors) = svn_diff(
    'http://www.example.com/svnroot/trunk/foo', SVN_REVISION_HEAD,
    'http://www.example.com/svnroot/branches/dev/foo', SVN_REVISION_HEAD
);
if (!$diff) exit;
$contents = '';
while (!feof($diff)) {
  $contents .= fread($diff, 8192);
}
fclose($diff);
fclose($errors);
var_dump($contents);
?>
```

O exemplo acima produzirá:

```
Index: http://www.example.com/svnroot/trunk/foo
===================================================================
--- http://www.example.com/svnroot/trunk/foo        (.../foo) (revision 23)
+++ http://www.example.com/svnroot/branches/dev/foo (.../foo) (revision 27)
 // further diff output
```

**Exemplo #2 Comparando duas revisões de um caminho de repositório**

Este exemplo implementa uma função envoltória que permite ao usuário
comparar facilmente duas revisões do mesmo item usando um caminho de
repositório externo (a sintaxe padrão é um tanto prolixa):

```
<?php
function svn_diff_same_item($path, $rev1, $rev2) {
    return svn_diff($path, $rev1, $path, $rev2);
}
?>
```

**Exemplo #3 Diferenciando dois arquivos locais de forma portátil**

Este exemplo implementa uma função envoltória que diferencia de forma portátil
dois arquivos locais, compensando a correção do [realpath()](function.realpath.md)
e o bug das barras invertidas:

```
<?php
function svn_diff_local($path1, $rev1, $path2, $rev2) {
    $path1 = str_replace('\\', '/', realpath($path1));
    $path2 = str_replace('\\', '/', realpath($path2));
    return svn_diff($path1, $rev1, $path2, $rev2);
}
?>
```

### Notas

**Aviso**

Esta função é
*EXPERIMENTAL*. O comportamento desta função, seu nome e
documentação poderão mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

### Veja também

- [» Documentação do SVN sobre svn diff](https://svnbook.red-bean.com/en/1.2/svn.ref.svn.c.diff.html)

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
