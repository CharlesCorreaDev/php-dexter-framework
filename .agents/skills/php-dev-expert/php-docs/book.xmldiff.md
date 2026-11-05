# Diferença e mesclagem de XML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.xmldiff.php

---

# Diferença e mesclagem de XML

# Introdução

A extensão é capaz de produzir diferenças de dois documentos XML e, em seguida, aplicá-las ao documento de origem. A diferença é um documento XML contendo nós de instruções de copiar/inserir/excluir em formato legível. Objetos DOMDocument, arquivos locais e strings na memória podem ser processados.

- [Instalação/Configuração](xmldiff.setup.md)
  - [Dependências](xmldiff.requirements.md)
  - [Instalação](xmldiff.installation.md)
- [XMLDiff\Base](class.xmldiff-base.md) — A classe XMLDiff\Base
  - [XMLDiff\Base::\_\_construct](xmldiff-base.construct.md) — Construtor
  - [XMLDiff\Base::diff](xmldiff-base.diff.md) — Produz diferença entre dois documentos XML
  - [XMLDiff\Base::merge](xmldiff-base.merge.md) — Produz novo documento XML com base em diferenças
- [XMLDiff\DOM](class.xmldiff-dom.md) — A classe XMLDiff\DOM
  - [XMLDiff\DOM::diff](xmldiff-dom.diff.md) — Diferencia dois objetos DOMDocument
  - [XMLDiff\DOM::merge](xmldiff-dom.merge.md) — Produz DOMDocument mesclado
- [XMLDiff\Memory](class.xmldiff-memory.md) — A classe XMLDiff\Memory
  - [XMLDiff\Memory::diff](xmldiff-memory.diff.md) — Diferencia dois documentos XML
  - [XMLDiff\Memory::merge](xmldiff-memory.merge.md) — Produz documento XML mesclado
- [XMLDiff\File](class.xmldiff-file.md) — A classe XMLDiff\File
  - [XMLDiff\File::diff](xmldiff-file.diff.md) — Diferencia dois arquivos XML
  - [XMLDiff\File::merge](xmldiff-file.merge.md) — Produz documento XML mesclado

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
