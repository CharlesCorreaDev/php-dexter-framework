# Retorna o nome do token

> **Fonte / Source:** https://www.php.net/manual/pt_BR/phptoken.gettokenname.php

---

# PhpToken::getTokenName

(PHP 8)

PhpToken::getTokenName — Retorna o nome do token

### Descrição

public function **PhpToken::getTokenName**(): [?](language.types.null.md)[string](language.types.string.md)

Retorna o nome do token.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um caractere ASCII para tokens de caracter único ou
um dos nomes de constantes T\_\* para tokens conhecidos (consulte [Lista de Tokens do Analisador](tokens.md)) ou **`null`** para tokens desconhecidos.

### Examples

**Exemplo #1 Exemplo de **PhpToken::getTokenName()****

```
<?php
// Token conhecido
$token = new PhpToken(T_ECHO, 'echo');
var_dump($token->getTokenName());   // -> string(6) "T_ECHO"

// Token de caractere único
$token = new PhpToken(ord(';'), ';');
var_dump($token->getTokenName());   // -> string(1) ";"

// Token desconhecido
$token = new PhpToken(10000 , "\0");
var_dump($token->getTokenName());   // -> NULL
```

### Veja também

- [PhpToken::tokenize()](phptoken.tokenize.md) - Divide a fonte fornecida em tokens PHP, representados por objetos PhpToken
- [token\_name()](function.token-name.md) - Pega o nome simbólico de um dado token do PHP

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
