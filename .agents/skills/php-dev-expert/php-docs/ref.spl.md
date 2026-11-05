# Funções da SPL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.spl.php

---

# Funções da SPL

## Índice

- [class\_implements](function.class-implements.md) — Retorna as interfaces que são implementadas pela classe ou interface fornecida
- [class\_parents](function.class-parents.md) — Retorna as classes pai da classe fornecida
- [class\_uses](function.class-uses.md) — Retorna os traits usados pela classe fornecida
- [iterator\_apply](function.iterator-apply.md) — Chama uma função para cada elemento em um iterador
- [iterator\_count](function.iterator-count.md) — Conta os elementos em um iterador
- [iterator\_to\_array](function.iterator-to-array.md) — Copia o iterador em um array
- [spl\_autoload](function.spl-autoload.md) — Implementação padrão para \_\_autoload()
- [spl\_autoload\_call](function.spl-autoload-call.md) — Tenta todas as funções \_\_autoload() registradas para carregar a classe solicitada
- [spl\_autoload\_extensions](function.spl-autoload-extensions.md) — Registra e retorna as extensões de arquivo padrão para spl\_autoload
- [spl\_autoload\_functions](function.spl-autoload-functions.md) — Retorna todas as funções \_\_autoload() registradas
- [spl\_autoload\_register](function.spl-autoload-register.md) — Registra a função dada como implementação \_\_autoload()
- [spl\_autoload\_unregister](function.spl-autoload-unregister.md) — Desregistra uma função dada como implementação de \_\_autoload()
- [spl\_classes](function.spl-classes.md) — Retorna as classes SPL disponíveis
- [spl\_object\_hash](function.spl-object-hash.md) — Retorna o ID de hash para o objeto fornecido
- [spl\_object\_id](function.spl-object-id.md) — Retorna o identificador inteiro do objeto fornecido

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
