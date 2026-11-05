# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/svm.examples.php

---

# Examples

O processo básico consiste em definir parâmetros, fornecer dados de treinamento para gerar um
modelo e, em seguida, fazer previsões com base no modelo. Há um conjunto padrão
de parâmetros que devem gerar resultados com praticamente qualquer entrada, então começaremos
analisando os dados.

Os dados são fornecidos em um arquivo, um fluxo ou como um array. Se fornecidos em
um arquivo ou fluxo, devem conter uma linha por exemplo de treinamento, que deve
ser formatado como uma classe inteira (geralmente 1 e -1) seguido por uma série de
pares característica/valor, em ordem crescente de característica. As características são números inteiros,
os valores são floats, geralmente em escala de 0 a 1. Por exemplo:

-1 1:0.43 3:0.12 9284:0.2

Em um problema de classificação de documentos, digamos, um verificador de spam, cada linha representaria
um documento. Haveria duas classes: -1 para spam e 1 para "ham".
Cada característica representaria uma palavra, e o valor representaria a
importância dessa palavra para o documento (talvez a contagem de frequência, com
o total dimensionado para o comprimento da unidade). Características que fossem 0 (por exemplo, a palavra não
aparecia no documento) simplesmente não seriam incluídas.

No modo array, os dados devem ser passados ​​como um array de arrays. Cada subarray
deve ter a classe como primeiro elemento, e então conjuntos de chaves => valores para os
pares de valores de características.

Esses dados são passados ​​para a função de treinamento da classe SVM, que retornará um
modelo SVM bem-sucedido.

Uma vez gerado, um modelo pode ser usado para fazer previsões sobre
dados nunca antes vistos. Isso pode ser passado como um array para a função de previsão
do modelo, no mesmo formato de antes, mas sem o rótulo.
A resposta será a classe.

Os modelos podem ser salvos e restaurados conforme necessário, usando as funções
de salvar e carregar, que recebem um local de arquivo.

**Exemplo #1 Treinamento com array**

```
<?php
$data = array(
    array(-1, 1 => 0.43, 3 => 0.12, 9284 => 0.2),
    array(1, 1 => 0.22, 5 => 0.01, 94 => 0.11),
);

$svm = new SVM();
$model = $svm->train($data);

$data = array(1 => 0.43, 3 => 0.12, 9284 => 0.2);
$result = $model->predict($data);
var_dump($result);
$model->save('model.svm');
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(-1)
```

**Exemplo #2 Treinamento com arquivo**

```
<?php
$svm = new SVM();
$model = $svm->train("traindata.txt");
?>
```

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
