# Funções de Fann

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.fann.php

---

# Funções de Fann

## Índice

- [fann\_cascadetrain\_on\_data](function.fann-cascadetrain-on-data.md) — Treina um conjunto de dados inteiro, por um período de tempo, usando o algoritmo de treinamento Cascade2
- [fann\_cascadetrain\_on\_file](function.fann-cascadetrain-on-file.md) — Treina em um conjunto de dados inteiro lido do arquivo, por um período de tempo usando o algoritmo de treinamento Cascade2
- [fann\_clear\_scaling\_params](function.fann-clear-scaling-params.md) — Limpa parâmetros de dimensionamento
- [fann\_copy](function.fann-copy.md) — Cria uma cópia de uma estrutura fann
- [fann\_create\_from\_file](function.fann-create-from-file.md) — Constrói uma rede neural de retropropagação a partir de um arquivo de configuração
- [fann\_create\_shortcut](function.fann-create-shortcut.md) — Cria uma rede neural de retropropagação padrão que não está totalmente conectada e possui conexões de atalho
- [fann\_create\_shortcut\_array](function.fann-create-shortcut-array.md) — Cria uma rede neural de retropropagação padrão que não está totalmente conectada e possui conexões de atalho
- [fann\_create\_sparse](function.fann-create-sparse.md) — Cria uma rede neural de retropropagação padrão, que não está totalmente conectada
- [fann\_create\_sparse\_array](function.fann-create-sparse-array.md) — Cria uma rede neural de retropropagação padrão, que não está totalmente conectada usando um array de tamanhos de camada
- [fann\_create\_standard](function.fann-create-standard.md) — Cria uma rede neural de retropropagação padrão totalmente conectada
- [fann\_create\_standard\_array](function.fann-create-standard-array.md) — Cria uma rede neural de retropropagação padrão totalmente conectada usando um array de tamanhos de camada
- [fann\_create\_train](function.fann-create-train.md) — Cria uma estrutura de dados de treinamento vazia
- [fann\_create\_train\_from\_callback](function.fann-create-train-from-callback.md) — Cria a estrutura de dados de treinamento a partir de uma função fornecida pelo usuário
- [fann\_descale\_input](function.fann-descale-input.md) — Restaura o dimensionamento do vetor de entrada com base em parâmetros previamente calculados, após obtê-lo da rede neural
- [fann\_descale\_output](function.fann-descale-output.md) — Restaura o dimensionamento do vetor de saída com base em parâmetros previamente calculados, após obtê-lo da rede neural
- [fann\_descale\_train](function.fann-descale-train.md) — Restaura o dimensionamento da entrada e da saída com base em parâmetros previamente calculados
- [fann\_destroy](function.fann-destroy.md) — Destrói a rede neural inteira e libera adequadamente a memória associada
- [fann\_destroy\_train](function.fann-destroy-train.md) — Destrói os dados de treinamento
- [fann\_duplicate\_train\_data](function.fann-duplicate-train-data.md) — Retorna uma cópia exata de dados de treinamento de rede neural
- [fann\_get\_activation\_function](function.fann-get-activation-function.md) — Retorna a função de ativação
- [fann\_get\_activation\_steepness](function.fann-get-activation-steepness.md) — Retorna a inclinação da função de ativação para o neurônio e a camada informados
- [fann\_get\_bias\_array](function.fann-get-bias-array.md) — Obtém o número da polarização em cada camada na rede
- [fann\_get\_bit\_fail](function.fann-get-bit-fail.md) — O número de falhas de bit
- [fann\_get\_bit\_fail\_limit](function.fann-get-bit-fail-limit.md) — Retorna o limite de falha de bit usado durante o treinamento
- [fann\_get\_cascade\_activation\_functions](function.fann-get-cascade-activation-functions.md) — Retorna as funções de ativação em cascata
- [fann\_get\_cascade\_activation\_functions\_count](function.fann-get-cascade-activation-functions-count.md) — Retorna o número de funções de ativação em cascata
- [fann\_get\_cascade\_activation\_steepnesses](function.fann-get-cascade-activation-steepnesses.md) — Retorna as inclinações de ativação em cascata
- [fann\_get\_cascade\_activation\_steepnesses\_count](function.fann-get-cascade-activation-steepnesses-count.md) — O número de inclinações de ativação
- [fann\_get\_cascade\_candidate\_change\_fraction](function.fann-get-cascade-candidate-change-fraction.md) — Retorna a fração de alteração de candidatos em cascata
- [fann\_get\_cascade\_candidate\_limit](function.fann-get-cascade-candidate-limit.md) — Retorna o limite de candidato
- [fann\_get\_cascade\_candidate\_stagnation\_epochs](function.fann-get-cascade-candidate-stagnation-epochs.md) — Retorna o número de épocas de estagnação de candidatos em cascata
- [fann\_get\_cascade\_max\_cand\_epochs](function.fann-get-cascade-max-cand-epochs.md) — Retorna o máximo de épocas de candidatos
- [fann\_get\_cascade\_max\_out\_epochs](function.fann-get-cascade-max-out-epochs.md) — Retorna o máximo de épocas da saída
- [fann\_get\_cascade\_min\_cand\_epochs](function.fann-get-cascade-min-cand-epochs.md) — Retorna o mínimo de épocas de candidatos
- [fann\_get\_cascade\_min\_out\_epochs](function.fann-get-cascade-min-out-epochs.md) — Retorna o mínimo de épocas de saída
- [fann\_get\_cascade\_num\_candidate\_groups](function.fann-get-cascade-num-candidate-groups.md) — Retorna o número de grupos candidatos
- [fann\_get\_cascade\_num\_candidates](function.fann-get-cascade-num-candidates.md) — Retorna o número de candidatos utilizados durante o treinamento
- [fann\_get\_cascade\_output\_change\_fraction](function.fann-get-cascade-output-change-fraction.md) — Retorna a fração de alteração da saída em cascata
- [fann\_get\_cascade\_output\_stagnation\_epochs](function.fann-get-cascade-output-stagnation-epochs.md) — Retorna o número de épocas de estagnação da saída em cascata
- [fann\_get\_cascade\_weight\_multiplier](function.fann-get-cascade-weight-multiplier.md) — Retorna o multiplicador de peso
- [fann\_get\_connection\_array](function.fann-get-connection-array.md) — Obtém conexões na rede
- [fann\_get\_connection\_rate](function.fann-get-connection-rate.md) — Obtém a taxa de conexão usada quando a rede foi criada
- [fann\_get\_errno](function.fann-get-errno.md) — Retorna o número do último erro
- [fann\_get\_errstr](function.fann-get-errstr.md) — Retorna a última mensagem de erro
- [fann\_get\_layer\_array](function.fann-get-layer-array.md) — Obtém o número de neurônios em cada camada na rede
- [fann\_get\_learning\_momentum](function.fann-get-learning-momentum.md) — Retorna o impulso de aprendizagem
- [fann\_get\_learning\_rate](function.fann-get-learning-rate.md) — Retorna a taxa de aprendizagem
- [fann\_get\_MSE](function.fann-get-mse.md) — Lê o erro quadrático médio da rede
- [fann\_get\_network\_type](function.fann-get-network-type.md) — Obtém o tipo da rede neural em que ela foi criada
- [fann\_get\_num\_input](function.fann-get-num-input.md) — Obtém o número de neurônios de entrada
- [fann\_get\_num\_layers](function.fann-get-num-layers.md) — Obtém o número de camadas na rede neural
- [fann\_get\_num\_output](function.fann-get-num-output.md) — Obtém o número de neurônios de saída
- [fann\_get\_quickprop\_decay](function.fann-get-quickprop-decay.md) — Retorna o decaimento que é um fator que os pesos devem reduzir em cada ideração durante o treinamento Quickprop
- [fann\_get\_quickprop\_mu](function.fann-get-quickprop-mu.md) — Retorna o fator mu
- [fann\_get\_rprop\_decrease\_factor](function.fann-get-rprop-decrease-factor.md) — Retorna o fator de redução usado durante treinamento RPROP
- [fann\_get\_rprop\_delta\_max](function.fann-get-rprop-delta-max.md) — Retorna o tamanho máximo do passo
- [fann\_get\_rprop\_delta\_min](function.fann-get-rprop-delta-min.md) — Retorna o tamanho mínimo do passo
- [fann\_get\_rprop\_delta\_zero](function.fann-get-rprop-delta-zero.md) — Retorna o tamanho inicial do passo
- [fann\_get\_rprop\_increase\_factor](function.fann-get-rprop-increase-factor.md) — Retorna o fator de aumento usado durante o treinamento RPROP
- [fann\_get\_sarprop\_step\_error\_shift](function.fann-get-sarprop-step-error-shift.md) — Retorna o deslocamento de erro de passo do treinamento Sarprop
- [fann\_get\_sarprop\_step\_error\_threshold\_factor](function.fann-get-sarprop-step-error-threshold-factor.md) — Retorna o fator de limite de erro de passo do treinamento Sarprop
- [fann\_get\_sarprop\_temperature](function.fann-get-sarprop-temperature.md) — Retorna a temperatura do treinamento Sarprop
- [fann\_get\_sarprop\_weight\_decay\_shift](function.fann-get-sarprop-weight-decay-shift.md) — Retorna o deslocamento de decaimento de peso do treinamento Sarprop
- [fann\_get\_total\_connections](function.fann-get-total-connections.md) — Obtém o número total de conexões em toda a rede
- [fann\_get\_total\_neurons](function.fann-get-total-neurons.md) — Obtém o número total de neurônios em toda a rede
- [fann\_get\_train\_error\_function](function.fann-get-train-error-function.md) — Retorna a função de erro usada durante o treinamento
- [fann\_get\_train\_stop\_function](function.fann-get-train-stop-function.md) — Retorna a função de parada usada durante o treinamento
- [fann\_get\_training\_algorithm](function.fann-get-training-algorithm.md) — Retorna o algoritmo de treinamento
- [fann\_init\_weights](function.fann-init-weights.md) — Inicializa os pesos usando o algoritmo de Widrow + Nguyen
- [fann\_length\_train\_data](function.fann-length-train-data.md) — Retorna o número de padrões de treinamento nos dados de treinamento
- [fann\_merge\_train\_data](function.fann-merge-train-data.md) — Mescla os dados de treinamento
- [fann\_num\_input\_train\_data](function.fann-num-input-train-data.md) — Retorna o número de entradas em cada um dos padrões de treinamento nos dados de treinamento
- [fann\_num\_output\_train\_data](function.fann-num-output-train-data.md) — Retorna o número de saídas em cada um dos padrões de treinamento nos dados de treinamento
- [fann\_print\_error](function.fann-print-error.md) — Exibe a string de erro
- [fann\_randomize\_weights](function.fann-randomize-weights.md) — Fornece a cada conexão um peso aleatório entre um mínimo e um máximo
- [fann\_read\_train\_from\_file](function.fann-read-train-from-file.md) — Lê um arquivo que armazena dados de treinamento
- [fann\_reset\_errno](function.fann-reset-errno.md) — Redefine o número do último erro
- [fann\_reset\_errstr](function.fann-reset-errstr.md) — Redefine a string do último erro
- [fann\_reset\_MSE](function.fann-reset-mse.md) — Redefine o erro quadrático médio da rede
- [fann\_run](function.fann-run.md) — Executa a entrada através da rede neural
- [fann\_save](function.fann-save.md) — Grava a rede neural inteira em um arquivo de configuração
- [fann\_save\_train](function.fann-save-train.md) — Grava a estrutura de treinamento em um arquivo
- [fann\_scale\_input](function.fann-scale-input.md) — Dimensiona dados no vetor de entrada com base em parâmetros previamente calculados, antes de inseri-lo na rede neural
- [fann\_scale\_input\_train\_data](function.fann-scale-input-train-data.md) — Dimensiona as entradas nos dados de treinamento para a faixa especificada
- [fann\_scale\_output](function.fann-scale-output.md) — Dimensiona dados no vetor de saída com base em parâmetros previamente calculados, após obtê-lo da rede neural
- [fann\_scale\_output\_train\_data](function.fann-scale-output-train-data.md) — Dimensiona as saídas nos dados de treinamento para uma faixa especificada
- [fann\_scale\_train](function.fann-scale-train.md) — Dimensiona entrada e saída com base em parâmetros previamente calculados
- [fann\_scale\_train\_data](function.fann-scale-train-data.md) — Dimensiona as entradas e saídas nos dados de treinamento para a faixa especificada
- [fann\_set\_activation\_function](function.fann-set-activation-function.md) — Define a função de ativação para o neurônio e a camada informados
- [fann\_set\_activation\_function\_hidden](function.fann-set-activation-function-hidden.md) — Define a função de ativação para todas as camadas ocultas
- [fann\_set\_activation\_function\_layer](function.fann-set-activation-function-layer.md) — Define a função de ativação para todos os neurônios na camada especificada
- [fann\_set\_activation\_function\_output](function.fann-set-activation-function-output.md) — Define a função de ativação para a camada de saída
- [fann\_set\_activation\_steepness](function.fann-set-activation-steepness.md) — Define a inclinação de ativação para o neurônio e camada informados
- [fann\_set\_activation\_steepness\_hidden](function.fann-set-activation-steepness-hidden.md) — Define a inclinação de ativação para todos os neurônios em todas as camadas ocultas
- [fann\_set\_activation\_steepness\_layer](function.fann-set-activation-steepness-layer.md) — Define a inclinação de ativação para todos os neurônios da camada especificada
- [fann\_set\_activation\_steepness\_output](function.fann-set-activation-steepness-output.md) — Define a inclinação de ativação na camada de saída
- [fann\_set\_bit\_fail\_limit](function.fann-set-bit-fail-limit.md) — Define o limite de falhas de bit usado durante o treinamento
- [fann\_set\_callback](function.fann-set-callback.md) — Define a função de retorno para uso durante o treinamento
- [fann\_set\_cascade\_activation\_functions](function.fann-set-cascade-activation-functions.md) — Define o array de funções de ativação de candidatos em cascata
- [fann\_set\_cascade\_activation\_steepnesses](function.fann-set-cascade-activation-steepnesses.md) — Define o array de inclinação de ativação de candidatos em cascata
- [fann\_set\_cascade\_candidate\_change\_fraction](function.fann-set-cascade-candidate-change-fraction.md) — Define a fração de modificação de candidatos em cascata
- [fann\_set\_cascade\_candidate\_limit](function.fann-set-cascade-candidate-limit.md) — Define o limite de candidatos
- [fann\_set\_cascade\_candidate\_stagnation\_epochs](function.fann-set-cascade-candidate-stagnation-epochs.md) — Define o número de épocas de estagnação de candidatos em cascata
- [fann\_set\_cascade\_max\_cand\_epochs](function.fann-set-cascade-max-cand-epochs.md) — Define o máximo de épocas de candidatos
- [fann\_set\_cascade\_max\_out\_epochs](function.fann-set-cascade-max-out-epochs.md) — Define o máximo de épocas de saída
- [fann\_set\_cascade\_min\_cand\_epochs](function.fann-set-cascade-min-cand-epochs.md) — Define o mínimo de épocas de candidatos
- [fann\_set\_cascade\_min\_out\_epochs](function.fann-set-cascade-min-out-epochs.md) — Define o mínimo de épocas de saída
- [fann\_set\_cascade\_num\_candidate\_groups](function.fann-set-cascade-num-candidate-groups.md) — Define o número de grupos candidatos
- [fann\_set\_cascade\_output\_change\_fraction](function.fann-set-cascade-output-change-fraction.md) — Define a fração de modificação da saída em cascata
- [fann\_set\_cascade\_output\_stagnation\_epochs](function.fann-set-cascade-output-stagnation-epochs.md) — Define o número de épocas de estagnação de saída em cascata
- [fann\_set\_cascade\_weight\_multiplier](function.fann-set-cascade-weight-multiplier.md) — Define o multiplicador de peso
- [fann\_set\_error\_log](function.fann-set-error-log.md) — Define onde os erros são registrados
- [fann\_set\_input\_scaling\_params](function.fann-set-input-scaling-params.md) — Calcula os parâmetros de dimensionamento da entrada para uso futuro com base nos dados de treinamento
- [fann\_set\_learning\_momentum](function.fann-set-learning-momentum.md) — Define o impulso de aprendizagem
- [fann\_set\_learning\_rate](function.fann-set-learning-rate.md) — Define a taxa de aprendizagem
- [fann\_set\_output\_scaling\_params](function.fann-set-output-scaling-params.md) — Calcula os parâmetros de dimensionamento de saída para uso futuro com base nos dados de treinamento
- [fann\_set\_quickprop\_decay](function.fann-set-quickprop-decay.md) — Define o fator de decaimento do Quickprop
- [fann\_set\_quickprop\_mu](function.fann-set-quickprop-mu.md) — Define o fator mu do Quickprop
- [fann\_set\_rprop\_decrease\_factor](function.fann-set-rprop-decrease-factor.md) — Define o fator de redução usado durante o treinamento RPROP
- [fann\_set\_rprop\_delta\_max](function.fann-set-rprop-delta-max.md) — Define o tamanho máximo do passo
- [fann\_set\_rprop\_delta\_min](function.fann-set-rprop-delta-min.md) — Define o tamanho mínimo do passo
- [fann\_set\_rprop\_delta\_zero](function.fann-set-rprop-delta-zero.md) — Define o tamanho inicial do passo
- [fann\_set\_rprop\_increase\_factor](function.fann-set-rprop-increase-factor.md) — Define o fator de aumento usado durante o treinamento RPROP
- [fann\_set\_sarprop\_step\_error\_shift](function.fann-set-sarprop-step-error-shift.md) — Define o deslocamento de erro de passo do Sarprop
- [fann\_set\_sarprop\_step\_error\_threshold\_factor](function.fann-set-sarprop-step-error-threshold-factor.md) — Define o fator de limite de erro de passo do Sarprop
- [fann\_set\_sarprop\_temperature](function.fann-set-sarprop-temperature.md) — Define a temperatura do Sarprop
- [fann\_set\_sarprop\_weight\_decay\_shift](function.fann-set-sarprop-weight-decay-shift.md) — Define o deslocamento de decaimento do peso do Sarprop
- [fann\_set\_scaling\_params](function.fann-set-scaling-params.md) — Calcula parâmetros de entrada e saída para uso futuro com base nos dados de treinamento
- [fann\_set\_train\_error\_function](function.fann-set-train-error-function.md) — Define a função de erro usada durante o treinamento
- [fann\_set\_train\_stop\_function](function.fann-set-train-stop-function.md) — Define a função de parada usada durante o treinamento
- [fann\_set\_training\_algorithm](function.fann-set-training-algorithm.md) — Define o algoritmo de treinamento
- [fann\_set\_weight](function.fann-set-weight.md) — Define uma conexão na rede
- [fann\_set\_weight\_array](function.fann-set-weight-array.md) — Define as conexões na rede
- [fann\_shuffle\_train\_data](function.fann-shuffle-train-data.md) — Embaralha o dados de treinamento, tornando a ordem aleatória
- [fann\_subset\_train\_data](function.fann-subset-train-data.md) — Retorna uma cópia de um subconjunto dos dados de treinamento
- [fann\_test](function.fann-test.md) — Testa com um conjunto de entradas, e um conjunto de saídas desejadas
- [fann\_test\_data](function.fann-test-data.md) — Testa um conjunto de dados de treinamento e calcula seu MSE
- [fann\_train](function.fann-train.md) — Treina uma iteração com um conjunto de entradas e um conjunto de saídas desejadas
- [fann\_train\_epoch](function.fann-train-epoch.md) — Treina uma época com um conjunto de dados de treinamento
- [fann\_train\_on\_data](function.fann-train-on-data.md) — Treina em um conjunto de dados inteiro por um período de tempo
- [fann\_train\_on\_file](function.fann-train-on-file.md) — Treina em um conjunto de dados inteiro, que é lido de um arquivo, por um período de tempo

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
