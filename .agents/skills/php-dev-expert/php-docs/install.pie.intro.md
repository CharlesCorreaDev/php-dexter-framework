# Introdução ao PIE

> **Fonte / Source:** https://www.php.net/manual/pt_BR/install.pie.intro.php

---

## Introdução ao PIE

[» PIE](https://github.com/php/pie) é um instalador para PHP que torna possível instalar
extensões PHP de terceiros que podem ser facilmente aplicadas e atualizadas.
Ele utiliza o repositório de extensões PHP do
[» Packagist](https://packagist.org) para encontrar o código-fonte
para construir a extensão, ou um binário do Windows para baixar, se existir. Se ele
baixar o código-fonte, também saberá como compilá-lo e instalá-lo.

Após [» instalar
os requisitos e o próprio PIE](https://github.com/php/pie?tab=readme-ov-file#what-do-i-need-to-get-started), pode-se instalar a
[extensão MongoDB](mongodb.mongodb.md) executando o
seguinte na linha de comando.

**Exemplo #1 Instalando a extensão MongoDB com PIE**

```
pie install mongodb/mongodb-extension
```

A [» documentação "PIE
Usage"](https://php.github.io/pie/#docs/usage) aborda isso com mais detalhes.

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
