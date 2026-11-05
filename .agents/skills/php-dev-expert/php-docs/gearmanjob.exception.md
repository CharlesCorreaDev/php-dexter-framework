# Envia exceção para trabalho em execução (descontinuado)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanjob.exception.php

---

# GearmanJob::exception

(PECL gearman <= 0.5.0)

GearmanJob::exception — Envia exceção para trabalho em execução (descontinuado)

### Descrição

public function **GearmanJob::exception**([string](language.types.string.md) `$exception`): [bool](language.types.boolean.md)

Envia a exceção fornecida quando este trabalho está em execução.

> **Nota**:
>
> Este método foi substituído por [GearmanJob::sendException()](gearmanjob.sendexception.md) na
> versão 0.6.0 da extensão Gearman.

### Parâmetros

`exception`
:   Uma descrição de exceção.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [GearmanJob::setReturn()](gearmanjob.setreturn.md) - Define um valor de retorno
- [GearmanJob::sendStatus()](gearmanjob.sendstatus.md) - Envia status
- [GearmanJob::sendWarning()](gearmanjob.sendwarning.md) - Envia um alerta

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
