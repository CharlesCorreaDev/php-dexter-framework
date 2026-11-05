# Cria um novo xmlwriter usando o URI de origem para saída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.openuri.php

---

# XMLWriter::openUri

# xmlwriter\_open\_uri

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0)

XMLWriter::openUri -- xmlwriter\_open\_uri — Cria um novo xmlwriter usando o URI de origem para saída

### Descrição

Estilo orientado a objetos

public function **XMLWriter::openUri**([string](language.types.string.md) `$uri`): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_open\_uri**([string](language.types.string.md) `$uri`): [XMLWriter](class.xmlwriter.md)|[false](language.types.singleton.md)

Cria um novo [XMLWriter](class.xmlwriter.md) usando
`uri` para a saída.

### Parâmetros

`uri`
:   O URI do recurso para a saída.

### Valor Retornado

Estilo orientado a objetos: Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

Estilo procedural: Retorna uma nova instância de [XMLWriter](class.xmlwriter.md) para uso posterior com as funções
xmlwriter em caso de sucesso, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função agora retorna uma instância de [XMLWriter](class.xmlwriter.md) em caso de sucesso. Anteriormente, um [resource](language.types.resource.md) era retornado neste caso. |

### Examples

**Exemplo #1 Saída direta de XML**

É possível gerar XML diretamente usando o
[empacotador de fluxo php://output](wrappers.php.md#wrappers.php.output).

```
<?php
$out =new XMLWriter();
$out->openURI('php://output');
?>
```

### Notas

> **Nota**:
>
> No Windows, os arquivos abertos com esta função ficam bloqueados até que o escritor
> seja liberado.

### Veja também

- [XMLWriter::openMemory()](xmlwriter.openmemory.md) - Cria um novo xmlwriter usando memória para saída de string

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
