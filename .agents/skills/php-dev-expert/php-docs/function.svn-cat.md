# Retorna o conteúdo de um arquivo em um repositório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.svn-cat.php

---

# svn\_cat

(PECL svn >= 0.1.0)

svn\_cat — Retorna o conteúdo de um arquivo em um repositório

### Descrição

function **svn\_cat**([string](language.types.string.md) `$repos_url`, [int](language.types.integer.md) `$revision_no` = ?): [string](language.types.string.md)

Retorna o conteúdo da URL `repos_url` para
um arquivo no repositório, opcionalmente com o número de revisão
`revision_no`.

### Parâmetros

`repos_url`
:   Caminho da URL da sequência de caracteres para o item em um repositório.

`revision_no`
:   Número inteiro de revisão do item a ser recuperado, o padrão é a
    revisão HEAD.

### Valor Retornado

Retorna o conteúdo da string do item do repositório em caso de
sucesso e **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo básico**

Este exemplo recupera o conteúdo de um arquivo na revisão 28:

```
<?php
$contents = svn_cat('http://www.example.com/svnroot/calc/gui.c', 28)
?>
```

### Notas

**Aviso**

Esta função é
*EXPERIMENTAL*. O comportamento desta função, seu nome e
documentação poderão mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

### Veja também

- **svn\_list()**
- [» Documentação do SVN sobre svn cat](https://svnbook.red-bean.com/en/1.2/svn.ref.svn.c.cat.html)

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
