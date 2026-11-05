# Cria um SVMModel com base em dados de treinamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/svm.train.php

---

# SVM::train

(PECL svm >= 0.1.0)

SVM::train — Cria um SVMModel com base em dados de treinamento

### Descrição

public function **svm::train**([array](language.types.array.md) `$problem`, [array](language.types.array.md) `$weights` = ?): [SVMModel](class.svmmodel.md)

Treina uma máquina de vetores de suporte com base nos dados de treinamento fornecidos.

### Parâmetros

`problem`
:   O problema pode ser fornecido de três maneiras diferentes.
    Um array, onde os dados devem começar com o rótulo da classe
    (geralmente 1 ou -1), seguido por um conjunto de dados esparsos de
    dimensão => pares de dados.
    Uma URL para um arquivo contendo um problema no formato SVM Light, com
    cada linha sendo um novo exemplo de treinamento, o início de cada linha
    contendo a classe (1, -1) e, em seguida, uma série de valores de dados
    separados por tabulação, exibidos como chave:valor.
    Um fluxo aberto apontando para uma fonte de dados formatada como no arquivo acima.

`weights`
:   Este parâmetro define os pesos que são um conjunto opcional de parâmetros de ponderação para as diferentes
    classes, para ajudar a contabilizar conjuntos de treinamento desbalanceados. Por exemplo,
    se as classes fossem 1 e -1, e -1 tivesse significativamente mais exemplos
    do que um, o peso para -1 poderia ser 0.5. Os pesos devem estar no intervalo de 0 a 1.

### Valor Retornado

Retorna um SVMModel que pode ser usado para classificar dados não vistos anteriormente.
Lança uma SVMException em caso de erro.

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
