# Obtém os responsáveis pelas alterações SVN de um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.svn-blame.php

---

# svn\_blame

(PECL svn >= 0.3.0)

svn\_blame — Obtém os responsáveis pelas alterações SVN de um arquivo

### Descrição

function **svn\_blame**([string](language.types.string.md) `$repository_url`, [int](language.types.integer.md) `$revision_no` = SVN\_REVISION\_HEAD): [array](language.types.array.md)

Obtém os responsáveis pelas alterações SVN de um arquivo a partir de um URL de repositório.

### Parâmetros

`repository_url`
:   O URL do repositório.

`revision_no`
:   O número da revisão.

### Valor Retornado

Um [array](language.types.array.md) de informações do "SVN blame" separadas por linha
que inclui o número da revisão, número da linha, linha de código,
autor e data.

### Examples

**Exemplo #1 Exemplo de **svn\_blame()****

```
<?php
$svnurl = 'http://svn.example.org/svnroot/foo/trunk/index.php';

print_r( svn_blame($svnurl) );

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] = Array
          (
           [rev] = 1
           [line_no] = 1
           [line] = Hello World
           [author] = joesmith
           [date] = 2007-07-02T05:51:26.628396Z
          )
    [1] = Array
          ...
```

### Veja também

- [svn\_diff()](function.svn-diff.md) - Diferencia recursivamente dois caminhos
- **svn\_logs()**
- [svn\_status()](function.svn-status.md) - Retorna o status dos arquivos e diretórios da cópia de trabalho

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
