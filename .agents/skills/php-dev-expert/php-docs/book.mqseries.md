# mqseries

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.mqseries.php

---

# mqseries

# Introdução

**Aviso**

Esta extensão é
*EXPERIMENTAL*. O comportamento desta extensão, incluindo
os nomes de suas funções e qualquer outra documentação relacionada a esta
extensão, pode mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

Esta extensão visa fornecer uma interface para comunicação com os
gerenciadores de filas da série WebSphere MQ da IBM.

A interface imita a interface de cliente API-C da série WebSphere MQ o mais
próximo possível. Usa as mesmas convenções de nomenclatura e possibilidades da
API-C. Para entender o funcionamento desta extensão, é necessário algum nível de
compreensão da API-C.

Para opções MQ, estruturas MQ, resultados MQ etc., leia o Guia de Programação de Aplicações
WebSphere MQ e a Referência de Programação de Aplicações
WebSphere MQ.

- [Instalação/Configuração](mqseries.setup.md)
  - [Dependências](mqseries.requirements.md)
  - [Instalação](mqseries.configure.md)
  - [Configurações de Execução](mqseries.ini.md)
  - [Tipos de Recurso](mqseries.resources.md)
- [Constantes predefinidas](mqseries.constants.md)
- [Funções de mqseries](ref.mqseries.md)
  - [mqseries\_back](function.mqseries-back.md) — MQBACK de MQSeries
  - [mqseries\_begin](function.mqseries-begin.md) — MQBEGIN de MQseries
  - [mqseries\_close](function.mqseries-close.md) — MQCLOSE de MQSeries
  - [mqseries\_cmit](function.mqseries-cmit.md) — MQCMIT de MQSeries
  - [mqseries\_conn](function.mqseries-conn.md) — MQCONN MQSeries
  - [mqseries\_connx](function.mqseries-connx.md) — MQCONNX MQSeries
  - [mqseries\_disc](function.mqseries-disc.md) — MQDISC MQSeries
  - [mqseries\_get](function.mqseries-get.md) — MQGET MQSeries
  - [mqseries\_inq](function.mqseries-inq.md) — MQINQ MQSeries
  - [mqseries\_open](function.mqseries-open.md) — MQOPEN MQSeries
  - [mqseries\_put](function.mqseries-put.md) — MQPUT MQSeries
  - [mqseries\_put1](function.mqseries-put1.md) — MQPUT1 MQSeries
  - [mqseries\_set](function.mqseries-set.md) — MQSET MQSeries
  - [mqseries\_strerror](function.mqseries-strerror.md) — Retorna a mensagem de erro correspondente a um código de resultado (MQRC)

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
