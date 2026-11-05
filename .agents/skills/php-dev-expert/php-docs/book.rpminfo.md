# RpmInfo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.rpminfo.php

---

# RpmInfo

# Introdução

Esta extensão permite a recuperação de informações de arquivos RPM
ou do banco de dados de RPMs instalados.

Ela também fornece um empacotador de fluxo `rpm` para recuperar conteúdo RPM
(desde a versão 1.0.0 com librpm >= 4.13).

- [Instalação/Configuração](rpminfo.setup.md)
  - [Dependências](rpminfo.requirements.md)
  - [Instalação via PECL](rpminfo.installation.md)
- [Constantes predefinidas](rpminfo.constants.md)
- [Funções de RpmInfo](ref.rpminfo.md)
  - [rpmaddtag](function.rpmaddtag.md) — Adiciona a tag recuperada na consulta
  - [rpmdbinfo](function.rpmdbinfo.md) — Obtém informações do RPM instalado
  - [rpmdbsearch](function.rpmdbsearch.md) — Pesquisa pacotes RPM
  - [rpmdefine](function.rpmdefine.md) — Define ou altera um valor de macro RPM
  - [rpmexpand](function.rpmexpand.md) — Recupera o valor expandido de uma macro RPM
  - [rpmexpandnumeric](function.rpmexpandnumeric.md) — Recupera o valor numérico de uma macro RPM
  - [rpmgetsymlink](function.rpmgetsymlink.md) — Obtém o alvo de uma ligação simbólica
  - [rpminfo](function.rpminfo.md) — Obtém informações de um arquivo RPM
  - [rpmvercmp](function.rpmvercmp.md) — Comparação de versões RPM

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
