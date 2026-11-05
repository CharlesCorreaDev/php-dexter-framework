# Variáveis nativas que estão sempre disponíveis em todos escopos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.variables.superglobals.php

---

# Superglobais

Superglobais — Variáveis nativas que estão sempre disponíveis em todos escopos

### Descrição

Várias variáveis predefinidas no PHP são "superglobais", que significa que elas
estão disponíveis em todos os escopos para todo o script. Não há necessidade de fazer
**global $variable;** para acessá-lo dentro de funções
ou métodos.

Estas variáveis superglobais são:

- [$GLOBALS](reserved.variables.globals.md)
- [$\_SERVER](reserved.variables.server.md)
- [$\_GET](reserved.variables.get.md)
- [$\_POST](reserved.variables.post.md)
- [$\_FILES](reserved.variables.files.md)
- [$\_COOKIE](reserved.variables.cookies.md)
- [$\_SESSION](reserved.variables.session.md)
- [$\_REQUEST](reserved.variables.request.md)
- [$\_ENV](reserved.variables.environment.md)

### Notas

> **Nota**:
> **Disponibilidade da variável**  
>
> Por padrão, todas as superglobais estão disponíveis, mas há
> diretivas que afetam esta disponibilidade. Para mais informações, consulte
> na documentação sobre
> [variables\_order](ini.core.md#ini.variables-order).

> **Nota**:
> **Variável variáveis**  
>
> Superglobais não podem ser usadas como
> [variável variáveis](language.variables.variable.md)
> dentro de função ou métodos de classes.

### Veja também

- [escopo de variável](language.variables.scope.md)
- A diretiva [variables\_order](ini.core.md#ini.variables-order)
- [A extensão filter](book.filter.md)

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
