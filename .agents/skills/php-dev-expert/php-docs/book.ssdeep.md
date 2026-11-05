# Hashing difuso ssdeep

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.ssdeep.php

---

# Hashing difuso ssdeep

# Introdução

ssdeep é uma utilidade para criar e comparar hashes difusos ou
[» hashing por partes acionado por contexto](https://dfrws.org/2006/proceedings/12-Kornblum.pdf).

O hashing difuso pode corresponder a assinaturas que têm "...sequências de bytes
idênticos na mesma ordem, embora bytes entre essas sequências possam ser diferentes
em conteúdo e comprimento" ([» 
Página do projeto ssdeep](https://ssdeep.sourceforge.net)).

Esta extensão fornece funções para criar e comparar hashes difusos.

- [Instalação/Configuração](ssdeep.setup.md)
  - [Dependências](ssdeep.requirements.md)
  - [Instalação](ssdeep.installation.md)
- [ssdeep Funções](ref.ssdeep.md)
  - [ssdeep\_fuzzy\_compare](function.ssdeep-fuzzy-compare.md) — Calcula a pontuação de correspondência entre duas assinaturas de hash difusas
  - [ssdeep\_fuzzy\_hash](function.ssdeep-fuzzy-hash.md) — Crie um hash difuso a partir de uma string
  - [ssdeep\_fuzzy\_hash\_filename](function.ssdeep-fuzzy-hash-filename.md) — Cria um hash difuso a partir de um arquivo

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
