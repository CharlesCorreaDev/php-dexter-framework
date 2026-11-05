# A classe SNMP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.snmp.php

---

# A classe SNMP

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

## Introdução

Representa uma sessão SNMP.

## Resumo da classe

class ****SNMP****
{

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[VERSION\_1](class.snmp.md#snmp.constants.version-1);

public
const
[int](language.types.integer.md)
[VERSION\_2c](class.snmp.md#snmp.constants.version-2c);

public
const
[int](language.types.integer.md)
[VERSION\_2C](class.snmp.md#snmp.constants.version-2c);

public
const
[int](language.types.integer.md)
[VERSION\_3](class.snmp.md#snmp.constants.version-3);

public
const
[int](language.types.integer.md)
[ERRNO\_NOERROR](class.snmp.md#snmp.constants.errno-noerror);

public
const
[int](language.types.integer.md)
[ERRNO\_ANY](class.snmp.md#snmp.constants.errno-any);

public
const
[int](language.types.integer.md)
[ERRNO\_GENERIC](class.snmp.md#snmp.constants.errno-generic);

public
const
[int](language.types.integer.md)
[ERRNO\_TIMEOUT](class.snmp.md#snmp.constants.errno-timeout);

public
const
[int](language.types.integer.md)
[ERRNO\_ERROR\_IN\_REPLY](class.snmp.md#snmp.constants.errno-error-in-reply);

public
const
[int](language.types.integer.md)
[ERRNO\_OID\_NOT\_INCREASING](class.snmp.md#snmp.constants.errno-oid-not-increasing);

public
const
[int](language.types.integer.md)
[ERRNO\_OID\_PARSING\_ERROR](class.snmp.md#snmp.constants.errno-oid-parsing-error);

public
const
[int](language.types.integer.md)
[ERRNO\_MULTIPLE\_SET\_QUERIES](class.snmp.md#snmp.constants.errno-multiple-set-queries);

/\* Propriedades \*/

public
readonly
[array](language.types.array.md)
[$info](class.snmp.md#snmp.props.info);

public
?[int](language.types.integer.md)
[$max\_oids](class.snmp.md#snmp.props.max-oids);

public
[int](language.types.integer.md)
[$valueretrieval](class.snmp.md#snmp.props.valueretrieval);

public
[bool](language.types.boolean.md)
[$quick\_print](class.snmp.md#snmp.props.quick-print);

public
[bool](language.types.boolean.md)
[$enum\_print](class.snmp.md#snmp.props.enum-print);

public
[int](language.types.integer.md)
[$oid\_output\_format](class.snmp.md#snmp.props.oid-output-format);

public
[bool](language.types.boolean.md)
[$oid\_increasing\_check](class.snmp.md#snmp.props.oid-increasing-check);

public
[int](language.types.integer.md)
[$exceptions\_enabled](class.snmp.md#snmp.props.exceptions-enabled);

/\* Métodos \*/

public function [\_\_construct](snmp.construct.md)(  
    [int](language.types.integer.md) `$version`,  
    [string](language.types.string.md) `$hostname`,  
    [string](language.types.string.md) `$community`,  
    [int](language.types.integer.md) `$timeout` = -1,  
    [int](language.types.integer.md) `$retries` = -1  
)

public function [close](snmp.close.md)(): [bool](language.types.boolean.md)

public function [get](snmp.get.md)([array](language.types.array.md)|[string](language.types.string.md) `$objectId`, [bool](language.types.boolean.md) `$preserveKeys` = **`false`**): [mixed](language.types.mixed.md)

public function [getErrno](snmp.geterrno.md)(): [int](language.types.integer.md)

public function [getError](snmp.geterror.md)(): [string](language.types.string.md)

public function [getnext](snmp.getnext.md)([array](language.types.array.md)|[string](language.types.string.md) `$objectId`): [mixed](language.types.mixed.md)

public function [set](snmp.set.md)([array](language.types.array.md)|[string](language.types.string.md) `$objectId`, [array](language.types.array.md)|[string](language.types.string.md) `$type`, [array](language.types.array.md)|[string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

public function [setSecurity](snmp.setsecurity.md)(  
    [string](language.types.string.md) `$securityLevel`,  
    [string](language.types.string.md) `$authProtocol` = "",  
    [string](language.types.string.md) `$authPassphrase` = "",  
    [string](language.types.string.md) `$privacyProtocol` = "",  
    [string](language.types.string.md) `$privacyPassphrase` = "",  
    [string](language.types.string.md) `$contextName` = "",  
    [string](language.types.string.md) `$contextEngineId` = ""  
): [bool](language.types.boolean.md)

public function [walk](snmp.walk.md)(  
    [array](language.types.array.md)|[string](language.types.string.md) `$objectId`,  
    [bool](language.types.boolean.md) `$suffixAsKey` = **`false`**,  
    [int](language.types.integer.md) `$maxRepetitions` = -1,  
    [int](language.types.integer.md) `$nonRepeaters` = -1  
): [array](language.types.array.md)|[false](language.types.singleton.md)

}

## Propriedades

max\_oids
:   OID máximo por solicitação GET/SET/GETBULK

valueretrieval
:   Controla o método como os valores SNMP serão retornados

    |  |  |
    | --- | --- |
    | **`SNMP_VALUE_LIBRARY`** | Os valores de retorno serão aqueles retornados pela biblioteca Net-SNMP. |
    | **`SNMP_VALUE_PLAIN`** | Os valores de retorno serão o valor simples sem as informações do tipo SNMP. |
    | **`SNMP_VALUE_OBJECT`** | Os valores de retorno serão objetos com as propriedades "value" e "type", onde esta última é uma das constantes SNMP\_OCTET\_STR, SNMP\_COUNTER etc. A forma como "value" é retornado depende de qual das seguintes opções está definida: **`SNMP_VALUE_LIBRARY`** ou **`SNMP_VALUE_PLAIN`**. |

quick\_print
:   Valor de `quick_print` na biblioteca NET-SNMP

    Define o valor de `quick_print` na biblioteca NET-SNMP. Quando este parâmetro
    estiver definido (1), a biblioteca SNMP retornará valores de 'impressão rápida'. Isso
    significa que apenas o valor será impresso. Quando `quick_print` não estiver
    habilitado (padrão), a biblioteca NET-SNMP imprime informações extras,
    incluindo o tipo do valor (por exemplo, Endereço IP ou OID). Além disso,
    se quick\_print não estiver habilitado, a biblioteca imprime valores hexadecimais adicionais
    para todas as strings de três caracteres ou menos.

enum\_print
:   Controla a maneira como os valores de enumeração são impressos

    Os parâmetros alternam se as funções walk/get etc. devem procurar automaticamente valores de enumeração
    no MIB e retorná-los junto com sua string legível.

oid\_output\_format
:   Controla o formato de saída OID

    **Representação do OID .1.3.6.1.2.1.1.3.0 para vários valores de
    oid\_output\_format**

    |  |  |
    | --- | --- |
    | **`SNMP_OID_OUTPUT_FULL`** | .iso.org.dod.internet.mgmt.mib-2.system.sysUpTime.sysUpTimeInstance |
    | **`SNMP_OID_OUTPUT_NUMERIC`** | .1.3.6.1.2.1.1.3.0 |
    | **`SNMP_OID_OUTPUT_MODULE`** | DISMAN-EVENT-MIB::sysUpTimeInstance |
    | **`SNMP_OID_OUTPUT_SUFFIX`** | sysUpTimeInstance |
    | **`SNMP_OID_OUTPUT_UCD`** | system.sysUpTime.sysUpTimeInstance |
    | **`SNMP_OID_OUTPUT_NONE`** | Undefined |

oid\_increasing\_check
:   Controla a desativação da verificação para aumentar o OID enquanto caminha pela árvore OID

    Alguns agentes SNMP são conhecidos por retornar OIDs fora
    de ordem, mas conseguem completar a caminhada mesmo assim. Outros agentes retornam OIDs
    que estão fora de ordem e podem fazer com que [SNMP::walk()](snmp.walk.md)
    entre em loop indefinidamente até que o limite de memória seja atingido.
    A biblioteca SNMP do PHP, por padrão, executa a verificação de aumento de OID e interrompe
    a caminhada na árvore de OIDs quando detecta um possível loop, emitindo um aviso
    sobre a presença de OIDs não crescentes.
    Defina oid\_increasing\_check como **`false`** para desabilitar esta
    verificação.

exceptions\_enabled
:   Controla quais falhas gerarão uma exceção SNMPException em vez de
    avisos. Use constantes **`SNMP::ERRNO_*`** com OR binário.
    Por padrão, todas as exceções SNMP são desabilitadas.

info
:   Propriedade somente leitura com configuração de agente remoto: nome do host,
    porta, tempo limite padrão, contagem de tentativas padrão

## Constantes predefinidas

## SNMP Error Types

**`SNMP::ERRNO_NOERROR`**
:   Não ocorreu nenhum erro específico de SNMP.

**`SNMP::ERRNO_GENERIC`**
:   Ocorreu um erro genérico SNMP.

**`SNMP::ERRNO_TIMEOUT`**
:   A solicitação ao agente SNMP atingiu o tempo limite.

**`SNMP::ERRNO_ERROR_IN_REPLY`**
:   O agente SNMP retornou um erro na resposta.

**`SNMP::ERRNO_OID_NOT_INCREASING`**
:   O agente SNMP enfrentou um ciclo de OID reportando
    OID não crescente durante a execução do comando (BULK)WALK.
    Isso indica um agente SNMP remoto falso.

**`SNMP::ERRNO_OID_PARSING_ERROR`**
:   A biblioteca falhou ao analisar o OID (e/ou tipo para o comando SET).
    Nenhuma consulta foi realizada.

**`SNMP::ERRNO_MULTIPLE_SET_QUERIES`**
:   A biblioteca utilizará múltiplas consultas para a operação SET solicitada.
    Isso significa que a operação será realizada de forma não transacional
    e o segundo bloco ou os blocos subsequentes poderão falhar caso ocorra uma falha de
    tipo ou valor.

**`SNMP::ERRNO_ANY`**
:   Todos os códigos SNMP::ERRNO\_\* são combinados com OR binário.

## Versões do protocolo SNMP

**`SNMP::VERSION_1`**

**`SNMP::VERSION_2C`**, **`SNMP::VERSION_2c`**

**`SNMP::VERSION_3`**

## Índice

- [SNMP::close](snmp.close.md) — Fecha a sessão SNMP
- [SNMP::\_\_construct](snmp.construct.md) — Cria uma instância SNMP representando a sessão para o agente SNMP remoto
- [SNMP::get](snmp.get.md) — Busca um objeto SNMP
- [SNMP::getErrno](snmp.geterrno.md) — Obtém o último código de erro
- [SNMP::getError](snmp.geterror.md) — Obtém a última mensagem de erro
- [SNMP::getnext](snmp.getnext.md) — Busca um objeto SNMP que
  segue o ID do objeto fornecido
- [SNMP::set](snmp.set.md) — Define o valor de um objeto SNMP
- [SNMP::setSecurity](snmp.setsecurity.md) — Configura parâmetros de sessão SNMPv3 relacionados à segurança
- [SNMP::walk](snmp.walk.md) — Busca subárvore de objetos SNMP

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
