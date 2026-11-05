# Envia o resultado e o status completo (descontinuado)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanjob.complete.php

---

# GearmanJob::complete

(PECL gearman <= 0.5.0)

GearmanJob::complete — Envia o resultado e o status completo (descontinuado)

### Descrição

public function **GearmanJob::complete**([string](language.types.string.md) `$result`): [bool](language.types.boolean.md)

Envia dados de resultados e a atualização de status completa para este trabalho.

> **Nota**:
>
> Este método foi substituído por [GearmanJob::sendComplete()](gearmanjob.sendcomplete.md) na
> versão 0.6.0 da extensão Gearman.

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
