# xdiff

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.xdiff.php

---

# xdiff

# Introdução

A extensão xdiff permite que sejam criados e aplicados arquivos de patch contendo
diferenças entre diferentes revisões de arquivos.

Esta extensão suporta dois modos de operação - em strings e em arquivos, bem como
dois formatos de patch diferentes - unificado e binário. Patches unificados são excelentes
para arquivos de texto, pois são legíveis por humanos e fáceis de revisar. Para arquivos binários, como
arquivos ou imagens, patches binários serão uma escolha adequada, pois são seguros para binários e
lidam bem com caracteres não imprimíveis.

A partir da versão 1.5.0, existem dois conjuntos diferentes de funções para gerar
patches binários. As novas funções - [xdiff\_string\_rabdiff()](function.xdiff-string-rabdiff.md) e
[xdiff\_file\_rabdiff()](function.xdiff-file-rabdiff.md) geram saídas compatíveis com funções mais antigas,
mas geralmente são mais rápidas e geram resultados menores. Para mais detalhes sobre os métodos de
geração de patches binários e as diferenças entre eles, consulte o
site [» libxdiff](http://www.xmailserver.org/xdiff-lib.html).

Esta extensão usa libxdiff para implementar essas funções. Consulte
[» http://www.xmailserver.org/xdiff-lib.html](http://www.xmailserver.org/xdiff-lib.html) para mais informações.

- [Instalação/Configuração](xdiff.setup.md)
  - [Dependências](xdiff.requirements.md)
  - [Instalação](xdiff.installation.md)
- [Constantes predefinidas](xdiff.constants.md)
- [Funções de xdiff](ref.xdiff.md)
  - [xdiff\_file\_bdiff](function.xdiff-file-bdiff.md) — Diferencia dois arquivos de forma binária
  - [xdiff\_file\_bdiff\_size](function.xdiff-file-bdiff-size.md) — Lê um tamanho de arquivo criado pela aplicação de um diff binário
  - [xdiff\_file\_bpatch](function.xdiff-file-bpatch.md) — Corrige um arquivo com uma diferença binária
  - [xdiff\_file\_diff](function.xdiff-file-diff.md) — Faz uma comparação unificada de dois arquivos
  - [xdiff\_file\_diff\_binary](function.xdiff-file-diff-binary.md) — Sinônimo de xdiff\_file\_bdiff
  - [xdiff\_file\_merge3](function.xdiff-file-merge3.md) — Mescla 3 arquivos em um
  - [xdiff\_file\_patch](function.xdiff-file-patch.md) — Corrige um arquivo com uma comparação unificada
  - [xdiff\_file\_patch\_binary](function.xdiff-file-patch-binary.md) — Sinônimo de xdiff\_file\_bpatch
  - [xdiff\_file\_rabdiff](function.xdiff-file-rabdiff.md) — Faz a comparação binária de dois arquivos usando o algoritmo de impressão digital polinomial de Rabin
  - [xdiff\_string\_bdiff](function.xdiff-string-bdiff.md) — Faz diferença binária de duas strings
  - [xdiff\_string\_bdiff\_size](function.xdiff-string-bdiff-size.md) — Lê um tamanho de arquivo criado pela aplicação de uma comparação binária
  - [xdiff\_string\_bpatch](function.xdiff-string-bpatch.md) — Corrige uma string com uma diferença binária
  - [xdiff\_string\_diff](function.xdiff-string-diff.md) — Faz uma diferença unificada entre duas strings
  - [xdiff\_string\_diff\_binary](function.xdiff-string-diff-binary.md) — Sinônimo de xdiff\_string\_bdiff
  - [xdiff\_string\_merge3](function.xdiff-string-merge3.md) — Mesclar 3 strings em uma
  - [xdiff\_string\_patch](function.xdiff-string-patch.md) — Altera uma string com uma correção unificada
  - [xdiff\_string\_patch\_binary](function.xdiff-string-patch-binary.md) — Sinônimo de xdiff\_string\_bpatch
  - [xdiff\_string\_rabdiff](function.xdiff-string-rabdiff.md) — Gera a diferença binária de duas strings usando o algoritmo de impressão digital polinomial de Rabin

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
