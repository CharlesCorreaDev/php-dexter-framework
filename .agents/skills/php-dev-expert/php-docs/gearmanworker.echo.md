# Testa a resposta do servidor de trabalho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanworker.echo.php

---

# GearmanWorker::echo

(PECL gearman >= 0.6.0)

GearmanWorker::echo — Testa a resposta do servidor de trabalho

### Descrição

public function **GearmanWorker::echo**([string](language.types.string.md) `$workload`): [bool](language.types.boolean.md)

Envia dados para todos os servidores de trabalho para ver se eles os ecoam de volta. Esta é uma função de teste
para ver se os servidores de trabalho estão respondendo corretamente.

### Parâmetros

`workload`
:   Dados serializados arbitrários

### Valor Retornado

Valor de retorno padrão do Gearman.

### Veja também

- [GearmanClient::echo()](gearmanclient.echo.md) - Envia dados para todos os servidores de trabalho para ver se eles os ecoam de volta (descontinuado)

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
