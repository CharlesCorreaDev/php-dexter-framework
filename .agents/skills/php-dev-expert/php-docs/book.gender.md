# Determina o gênero dos primeiros nomes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.gender.php

---

# Determina o gênero dos primeiros nomes

# Introdução

A extensão Gender PHP é uma versão do programa gender.c originalmente escrito por Joerg Michael. O objetivo principal é descobrir o gênero dos primeiros nomes. O banco de dados atual contém mais de 40.000 nomes de 54 países.

- [Instalação/Configuração](gender.setup.md)
  - [Instalação](gender.installation.md)
- [Examples](gender.examples.md)
  - [Exemplo de uso](gender.example.admin.md)
- [Gender\Gender](class.gender.md) — A classe Gender\Gender
  - [Gender\Gender::connect](gender-gender.connect.md) — Conecta-se a um dicionário de nomes externo
  - [Gender\Gender::\_\_construct](gender-gender.construct.md) — Constrói o objeto Gender
  - [Gender\Gender::country](gender-gender.country.md) — Obtém representação textual do país
  - [Gender\Gender::get](gender-gender.get.md) — Obtém o gênero de um nome
  - [Gender\Gender::isNick](gender-gender.isnick.md) — Verifica se um nome é apelido de outro
  - [Gender\Gender::similarNames](gender-gender.similarnames.md) — Obtém nomes semelhantes

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
