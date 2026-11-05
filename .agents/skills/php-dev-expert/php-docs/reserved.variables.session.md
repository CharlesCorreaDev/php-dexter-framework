# Variáveis de sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reserved.variables.session.php

---

# $\_SESSION

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

$\_SESSION — Variáveis de sessão

### Descrição

Um array associativo contendo variáveis de sessão disponíveis para
o atual script. Veja a documentação das [funções
de Sessão](ref.session.md) para mais
informação em como usar isto.

### Notas

> **Nota**:
>
> Esta é uma variável 'superglobal' ou
> variável global automática. Isso significa simplesmente que ela está disponível em
> todos os escopos de um script. Não há necessidade de usar
> **global $variable;** para acessá-la dentro de funções ou métodos.

### Veja também

- [session\_start()](function.session-start.md) - Inicia uma nova sessão ou continua uma sessão existente

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
