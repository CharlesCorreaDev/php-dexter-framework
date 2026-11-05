# Testa parâmetros de treinamento em subconjuntos de dados de treinamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/svm.crossvalidate.php

---

# SVM::crossvalidate

(PECL svm >= 0.1.0)

SVM::crossvalidate — Testa parâmetros de treinamento em subconjuntos de dados de treinamento

### Descrição

public function **svm::crossvalidate**([array](language.types.array.md) `$problem`, [int](language.types.integer.md) `$number_of_folds`): [float](language.types.float.md)

A validação cruzada pode ser usada para testar a eficácia do conjunto de parâmetros atual
em um subconjunto dos dados de treinamento. Dado um conjunto de problemas
e n "dobras", ela separa o conjunto de problemas em n subconjuntos, e o
treina repetidamente em um subconjunto e testa em outro. Embora a precisão
geralmente seja menor do que uma SVM treinada no conjunto de dados inteiro, a
pontuação de precisão retornada deve ser relativamente útil, podendo ser usada para
testar diferentes parâmetros de treinamento.

### Parâmetros

`problem`
:   Os dados do problema. Podem estar na forma de um array, da URL
    de um arquivo no formato SVMLight ou de um fluxo para uma fonte de dados aberta
    no formato SVMLight.

`number_of_folds`
:   O número de conjuntos em que os dados devem ser divididos e testados de forma cruzada.
    Um número maior significa conjuntos de treinamento menores e menos confiabilidade. 5 é
    um bom número para começar.

### Valor Retornado

A porcentagem correta, expressa como um float de 0 a 1.
No caso dos kernels NU\_SVC ou EPSILON\_SVR, o erro quadrático médio será
retornado.

### Veja também

- [SVM::train()](svm.train.md) - Cria um SVMModel com base em dados de treinamento

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
