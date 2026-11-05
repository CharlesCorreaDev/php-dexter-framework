# Obtém todos os cabeçalhos da requisição HTTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.getallheaders.php

---

# getallheaders

(PHP 4, PHP 5, PHP 7, PHP 8)

getallheaders — Obtém todos os cabeçalhos da requisição HTTP

### Descrição

function **getallheaders**(): [array](language.types.array.md)

Obtém todos cabeçalhos HTTP da requisição atual.

Essa função é um sinônimo de [apache\_request\_headers()](function.apache-request-headers.md).
Veja a documentação de [apache\_request\_headers()](function.apache-request-headers.md)
para mais informações dessa função.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um array associativo de todos cabeçalhos HTTP da requisição atual.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.3.0 | Esta função tornou-se disponível na SAPI FPM. |

### Examples

**Exemplo #1 Exemplo da função **getallheaders()****

```
<?php

foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n";
}

?>
```

### Veja também

- [apache\_response\_headers()](function.apache-response-headers.md) - Obtém todos os cabeçalhos da resposta HTTP

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
