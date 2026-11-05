# Informações do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.fileinfo.php

---

# Informações do arquivo

# Introdução

As funções nesta extensão tentam adivinhar o tipo de conteúdo e a codificação
de um arquivo procurando por algumas sequências *mágicas*
de bytes em posições específicas no arquivo.
Embora esta não seja uma abordagem à prova de balas, a heurística usada faz
um excelente trabalho.

- [Instalação/Configuração](fileinfo.setup.md)
  - [Instalação](fileinfo.installation.md)
  - [Tipos de Recurso](fileinfo.resources.md)
- [Constantes predefinidas](fileinfo.constants.md)
- [Funções da Fileinfo](ref.fileinfo.md)
  - [finfo\_buffer](function.finfo-buffer.md) — Retorna informações sobre um buffer de string
  - [finfo\_close](function.finfo-close.md) — Fecha uma instância de finfo
  - [finfo\_file](function.finfo-file.md) — Retorna informações sobre um arquivo
  - [finfo\_open](function.finfo-open.md) — Cria uma instância de finfo
  - [finfo\_set\_flags](function.finfo-set-flags.md) — Define as opções de configuração da libmagic
  - [mime\_content\_type](function.mime-content-type.md) — Detecta o tipo de conteúdo MIME de um arquivo
- [finfo](class.finfo.md) — A classe finfo
  - [finfo::buffer](finfo.buffer.md) — Sinônimo de finfo\_buffer()
  - [finfo::\_\_construct](finfo.construct.md) — Sinônimo de finfo\_open
  - [finfo::file](finfo.file.md) — Sinônimo de finfo\_file()
  - [finfo::set\_flags](finfo.set-flags.md) — Sinônimo de finfo\_set\_flags()

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
