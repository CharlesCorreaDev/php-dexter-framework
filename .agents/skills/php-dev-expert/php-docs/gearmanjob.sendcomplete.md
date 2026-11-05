# Envia o resultado e status completo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanjob.sendcomplete.php

---

# GearmanJob::sendComplete

(PECL gearman >= 0.6.0)

GearmanJob::sendComplete — Envia o resultado e status completo

### Descrição

public function **GearmanJob::sendComplete**([string](language.types.string.md) `$result`): [bool](language.types.boolean.md)

Envia dados de resultados e a atualização de status completa para este trabalho.

### Parâmetros

`result`
:   Dados de resultados serializados.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [GearmanJob::sendFail()](gearmanjob.sendfail.md) - Envia status de falha
- [GearmanJob::setReturn()](gearmanjob.setreturn.md) - Define um valor de retorno

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
