# Variáveis Predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.variables.predefined.php

---

## Variáveis Predefinidas

O PHP fornece um número de
[variáveis predefinidas](reserved.variables.md).
O PHP também fornece um conjunto adicional de arrays predefinidos
contendo as variáveis do servidor web (se aplicável), as
variáveis de ambiente e as entradas do usuário. Esses estão automaticamente disponíveis em
qualquer escopo. Por essa razão, também são conhecidos como
"superglobais" (não há um mecanismo no PHP para
superglobais definidos pelo usuário). Consulte a
[lista de superglobais](language.variables.superglobals.md)
para mais detalhes.

> **Nota**:
> **Variáveis variáveis**  
>
> Superglobais não podem ser utilizadas como
> [variáveis variáveis](language.variables.variable.md)
> dentro de funções ou métodos de classe.

Se determinadas variáveis não estiverem definidas na diretiva [variables\_order](ini.core.md#ini.variables-order), seus
arrays predefinidos também estarão vazios.

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
