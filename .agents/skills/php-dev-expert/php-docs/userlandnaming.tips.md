# Dicas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/userlandnaming.tips.php

---

## Dicas

Para escrever código que não sofrerá problemas no futuro, é recomendado que não
sejam incluídas variáveis, funções ou classes no espaço global. Isto
evitará colisões de nome com código de terceiros assim como
futuros acréscimos à linguagem.

Uma forma de prevenir colisões de nomes em funções e classes é
colocá-las em seus próprios
[namespaces](language.namespaces.md).

```
<?php

namespace MyProject;

function my_function() {
    return true;
}

\MyProject\my_function();
```

Os namespaces já usados ainda precisam ser rastreados, mas uma vez
decidido o uso de um namespace, podem ser adicionadas funções e
classes a ele sem novas preocupações com conflitos.

Também é considerada uma boa prática limitar o número de variáveis alocadas
no escopo global de forma a evitar colisões de nome com código
de terceiros.

> **Nota**:
> **Escopo de variáveis**  
>
> Por causa das [regras de escopo](language.variables.scope.md) do PHP,
> as variáveis definidas dentro de funções e métodos não estão no escopo global
> e não podem conflitar com variáveis definidas nesse escopo.

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
