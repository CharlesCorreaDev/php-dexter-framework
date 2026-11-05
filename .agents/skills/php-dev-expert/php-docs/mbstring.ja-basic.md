# Noções Básicas de Codificações Multibyte Japonesas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mbstring.ja-basic.php

---

# Noções Básicas de Codificações Multibyte Japonesas

Os caracteres japoneses só podem ser representados por codificações multibyte,
e vários padrões de codificação são usados dependendo da plataforma
e da finalidade do texto. Para piorar a situação, esses padrões de codificação
diferem um pouco um do outro. Para criar uma aplicação
web que possa ser usada em um ambiente japonês, o
desenvolvedor precisa ter em mente essas complexidades para garantir que
as codificações de caracteres adequadas sejam usadas.

- O armazenamento de um caractere pode ter até seis bytes.
- A maioria dos caracteres multibyte japoneses aparece com o dobro da largura
  dos caracteres de byte único. Esses caracteres são chamados
  "zen-kaku" em japonês, que significa
  "largura total". Outros caracteres mais estreitos, são chamados
  "han-kaku", que significa "meia largura". As
  propriedades gráficas dos caracteres, no entanto, dependem das fontes
  usadas para exibi-las.
- Algumas codificações de caracteres usam sequências de deslocamento (escape)
  definidas na ISO-2022 para alternar o mapa de código da área de código
  específica (`00h` a `7fh`).
- A ISO-2022-JP deve ser usada no SMTP/NNTP, e cabeçalhos e entidades devem
  ser recodificados de acordo com os requisitos da RFC. Embora esses não
  sejam requisitos, ainda é uma boa ideia porque vários agentes de usuário
  populares não podem reconhecer nenhum outro método de codificação.
- As páginas web criadas para serviços de telefonia móvel,
  como [» i-mode](http://www.nttdocomo.com/services/imode/)
  ou [» EZweb](https://www.au.kddi.com/english/service/ezweb/index.html)
  devem usar Shift\_JIS.
- Emoji usados em serviços de telefonia móvel,
  como [» i-mode](http://www.nttdocomo.com/services/imode/)
  ou [» EZweb](https://www.au.kddi.com/english/service/ezweb/index.html)
  são suportados.

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
