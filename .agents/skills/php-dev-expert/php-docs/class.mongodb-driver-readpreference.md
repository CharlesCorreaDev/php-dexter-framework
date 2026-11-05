# A classe MongoDB\Driver\ReadPreference

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-readpreference.php

---

# A classe MongoDB\Driver\ReadPreference

(mongodb >=1.0.0)

## Introdução

## Resumo da classe

final

class **MongoDB\Driver\ReadPreference**
implements
[MongoDB\BSON\Serializable](class.mongodb-bson-serializable.md), [Serializable](class.serializable.md) {

/\* Propriedades \*/

public
readonly
[string](language.types.string.md)
[$mode](class.mongodb-driver-readpreference.md#mongodb-driver-readpreference.props.mode);

public
readonly
?[array](language.types.array.md)
[$tags](class.mongodb-driver-readpreference.md#mongodb-driver-readpreference.props.tags);

public
readonly
[int](language.types.integer.md)
[$maxStalenessSeconds](class.mongodb-driver-readpreference.md#mongodb-driver-readpreference.props.maxstaleness);

public
readonly
?[object](language.types.object.md)
[$hedge](class.mongodb-driver-readpreference.md#mongodb-driver-readpreference.props.hedge);

/\* Constantes \*/

const
[string](language.types.string.md)
[PRIMARY](class.mongodb-driver-readpreference.md#mongodb-driver-readpreference.constants.primary) = primary;

const
[string](language.types.string.md)
[PRIMARY\_PREFERRED](class.mongodb-driver-readpreference.md#mongodb-driver-readpreference.constants.primary-preferred) = primaryPreferred;

const
[string](language.types.string.md)
[SECONDARY](class.mongodb-driver-readpreference.md#mongodb-driver-readpreference.constants.secondary) = secondary;

const
[string](language.types.string.md)
[SECONDARY\_PREFERRED](class.mongodb-driver-readpreference.md#mongodb-driver-readpreference.constants.secondary-preferred) = secondaryPreferred;

const
[string](language.types.string.md)
[NEAREST](class.mongodb-driver-readpreference.md#mongodb-driver-readpreference.constants.nearest) = nearest;

const
[int](language.types.integer.md)
[NO\_MAX\_STALENESS](class.mongodb-driver-readpreference.md#mongodb-driver-readpreference.constants.no-max-staleness) = -1;

const
[int](language.types.integer.md)
[SMALLEST\_MAX\_STALENESS\_SECONDS](class.mongodb-driver-readpreference.md#mongodb-driver-readpreference.constants.smallest-max-staleness-seconds) = 90;

/\* Métodos \*/

final public function [bsonSerialize](mongodb-driver-readpreference.bsonserialize.md)(): [stdClass](class.stdclass.md)

final public function [\_\_construct](mongodb-driver-readpreference.construct.md)([string](language.types.string.md) `$mode`, [?](language.types.null.md)[array](language.types.array.md) `$tagSets` = **`null`**, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**)

final public function [getHedge](mongodb-driver-readpreference.gethedge.md)(): [?](language.types.null.md)[object](language.types.object.md)

final public function [getMaxStalenessSeconds](mongodb-driver-readpreference.getmaxstalenessseconds.md)(): [int](language.types.integer.md)

final public function [getMode](mongodb-driver-readpreference.getmode.md)(): [int](language.types.integer.md)

final public function [getModeString](mongodb-driver-readpreference.getmodestring.md)(): [string](language.types.string.md)

final public function [getTagSets](mongodb-driver-readpreference.gettagsets.md)(): [array](language.types.array.md)

}

## Propriedades

mode
:   O modo de preferência de leitura como uma string (por exemplo,
    `"primary"`, `"secondary"`).

tags
:   A lista de conjuntos de tags usada pela preferência de leitura, ou **`null`** se nenhum conjunto de tags
    foi especificado.

maxStalenessSeconds
:   O tempo máximo de defasagem em segundos para leituras, ou
    **`MongoDB\Driver\ReadPreference::NO_MAX_STALENESS`**
    se nenhum tempo máximo de defasagem foi especificado.

hedge
:   Um documento que especifica as opções de hedge para a preferência de leitura, ou
    **`null`** se nenhuma opção de hedge foi especificada.

    **Aviso**

    Esta propriedade foi descontinuada, pois as leituras protegidas estão obsoletas no
    MongoDB 8.0.

## Constantes predefinidas

**`MongoDB\Driver\ReadPreference::PRIMARY`**
:   Todas as operações são lidas do conjunto de réplicas primário atual. Esta é a
    preferência de leitura padrão do MongoDB.

**`MongoDB\Driver\ReadPreference::PRIMARY_PREFERRED`**
:   Na maioria das situações, as operações são lidas a partir dos membros primários, mas se não
    estiver disponível, as operações são lidas a partir dos membros secundários.

**`MongoDB\Driver\ReadPreference::SECONDARY`**
:   Todas as operações são lidas nos membros secundários do conjunto de réplicas.

**`MongoDB\Driver\ReadPreference::SECONDARY_PREFERRED`**
:   Na maioria das situações, as operações são lidas a partir de membros secundários, mas se nenhum
    membro secundário estiver disponível, as operações são lidas a partir do primário.

**`MongoDB\Driver\ReadPreference::NEAREST`**
:   Operações lidas do membro do conjunto de réplicas com a menor latência
    de rede, independentemente do tipo do membro.

**`MongoDB\Driver\ReadPreference::NO_MAX_STALENESS`**
:   O valor padrão para a opção `"maxStalenessSeconds"`
    é não especificar nenhum limite de inatividade máxima, o que significa que o
    driver não considerará o atraso de um secundário ao escolher para onde
    direcionar uma operação de leitura.

**`MongoDB\Driver\ReadPreference::SMALLEST_MAX_STALENESS_SECONDS`**
:   O valor mínimo para a opção `"maxStalenessSeconds"`
    é 90 segundos. O driver estima a inatividade dos secundários
    verificando periodicamente a data de gravação mais recente de cada membro do conjunto de réplicas.
    Como essas verificações são pouco frequentes, a estimativa de inatividade é grosseira.
    Assim, o driver não pode impor um valor máximo de inatividade inferior a 90
    segundos.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.3.0 | Adicionadas propriedades públicas readonly. |
| PECL mongodb 2.0.0 | Removidas as constantes **`MongoDB\Driver\ReadPreference::RP_PRIMARY`**, **`MongoDB\Driver\ReadPreference::RP_PRIMARY_PREFERRED`**, **`MongoDB\Driver\ReadPreference::RP_SECONDARY`**, **`MongoDB\Driver\ReadPreference::RP_SECONDARY_PREFERRED`** e **`MongoDB\Driver\ReadPreference::RP_NEAREST`**. O método **getMode()** também foi removido. |
| PECL mongodb 1.20.0 | As constantes **`MongoDB\Driver\ReadPreference::RP_PRIMARY`**, **`MongoDB\Driver\ReadPreference::RP_PRIMARY_PREFERRED`**, **`MongoDB\Driver\ReadPreference::RP_SECONDARY`**, **`MongoDB\Driver\ReadPreference::RP_SECONDARY_PREFERRED`**, e **`MongoDB\Driver\ReadPreference::RP_NEAREST`** foram descontinuadas. |
| PECL mongodb 1.7.0 | As constantes **`MongoDB\Driver\ReadPreference::PRIMARY`**, **`MongoDB\Driver\ReadPreference::PRIMARY_PREFERRED`**, **`MongoDB\Driver\ReadPreference::SECONDARY`**, **`MongoDB\Driver\ReadPreference::SECONDARY_PREFERRED`**, e **`MongoDB\Driver\ReadPreference::NEAREST`** foram adicionadas.  Implementa [Serializable](class.serializable.md). |
| PECL mongodb 1.2.0 | As constantes **`MongoDB\Driver\ReadPreference::NO_MAX_STALENESS`** e **`MongoDB\Driver\ReadPreference::SMALLEST_MAX_STALENESS_SECONDS`** foram adicionadas.  Implementa [MongoDB\BSON\Serializable](class.mongodb-bson-serializable.md). |

## Índice

- [MongoDB\Driver\ReadPreference::bsonSerialize](mongodb-driver-readpreference.bsonserialize.md) — Retorna um objeto para serialização BSON
- [MongoDB\Driver\ReadPreference::\_\_construct](mongodb-driver-readpreference.construct.md) — Cria uma nova preferência de leitura
- [MongoDB\Driver\ReadPreference::getHedge](mongodb-driver-readpreference.gethedge.md) — Retorna a opção "hedge" do ReadPreference
- [MongoDB\Driver\ReadPreference::getMaxStalenessSeconds](mongodb-driver-readpreference.getmaxstalenessseconds.md) — Retorna a opção "maxStalenessSeconds" do ReadPreference
- [MongoDB\Driver\ReadPreference::getMode](mongodb-driver-readpreference.getmode.md) — Retorna a opção "mode" do ReadPreference
- [MongoDB\Driver\ReadPreference::getModeString](mongodb-driver-readpreference.getmodestring.md) — Retorna a opção "mode" do ReadPreference
- [MongoDB\Driver\ReadPreference::getTagSets](mongodb-driver-readpreference.gettagsets.md) — Retorna a opção "tagSets" do ReadPreference

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
