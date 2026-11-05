# Envia EOF para o fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-send-eof.php

---

# ssh2\_send\_eof

(PECL ssh2 >= 1.3)

ssh2\_send\_eof — Envia EOF para o fluxo

### Descrição

function **ssh2\_send\_eof**([resource](language.types.resource.md) `$channel`): [bool](language.types.boolean.md)

Envia um EOF para o fluxo; normalmente usado para fechar a entrada padrão,
mantendo a saída e o erro ativos. Por exemplo, é possível enviar um processo remoto
para processar alguns dados pela entrada padrão, fechá-lo para iniciar o processamento e
ainda conseguir ler os resultados sem criar arquivos adicionais.

### Parâmetros

`channel`
:   Um fluxo SSH pode ser adquirido por meio de funções como [ssh2\_fetch\_stream()](function.ssh2-fetch-stream.md)
    ou [ssh2\_connect()](function.ssh2-connect.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ssh2\_fetch\_stream()](function.ssh2-fetch-stream.md) - Busca um fluxo de dados estendido

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
