# Arquivo PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wrappers.phar.php

---

# phar://

phar:// — Arquivo PHP

### Descrição

O empacotador de fluxo phar://.
Consulte [Empacotador de fluxo Phar](phar.using.stream.md)
para uma descrição detalhada.

### Uso

- phar://

### Opções

**Sumário do Empacotador**

| Atributo | Suportado |
| --- | --- |
| Restrito por [allow\_url\_fopen](filesystem.configuration.md#ini.allow-url-fopen) | Não |
| Restrito por [allow\_url\_include](filesystem.configuration.md#ini.allow-url-include) | Não |
| Permite Leitura | Sim |
| Permite Escrita | Sim |
| Permite Adição | Não |
| Permite Leitura e Escrita Simultâneas | Sim |
| Suporta [stat()](function.stat.md) | Sim |
| Suporta [unlink()](function.unlink.md) | Sim |
| Suporta [rename()](function.rename.md) | Sim |
| Suporta [mkdir()](function.mkdir.md) | Sim |
| Suporta [rmdir()](function.rmdir.md) | Sim |

### Veja também

- [Opções de contexto do Phar](context.phar.md)

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
