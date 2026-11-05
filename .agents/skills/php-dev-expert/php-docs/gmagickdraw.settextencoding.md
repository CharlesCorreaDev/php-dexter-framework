# Especifica a codificação de caracteres de texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagickdraw.settextencoding.php

---

# GmagickDraw::settextencoding

(PECL gmagick >= Unknown)

GmagickDraw::settextencoding — Especifica a codificação de caracteres de texto

### Descrição

public function **GmagickDraw::settextencoding**([string](language.types.string.md) `$encoding`): [GmagickDraw](class.gmagickdraw.md)

Especifica a codificação de caracteres a ser usada para anotações de texto. A única codificação
de caracteres que pode ser especificada neste momento é "UTF-8" para representar Unicode como
uma sequência de bytes. Ao especificar uma sequência vazia, será definida a codificação de texto padrão do sistema.
A anotação de texto bem-sucedida usando Unicode pode exigir fontes projetadas para suportar Unicode.

### Parâmetros

`encoding`
:   String de caracteres especificando a codificação de texto.

### Valor Retornado

O objeto [GmagickDraw](class.gmagickdraw.md).

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
