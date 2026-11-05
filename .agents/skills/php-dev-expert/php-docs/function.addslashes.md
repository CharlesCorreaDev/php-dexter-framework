# Adiciona barras invertidas a uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.addslashes.php

---

# addslashes

(PHP 4, PHP 5, PHP 7, PHP 8)

addslashes — Adiciona barras invertidas a uma string

### Descrição

function **addslashes**([string](language.types.string.md) `$string`): [string](language.types.string.md)

Retorna uma string com barras invertidas adicionadas antes de caracteres
que precisam ser escapados. Estes caracteres são:

- aspas simples (`'`)
- aspas duplas (`"`)
- barra invertida (`\`)
- NUL (o byte NUL)

Um caso de uso de **addslashes()** é o escape dos caracteres
mencionados em uma string que deve ser avaliada pelo PHP:

**Exemplo #1 Escapando caracteres**

```
<?php
$str = "O'Reilly?";
eval("echo '" . addslashes($str) . "';");
?>
```

A função **addslashes()** às vezes é usada incorretamente para tentar prevenir
[Injeção de SQL](security.database.sql-injection.md). Em vez disso,
funções de escape específicas do banco de dados e/ou instruções preparadas devem ser usadas.

### Parâmetros

`string`
:   A string a ser escapada.

### Valor Retornado

Retorna a string com escapes.

### Examples

**Exemplo #2 Exemplo com **addslashes()****

```
<?php
$str = "Seu nome é O'reilly?";

// Mostra: Seu nome é O\'reilly?
echo addslashes($str);
?>
```

### Veja também

- [stripcslashes()](function.stripcslashes.md) - Remove o escape de strings escapadas com addcslashes
- [stripslashes()](function.stripslashes.md) - Desfaz os escapes de uma string escapada
- [addcslashes()](function.addcslashes.md) - Escapa string com barras invertidas no estilo C
- [htmlspecialchars()](function.htmlspecialchars.md) - Converte caracteres especiais para entidades HTML
- [quotemeta()](function.quotemeta.md) - Escapa meta caracteres
- [get\_magic\_quotes\_gpc()](function.get-magic-quotes-gpc.md) - Obtém a configuração atual de magic\_quotes\_gpc

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
