# Retorna o conteúdo textual do token

> **Fonte / Source:** https://www.php.net/manual/pt_BR/phptoken.tostring.php

---

# PhpToken::\_\_toString

(PHP 8)

PhpToken::\_\_toString — Retorna o conteúdo textual do token

### Descrição

public function **PhpToken::\_\_toString**(): [string](language.types.string.md)

Retorna o conteúdo textual do token.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um conteúdo textual do token.

### Examples

**Exemplo #1 Exemplo de **PhpToken::\_\_toString()****

```
<?php
$token = new PhpToken(T_ECHO, 'echo');
echo $token;
```

Os exemplos acima produzirão:

```
echo
```

### Veja também

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
