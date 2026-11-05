# LZF

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.lzf.php

---

# LZF

# Introdução

LZF é um algoritmo de compressão muito rápido, ideal para economizar espaço com
um pequeno custo de velocidade. Ele pode ser otimizado para velocidade ou
espaço em tempo de compilação. Esta extensão usa para suas operações
a biblioteca [» liblzf](https://oldhome.schmorp.de/marc/liblzf.html) de Marc Lehmann.

- [Instalação/Configuração](lzf.setup.md)
  - [Instalação](lzf.installation.md)
- [Funções da LZF](ref.lzf.md)
  - [lzf\_compress](function.lzf-compress.md) — Compressão LZF
  - [lzf\_decompress](function.lzf-decompress.md) — Descompressão LZF
  - [lzf\_optimized\_for](function.lzf-optimized-for.md) — Determina para quê a extensão LZF foi otimizada

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
