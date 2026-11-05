# Cria uma nova preferência de leitura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-readpreference.construct.php

---

# MongoDB\Driver\ReadPreference::\_\_construct

(mongodb >=1.0.0)

MongoDB\Driver\ReadPreference::\_\_construct — Cria uma nova preferência de leitura

### Descrição

final public function **MongoDB\Driver\ReadPreference::\_\_construct**([string](language.types.string.md) `$mode`, [?](language.types.null.md)[array](language.types.array.md) `$tagSets` = **`null`**, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**)

Constrói um novo [MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md), que
é um objeto de valor imutável.

### Parâmetros

`mode`
:   **Modo de preferência de leitura**

    | Valor | Descrição |
    | --- | --- |
    | `"primary"` | Todas as operações são lidas do conjunto de réplicas primário atual. Esta é a preferência de leitura padrão do MongoDB. |
    | `"primaryPreferred"` | Na maioria das situações, as operações são lidas a partir dos membros primários, mas se não estiver disponível, as operações são lidas a partir dos membros secundários. |
    | `"secondary"` | Todas as operações são lidas nos membros secundários do conjunto de réplicas. |
    | `"secondaryPreferred"` | Na maioria das situações, as operações são lidas a partir de membros secundários, mas se nenhum membro secundário estiver disponível, as operações são lidas a partir do primário. |
    | `"nearest"` | Operações lidas do membro do conjunto de réplicas com a menor latência de rede, independentemente do tipo do membro. |

`tagSets`
:   Os conjuntos de tags permitem direcionar operações de leitura para membros específicos de um
    conjunto de réplicas. Este parâmetro deve ser um array de arrays associativos, cada
    um contendo zero ou mais pares chave/valor. Ao selecionar um servidor para
    uma operação de leitura, o driver tenta selecionar um nó que tenha todas as tags em um
    conjunto (ou seja, o array associativo de pares chave/valor). Se a seleção falhar,
    o driver tentará conjuntos subsequentes. Um conjunto de tags vazio
    (`array()`) corresponderá a qualquer nó e pode ser usado como
    substituto.

    Tags não são compatíveis com o modo `"primary"` e,
    em geral, só se aplicam ao selecionar um membro secundário de um conjunto para uma
    operação de leitura. No entanto, o modo `"nearest"`, quando
    combinado com um conjunto de tags, seleciona o membro correspondente com a menor
    latência de rede. Este membro pode ser um primário ou um secundário.

`options`
:   **Opções**

    | Opção | Tipo | Descrição |
    | --- | --- | --- |
    | hedge | [object](language.types.object.md)|[array](language.types.array.md) | Especifica se devem ser usadas [» leituras protegidas](https://www.mongodb.com/docs/manual/core/sharded-cluster-query-router/#mongos-hedged-reads), que são suportadas pelo MongoDB 4.4+ para consultas fragmentadas.  As leituras protegidas do servidor estão disponíveis para todas as preferências de leitura não primárias e são habilitadas por padrão ao usar o modo `"nearest"`. Esta opção permite ativar explicitamente leituras protegidas pelo servidor para preferências de leitura não primárias, especificando `['enabled' => true]` ou desabilitando explicitamente leituras protegidas pelo servidor para a preferência de leitura `"nearest"` especificando `['enabled' => false]`. |
    | maxStalenessSeconds | [int](language.types.integer.md) | Especifica um atraso máximo de replicação, ou "inatividade", para leituras de secundários. Quando a inatividade estimada de um secundário excede esse valor, o driver deixa de usá-lo para operações de leitura.  Se especificada, a inatividade máxima deve ser um número inteiro de 32 bits com sinal, maior ou igual a **`MongoDB\Driver\ReadPreference::SMALLEST_MAX_STALENESS_SECONDS`**.  O padrão é **`MongoDB\Driver\ReadPreference::NO_MAX_STALENESS`**, o que significa que o driver não considerará o atraso de um secundário ao escolher para onde direcionar uma operação de leitura.  Esta opção não é compatível com o modo `"primary"`. A especificação de uma inatividade máxima também exige que todas as instâncias do MongoDB na implantação usem o MongoDB 3.4+. Uma exceção será lançada no momento da execução se alguma instância do MongoDB na implantação for de uma versão de servidor mais antiga. |

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se `mode` for inválido.
- Lança uma [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se `tagSets` for fornecido para uma preferência de leitura primária ou estiver malformado (ou seja, não é uma array de zero ou mais documentos).
- Lança uma [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se a opção `"maxStalenessSeconds"` for fornecida para uma preferência de leitura primária ou estiver fora do intervalo.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | PAssar um [int](language.types.integer.md) para o argumento `mode` não é mais suportado. |
| PECL mongodb 1.20.0 | Passar um [int](language.types.integer.md) no parâmetro `mode` foi *DESCONTINUADO*. |
| PECL mongodb 1.8.0 | Adcionada a opção `"hedge"`. |
| PECL mongodb 1.3.0 | O parâmetro `mode` agora aceita um valor de string, que é consistente com a opção URI `"readPreference"` para [MongoDB\Driver\Manager::\_\_construct()](mongodb-driver-manager.construct.md). |
| PECL mongodb 1.2.0 | Adicionado um terceiro parâmetro `options`, que suporta a opção `"maxStalenessSeconds"`. |

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\ReadPreference::\_\_construct()****

```
<?php

/* Prefere um nó secundário, mas volta para um nó primário. */
var_dump(new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::SECONDARY_PREFERRED));

/* Prefere um nó na central de dados de Nova Iorque com a latência mais baixa. */
var_dump(new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::NEAREST, [['dc' => 'ny']]));

/* Exige um nó secundário cujo atraso de replicação esteja dentro de dois minutos do primário */
var_dump(new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::SECONDARY, null, ['maxStalenessSeconds' => 120]));

/* Habilita explicitamente leituras protegidas pelo servidor */
var_dump(new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::SECONDARY, null, ['hedge' => ['enabled' => true]]));

?>
```

O exemplo acima produzirá:

```
object(MongoDB\Driver\ReadPreference)#1 (1) {
  ["mode"]=>
  string(18) "secondaryPreferred"
}
object(MongoDB\Driver\ReadPreference)#1 (2) {
  ["mode"]=>
  string(7) "nearest"
  ["tags"]=>
  array(1) {
    [0]=>
    object(stdClass)#2 (1) {
      ["dc"]=>
      string(2) "ny"
    }
  }
}
object(MongoDB\Driver\ReadPreference)#1 (2) {
  ["mode"]=>
  string(9) "secondary"
  ["maxStalenessSeconds"]=>
  int(120)
}
object(MongoDB\Driver\ReadPreference)#1 (2) {
  ["mode"]=>
  string(9) "secondary"
  ["hedge"]=>
  object(stdClass)#1 (1) {
    ["enabled"]=>
    bool(true)
  }
}
```

### Veja também

- [» Referência de Preferência de Leitura](https://www.mongodb.com/docs/manual/core/read-preference/)

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
