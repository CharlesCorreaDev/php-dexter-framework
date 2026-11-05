# Faz com que a biblioteca leia o arquivo de configuração fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.radius-config.php

---

# radius\_config

(PECL radius >= 1.1.0)

radius\_config — Faz com que a biblioteca leia o arquivo de configuração fornecido

### Descrição

function **radius\_config**([resource](language.types.resource.md) `$radius_handle`, [string](language.types.string.md) `$file`): [bool](language.types.boolean.md)

Antes de emitir qualquer solicitação Radius, a biblioteca deve estar ciente dos
servidores que pode contatar. A maneira mais fácil de configurar a biblioteca é
chamar **radius\_config()**. **radius\_config()**
faz com que a biblioteca leia um arquivo de configuração cujo formato é descrito
em [» radius.conf](https://www.freebsd.org/cgi/man.cgi?query=radius.conf).

### Parâmetros

`radius_handle`

`file`
:   O caminho do arquivo de configuração é passado como argumento de arquivo
    para **radius\_config()**. A biblioteca também pode ser
    configurada programaticamente por meio de chamadas para
    [radius\_add\_server()](function.radius-add-server.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [radius\_add\_server()](function.radius-add-server.md) - Adiciona um servidor

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
