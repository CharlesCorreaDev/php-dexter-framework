# Um simples tutorial

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tutorial.php

---

# Um simples tutorial

## Índice

- [Sua primeira página PHP](tutorial.firstpage.md)
- [Algo Útil](tutorial.useful.md)
- [Tratando Formulários](tutorial.forms.md)
- [O que vem a seguir?](tutorial.whatsnext.md)

Aqui nós iremos mostrar o básico do básico do PHP em um tutorial simples
e curto. Este texto fala somente sobre a criação de páginas web dinâmicas com
PHP, embora o PHP não seja apenas capaz de criar páginas web. Veja
a seção intitulada [O que o PHP pode
fazer](introduction.md#intro-whatcando) para mais informações.

Fazer páginas com PHP é o mesmo que criar páginas HTML e
você pode criá-las e editá-las da mesma maneira que
as páginas HTML comuns são criadas.

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
