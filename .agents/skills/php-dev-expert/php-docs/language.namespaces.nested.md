# Declarando sub-namespaces

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.namespaces.nested.php

---

## Declarando sub-namespaces

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

Assim como diretórios e arquivos, os namespaces do PHP podem especificar
uma hierarquia de namespaces. Assim, um namespace pode ser definido com
subníveis.

**Exemplo #1 Declarando um único namespace com hierarquia**

```
<?php
namespace MeuProjeto\Nivel\SubNivel;

const CONEXAO_OK = 1;
class Conexao { /* ... */ }
function conectar() { /* ... */  }
```

O exemplo acima cria a constante `MeuProjeto\Nivel\SubNivel\CONEXAO_OK`,
a classe `MeuProjeto\Nivel\SubNivel\Conexao` e a função
`MeuProjeto\Nivel\SubNivel\conectar`.

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
