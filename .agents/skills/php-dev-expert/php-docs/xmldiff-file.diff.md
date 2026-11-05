# Diferencia dois arquivos XML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmldiff-file.diff.php

---

# XMLDiff\File::diff

(PECL xmldiff >= 0.8.0)

XMLDiff\File::diff — Diferencia dois arquivos XML

### Descrição

public function **XMLDiff\File::diff**([string](language.types.string.md) `$from`, [string](language.types.string.md) `$to`): [string](language.types.string.md)

Diferencia dois arquivos XML locais e produz uma string com as informações de diferenças.

### Parâmetros

`from`
:   Caminho para o documento de origem.

`to`
:   Caminho para o documento de destino.

### Valor Retornado

String com o documento XML contendo as informações de diferenças ou NULL.

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
