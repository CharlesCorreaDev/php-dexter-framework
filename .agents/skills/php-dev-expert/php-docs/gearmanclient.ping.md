# Envia dados para todos os servidores de tarefa para ver se eles os ecoam de volta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.ping.php

---

# GearmanClient::ping

(No version information available, might only be in Git)

GearmanClient::ping — Envia dados para todos os servidores de tarefa para ver se eles os ecoam de volta

### Descrição

public function **GearmanClient::ping**([string](language.types.string.md) `$workload`): [bool](language.types.boolean.md)

Envia alguns dados arbitrários para todos os servidores de tarefa para ver se eles os ecoam de volta. Os dados enviados
não são usados ​​ou processados ​​de nenhuma outra forma. Usado principalmente para teste e depuração.

### Parâmetros

`workload`
:   Alguns dados serializados arbitrários para serem ecoados de volta.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
