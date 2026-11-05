# Especifica o conjunto de caracteres do texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.settextencoding.php

---

# ImagickDraw::setTextEncoding

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setTextEncoding — Especifica o conjunto de caracteres do texto

### Descrição

public function **ImagickDraw::setTextEncoding**([string](language.types.string.md) `$encoding`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Especifica o conjunto de caracteres a ser usado para anotações de texto. O único
conjunto de caracteres que pode ser especificado neste momento é "UTF-8" para
representar Unicode como uma sequência de bytes. Especifique uma string vazia para
definir o conjunto de caracteres para o padrão do sistema. Anotação de texto bem-sucedida
usando Unicode pode exigir fontes projetadas para suportar Unicode.

### Parâmetros

`encoding`
:   o nome do conjunto de caracteres

### Valor Retornado

Nenhum valor é retornado.

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
