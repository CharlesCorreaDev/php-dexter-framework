# Acessando o sistema de arquivos local

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wrappers.file.php

---

# file://

file:// — Acessando o sistema de arquivos local

### Descrição

`file://` é o empacotador padrão usado com o PHP e
representa o sistema de arquivos local.
Quando um caminho relativo é especificado (um caminho que não começa com
`/`, `\`, `\\`, ou uma
letra de unidade do Windows), o caminho fornecido será aplicado ao diretório
atual de trabalho. Em muitos casos este é o diretório no qual o script
reside a menos que tenha sido alterado. Usando o SAPI
CLI, o padrão é o diretório do qual o
script foi chamado.

Com algumas funções, tais como [fopen()](function.fopen.md) e
[file\_get\_contents()](function.file-get-contents.md), `include_path`
pode opcionalmente ser pesquisado com caminho relativo também.

### Uso

- /caminho/para/arquivo.ext
- caminho/relativo/para/arquivo.ext
- arquivoNoDiretorioAtual.ext
- C:/caminho/para/arquivoWindows.ext
- C:\caminho\para\arquivoWindows.ext
- \\smbserver\share\caminho\para\arquivoWindows.ext
- file:///caminho/para/arquivo.ext

### Opções

**Sumário do Empacotador**

| Atributo | Suportado |
| --- | --- |
| Restrito por [allow\_url\_fopen](filesystem.configuration.md#ini.allow-url-fopen) | Não |
| Permite Leitura | Sim |
| Permite Escrita | Sim |
| Permite Adição | Sim |
| Permite Leitura e Escrita Simultâneas | Sim |
| Suporta [stat()](function.stat.md) | Sim |
| Suporta [unlink()](function.unlink.md) | Sim |
| Suporta [rename()](function.rename.md) | Sim |
| Suporta [mkdir()](function.mkdir.md) | Sim |
| Suporta [rmdir()](function.rmdir.md) | Sim |

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
