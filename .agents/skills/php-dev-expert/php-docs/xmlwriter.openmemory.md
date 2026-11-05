# Cria um novo xmlwriter usando memória para saída de string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.openmemory.php

---

# XMLWriter::openMemory

# xmlwriter\_open\_memory

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0)

XMLWriter::openMemory -- xmlwriter\_open\_memory — Cria um novo xmlwriter usando memória para saída de string

### Descrição

Estilo orientado a objetos

public function **XMLWriter::openMemory**(): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_open\_memory**(): [XMLWriter](class.xmlwriter.md)|[false](language.types.singleton.md)

Cria um novo [XMLWriter](class.xmlwriter.md) usando memória para saída de string.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Estilo orientado a objetos: Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

Estilo procedural: Retorna um novo [XMLWriter](class.xmlwriter.md) para uso posterior com as
funções xmlwriter em caso de sucesso, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função agora retorna uma instância de [XMLWriter](class.xmlwriter.md) em caso de sucesso. Anteriormente, um [resource](language.types.resource.md) era retornado neste caso. |

### Veja também

- [XMLWriter::openUri()](xmlwriter.openuri.md) - Cria um novo xmlwriter usando o URI de origem para saída

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
