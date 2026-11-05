# Suporte da API para transações

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.quickstart.transactions.php

---

## Suporte da API para transações

O servidor MySQL suporta transações dependendo do tipo de motor de armazenamento usado.
Desde o MySQL 5.5, InnoDB é o motor padrão de armazenamento.
InnoDB tem suporte completo a transações ACID.

Transações podem ser controladas usando-se chamadas por SQL ou pela API.
É recomentado usar as chamadas via API para habilitar e desabilitar o modo
`autocommit` e para enviar ou desfazer transações.

**Exemplo #1 Configurando o modo `autocommit` com SQL e através da API**

```
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("example.com", "user", "password", "database");

/* Recomendado: usando API para controlar configurações de transações */
$mysqli->autocommit(false);

/* Não será monitorado ou reconhecido pela replicação ou pelo plugin de balanceamento de carga */
$mysqli->query('SET AUTOCOMMIT = 0');
```

Pacotes de recursos opcionais, como plugins de replicação e de balanceamento de carga,
podem facilmente monitorar chamadas da API. O plugin de replicação oferece balanceamento de
carga com suporte a transação, se as transações forem controladas por chamadas da API.
Balanceamento de carga com suporte a transação não estará disponível se instruções SQL forem
usadas para configurar o modo `autocommit`, para enviar ou para desfazer transações.

**Exemplo #2 Enviando e desfazendo transações**

```
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("example.com", "user", "password", "database");
$mysqli->autocommit(false); //desliga o modo de envio automático

$mysqli->query("INSERT INTO test(id) VALUES (1)");
$mysqli->rollback(); //desfaz a inserção acima

$mysqli->query("INSERT INTO test(id) VALUES (2)");
$mysqli->commit(); //envia (confirma) a inserção acima
```

Observe que o servidor MySQL não consegue desfazer qualquer instrução.
Algumas instruções causam um envio implícito.

**Veja também**

- [mysqli::autocommit()](mysqli.autocommit.md)
- [mysqli::begin\_transaction()](mysqli.begin-transaction.md)
- [mysqli::commit()](mysqli.commit.md)
- [mysqli::rollback()](mysqli.rollback.md)

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
