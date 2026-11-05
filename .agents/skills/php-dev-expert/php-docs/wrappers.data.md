# Dados (RFC 2397)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wrappers.data.php

---

# data://

data:// — Dados (RFC 2397)

### Descrição

O empacotador de fluxo data: ([» RFC
2397](https://datatracker.ietf.org/doc/html/rfc2397)).

### Uso

- data://text/plain;base64,

### Opções

**Sumário do Empacotador**

| Atributo | Suportado |
| --- | --- |
| Restrito por [allow\_url\_fopen](filesystem.configuration.md#ini.allow-url-fopen) | Sim |
| Restrito por [allow\_url\_include](filesystem.configuration.md#ini.allow-url-include) | Sim |
| Permite Leitura | Sim |
| Permite Escrita | Não |
| Permite Adição | Não |
| Permite Leitura e Escrita Simultâneas | Não |
| Suporta [stat()](function.stat.md) | Não |
| Suporta [unlink()](function.unlink.md) | Não |
| Suporta [rename()](function.rename.md) | Não |
| Suporta [mkdir()](function.mkdir.md) | Não |
| Suporta [rmdir()](function.rmdir.md) | Não |

### Examples

**Exemplo #1 Imprimir conteúdo de data://**

```
<?php
// prints "I love PHP"
echo file_get_contents('data://text/plain;base64,SSBsb3ZlIFBIUAo=');
?>
```

**Exemplo #2 Obtém o tipo de mídia**

```
<?php
$fp   = fopen('data://text/plain;base64,', 'r');
$meta = stream_get_meta_data($fp);

// prints "text/plain"
echo $meta['mediatype'];
?>
```

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
