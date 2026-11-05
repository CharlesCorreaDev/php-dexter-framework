# Cria uma nova preocupação de gravação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-writeconcern.construct.php

---

# MongoDB\Driver\WriteConcern::\_\_construct

(mongodb >=1.0.0)

MongoDB\Driver\WriteConcern::\_\_construct — Cria uma nova preocupação de gravação

### Descrição

final public function **MongoDB\Driver\WriteConcern::\_\_construct**([string](language.types.string.md)|[int](language.types.integer.md) `$w`, [?](language.types.null.md)[int](language.types.integer.md) `$wtimeout` = **`null`**, [?](language.types.null.md)[bool](language.types.boolean.md) `$journal` = **`null`**)

Constrói um novo [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md), que
é um objeto de valor imutável.

### Parâmetros

`w`
:   **Preocupação de gravação**

    | Valor | Descrição |
    | --- | --- |
    | 1 | Solicita o reconhecimento de que a operação de gravação foi propagada para o `mongod` independente ou para o primário em um conjunto de réplicas. Esta é a preocupação de gravação padrão do MongoDB. |
    | 0 | Não solicita confirmação da operação de gravação. No entanto, isso pode retornar informações sobre exceções de soquete e erros de rede para a aplicação. |
    | <inteiro maior que 1> | Números maiores que 1 são válidos apenas para conjuntos de réplicas solicitarem confirmação de um número especificado de membros, incluindo o primário. |
    | **`MongoDB\Driver\WriteConcern::MAJORITY`** | Solicita o reconhecimento de que as operações de gravação foram propagadas para a maioria dos nós de votação, incluindo o primário, e foram gravadas no diário em disco para esses nós.  Antes do MongoDB 3.0, isso se referia à maioria dos membros do conjunto de réplicas (não apenas aos nós de votação). |
    | string | Um valor de string é interpretado como um conjunto de tags. Solicita a confirmação de que as operações de gravação foram propagadas para um membro do conjunto de réplicas com a etiqueta especificada. |

`wtimeout`
:   Quanto tempo esperar (em milissegundos) pelos secundários antes de falhar.

    `wtimeout` faz com que as operações de gravação retornem com um
    erro (**WriteConcernError**) após o limite especificado,
    mesmo que a preocupação de gravação necessária acabe sendo bem-sucedida. Quando
    essas operações de gravação retornam, o MongoDB não desfaz as modificações de dados
    bem-sucedidas realizadas antes que a preocupação de gravação excedesse o
    limite de tempo `wtimeout`.

    Se especificado, `wtimeout` deve ser um número inteiro de 64 bits, com sinal,
    maior ou igual a zero.

    **Tempo limite de preocupação de gravação**

    | Valor | Descrição |
    | --- | --- |
    | 0 | Bloqueia indefinidamente. Este é o padrão. |
    | <inteiro maior que 0> | Milissegundos para esperar até retornar. |

`journal`
:   Espera até que o mongod aplique a gravação no diário.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se `w` for inválido ou `wtimeout` for negativo ou maior que os limites de um número inteiro de 32 bits com sinal.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 1.7.0 | O parâmetro `wTimeout` agora aceita valores de 64 bits. |

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\WriteConcern::\_\_construct()****

```
<?php

/* Solicita confirmação de gravação da maioria dos nós do conjunto de réplicas */
$wc = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 500);

/* Solicita confirmação de gravação de um nó configurado com a etiqueta "MultipleDC" */
$wc = new MongoDB\Driver\WriteConcern("MultipleDC", 500);

?>
```

### Veja também

- [» Referência de Preocupação de Gravação](https://www.mongodb.com/docs/manual/reference/write-concern/)

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
