# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/fann.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**Treinando algoritmos**

**`FANN_TRAIN_INCREMENTAL`** ([int](language.types.integer.md))
:   Algoritmo padrão de retropropagação, onde os pesos são atualizados após cada padrão de treinamento.
    Isto significa que os pesos são atualizados muitas vezes durante uma única época. Por esta razão alguns problemas
    irão treinar muito rápido com este algoritmo, enquanto outros problemas mais avançados não irão treinar muito bem.

**`FANN_TRAIN_BATCH`** ([int](language.types.integer.md))
:   Algoritmo de retropropagação padrão, onde os pesos são atualizados após o cálculo do erro quadrático médio
    para todo o conjunto de treinamento. Isso significa que os pesos são atualizados apenas uma vez durante uma época.
    Por este motivo, alguns problemas irão treinar mais lentamente com este algoritmo. Mas como o erro quadrático
    médio é calculado mais corretamente do que no treinamento incremental, alguns problemas alcançarão soluções
    melhores com este algoritmo.

**`FANN_TRAIN_RPROP`** ([int](language.types.integer.md))
:   Um algoritmo de treinamento em lote mais avançado que alcança bons resultados para muitos problemas. O algoritmo
    de treinamento RPROP é adaptativo e, portanto, não utiliza o parâmetro learning\_rate. No entanto, alguns
    outros parâmetros podem ser definidos para alterar a forma como o algoritmo RPROP funciona, mas isso só é recomendado
    para usuários com conhecimento de como funciona o algoritmo de treinamento RPROP. O algoritmo de treinamento RPROP
    é descrito por [Riedmiller e Braun, 1993], mas o algoritmo de aprendizado real usado aqui é o
    algoritmo de treinamento iRPROP- descrito por [Igel e Husken, 2000], que é uma variedade
    do algoritmo de treinamento RPROP padrão.

**`FANN_TRAIN_QUICKPROP`** ([int](language.types.integer.md))
:   Um algoritmo de treinamento em lote mais avançado que alcança bons resultados para muitos problemas.
    O algoritmo de treinamento Quickprop usa o parâmetro learning\_rate junto com outros parâmetros mais avançados,
    mas só é recomendado alterar esses parâmetros avançados para usuários com informações sobre como funciona o
    algoritmo de treinamento Quickprop. O algoritmo de treinamento Quickprop é descrito por [Fahlman, 1988].

**`FANN_TRAIN_SARPROP`** ([int](language.types.integer.md))
:   Algoritmo de treinamento ainda mais avançado. Somente para a versão 2.2

**Activation functions**

**`FANN_LINEAR`** ([int](language.types.integer.md))
:   Função de ativação linear.

**`FANN_THRESHOLD`** ([int](language.types.integer.md))
:   Função de ativação de limite.

**`FANN_THRESHOLD_SYMMETRIC`** ([int](language.types.integer.md))
:   Função de ativação de limite simétrica.

**`FANN_SIGMOID`** ([int](language.types.integer.md))
:   Função de ativação sigmóide.

**`FANN_SIGMOID_STEPWISE`** ([int](language.types.integer.md))
:   Aproximação linear passo a passo para sigmóide.

**`FANN_SIGMOID_SYMMETRIC`** ([int](language.types.integer.md))
:   Função de ativação sigmóide simétrica, também conhecida como tanh.

**`FANN_SIGMOID_SYMMETRIC_STEPWISE`** ([int](language.types.integer.md))
:   Aproximação linear passo a passo para sigmóide simétrico

**`FANN_GAUSSIAN`** ([int](language.types.integer.md))
:   Função de ativação gaussiana.

**`FANN_GAUSSIAN_SYMMETRIC`** ([int](language.types.integer.md))
:   Função de ativação gaussiana simétrica.

**`FANN_GAUSSIAN_STEPWISE`** ([int](language.types.integer.md))
:   Função de ativação gaussiana gradual.

**`FANN_ELLIOT`** ([int](language.types.integer.md))
:   Função de ativação rápida (semelhante a sigmóide) definida por David Elliott.

**`FANN_ELLIOT_SYMMETRIC`** ([int](language.types.integer.md))
:   Função de ativação rápida (semelhante a sigmóide simétrica) definida por David Elliott.

**`FANN_LINEAR_PIECE`** ([int](language.types.integer.md))
:   Função de ativação linear limitada.

**`FANN_LINEAR_PIECE_SYMMETRIC`** ([int](language.types.integer.md))
:   Função de ativação linear limitada simétrica.

**`FANN_SIN_SYMMETRIC`** ([int](language.types.integer.md))
:   Função de ativação sinusal periódica simétrica.

**`FANN_COS_SYMMETRIC`** ([int](language.types.integer.md))
:   Função de ativação periódica do cosseno, simétrica.

**`FANN_SIN`** ([int](language.types.integer.md))
:   Função de ativação sinusal periódica.

**`FANN_COS`** ([int](language.types.integer.md))
:   Função de ativação periódica do cosseno.

**Error function used during training**

**`FANN_ERRORFUNC_LINEAR`** ([int](language.types.integer.md))
:   Função de erro linear padrão.

**`FANN_ERRORFUNC_TANH`** ([int](language.types.integer.md))
:   Função de erro Tanh; geralmente melhor, mas pode exigir uma taxa de aprendizagem mais baixa. Esta função de erro
    visa agressivamente resultados que diferem muito da saída desejada, sem visar resultados que diferem apenas ligeiramente.
    Não recomendado para treinamento em cascata ou incremental.

**Critérios de parada usados ​​durante o treinamento**

**`FANN_STOPFUNC_MSE`** ([int](language.types.integer.md))
:   O critério de parada é o valor do erro quadrático médio (MSE).

**`FANN_STOPFUNC_BIT`** ([int](language.types.integer.md))
:   O critério de parada é o número de bits que falham. O número de bits significa o número de neurônios de saída
    que diferem mais do que o limite de falha de bits (consulte fann\_get\_bit\_fail\_limit, fann\_set\_bit\_fail\_limit). Os bits são contados
    em todos os dados de treinamento, portanto esse número pode ser maior que o número de dados de treinamento.

**Definição dos tipos de rede usados ​​por [fann\_get\_network\_type()](function.fann-get-network-type.md)**

**`FANN_NETTYPE_LAYER`** ([int](language.types.integer.md))
:   Cada camada possui conexões apenas com a próxima camada.

**`FANN_NETTYPE_SHORTCUT`** ([int](language.types.integer.md))
:   Cada camada tem conexões com todas as camadas seguintes

**Errors**

**`FANN_E_NO_ERROR`** ([int](language.types.integer.md))
:   Nenhum erro.

**`FANN_E_CANT_OPEN_CONFIG_R`** ([int](language.types.integer.md))
:   Não foi possível abrir o arquivo de configuração para leitura.

**`FANN_E_CANT_OPEN_CONFIG_W`** ([int](language.types.integer.md))
:   Não foi possível abrir o arquivo de configuração para gravação.

**`FANN_E_WRONG_CONFIG_VERSION`** ([int](language.types.integer.md))
:   Versão errada do arquivo de configuração.

**`FANN_E_CANT_READ_CONFIG`** ([int](language.types.integer.md))
:   Erro ao ler informações do arquivo de configuração.

**`FANN_E_CANT_READ_NEURON`** ([int](language.types.integer.md))
:   Erro ao ler informações do neurônio do arquivo de configuração.

**`FANN_E_CANT_READ_CONNECTIONS`** ([int](language.types.integer.md))
:   Erro ao ler conexões do arquivo de configuração.

**`FANN_E_WRONG_NUM_CONNECTIONS`** ([int](language.types.integer.md))
:   O número de conexões não é igual ao número esperado.

**`FANN_E_CANT_OPEN_TD_W`** ([int](language.types.integer.md))
:   Não foi possível abrir o arquivo de dados de treinamento para gravação.

**`FANN_E_CANT_OPEN_TD_R`** ([int](language.types.integer.md))
:   Não foi possível abrir o arquivo de dados de treinamento para leitura.

**`FANN_E_CANT_READ_TD`** ([int](language.types.integer.md))
:   Erro ao ler dados de treinamento do arquivo.

**`FANN_E_CANT_ALLOCATE_MEM`** ([int](language.types.integer.md))
:   Não foi possível alocar memória.

**`FANN_E_CANT_TRAIN_ACTIVATION`** ([int](language.types.integer.md))
:   Não é possível treinar com a função de ativação selecionada.

**`FANN_E_CANT_USE_ACTIVATION`** ([int](language.types.integer.md))
:   Não é possível usar a função de ativação selecionada.

**`FANN_E_TRAIN_DATA_MISMATCH`** ([int](language.types.integer.md))
:   Diferenças irreconciliáveis ​​entre duas estruturas fann\_train\_data.

**`FANN_E_CANT_USE_TRAIN_ALG`** ([int](language.types.integer.md))
:   Não é possível usar o algoritmo de treinamento selecionado.

**`FANN_E_TRAIN_DATA_SUBSET`** ([int](language.types.integer.md))
:   Tentando obter um subconjunto que não está no conjunto de treinamento.

**`FANN_E_INDEX_OUT_OF_BOUND`** ([int](language.types.integer.md))
:   O índice está fora do limite.

**`FANN_E_SCALE_NOT_PRESENT`** ([int](language.types.integer.md))
:   Parâmetros de dimensionamento não presentes.

**`FANN_E_INPUT_NO_MATCH`** ([int](language.types.integer.md))
:   Os números de neurônios de entrada na rede neural e nos dados não correspondem.

**`FANN_E_OUTPUT_NO_MATCH`** ([int](language.types.integer.md))
:   Os números de neurônios de saída na rede neural e nos dados não correspondem.

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
