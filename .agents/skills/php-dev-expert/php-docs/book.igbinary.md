# Igbinary

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.igbinary.php

---

# Igbinary

# Introdução

Igbinary é um substituto para o serializador PHP padrão.
Em vez da representação textual que consome tempo e espaço usada pelo [serialize()](function.serialize.md) do PHP,
o igbinary armazena estruturas de dados PHP em um formato binário compacto.
A economia de memória é significativa ao usar memcached, APCu
ou armazenamentos baseados em memória semelhantes para dados serializados.
A redução típica nos requisitos de armazenamento é de cerca de 50%.
A porcentagem exata depende dos dados.

- [Instalação/Configuração](igbinary.setup.md)
  - [Instalação](igbinary.installation.md)
  - [Configurações de Execução](igbinary.configuration.md)
- [Funções de Igbinary](ref.igbinary.md)
  - [igbinary\_serialize](function.igbinary-serialize.md) — Gera uma representação binária compacta e armazenável de um valor
  - [igbinary\_unserialize](function.igbinary-unserialize.md) — Cria um valor PHP a partir de uma representação armazenada por igbinary\_serialize

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
