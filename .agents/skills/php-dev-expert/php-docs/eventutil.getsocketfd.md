# Retorna o descritor numérico de arquivo de um soquete ou fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventutil.getsocketfd.php

---

# EventUtil::getSocketFd

(PECL event >= 1.7.0)

EventUtil::getSocketFd — Retorna o descritor numérico de arquivo de um soquete ou fluxo

### Descrição

public
static
function **EventUtil::getSocketFd**(
[mixed](language.types.mixed.md) `$socket`
): [int](language.types.integer.md)

Retorna o descritor numérico de arquivo de um soquete ou fluxo especificado pelo argumento
`socket`
assim como a extensão
`Event`
faz isso internamente para todos os métodos que aceitam o recurso de soquete ou
fluxo.

### Parâmetros

`socket`
:   Recurso de soquete ou fluxo.

### Valor Retornado

Retorna o descritor numérico de arquivo de um soquete ou fluxo.
**EventUtil::getSocketFd()**
retorna **`false`** caso não tenha reconhecido o tipo de
arquivo subjacente ou tenha detectado que o descritor de arquivo associado a
`socket`
não é válido.

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
