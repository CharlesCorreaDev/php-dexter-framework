# A classe SVM

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.svm.php

---

# A classe SVM

(PECL svm >= 0.1.0)

## Introdução

## Resumo da classe

class **SVM**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[C\_SVC](class.svm.md#svm.constants.c-svc) = 0;

const
[int](language.types.integer.md)
[NU\_SVC](class.svm.md#svm.constants.nu-svc) = 1;

const
[int](language.types.integer.md)
[ONE\_CLASS](class.svm.md#svm.constants.one-class) = 2;

const
[int](language.types.integer.md)
[EPSILON\_SVR](class.svm.md#svm.constants.epsilon-svr) = 3;

const
[int](language.types.integer.md)
[NU\_SVR](class.svm.md#svm.constants.nu-svr) = 4;

const
[int](language.types.integer.md)
[KERNEL\_LINEAR](class.svm.md#svm.constants.kernel-linear) = 0;

const
[int](language.types.integer.md)
[KERNEL\_POLY](class.svm.md#svm.constants.kernel-poly) = 1;

const
[int](language.types.integer.md)
[KERNEL\_RBF](class.svm.md#svm.constants.kernel-rbf) = 2;

const
[int](language.types.integer.md)
[KERNEL\_SIGMOID](class.svm.md#svm.constants.kernel-sigmoid) = 3;

const
[int](language.types.integer.md)
[KERNEL\_PRECOMPUTED](class.svm.md#svm.constants.kernel-precomputed) = 4;

const
[int](language.types.integer.md)
[OPT\_TYPE](class.svm.md#svm.constants.opt-type) = 101;

const
[int](language.types.integer.md)
[OPT\_KERNEL\_TYPE](class.svm.md#svm.constants.opt-kernel-type) = 102;

const
[int](language.types.integer.md)
[OPT\_DEGREE](class.svm.md#svm.constants.opt-degree) = 103;

const
[int](language.types.integer.md)
[OPT\_SHRINKING](class.svm.md#svm.constants.opt-shrinking) = 104;

const
[int](language.types.integer.md)
[OPT\_PROBABILITY](class.svm.md#svm.constants.opt-probability) = 105;

const
[int](language.types.integer.md)
[OPT\_GAMMA](class.svm.md#svm.constants.opt-gamma) = 201;

const
[int](language.types.integer.md)
[OPT\_NU](class.svm.md#svm.constants.opt-nu) = 202;

const
[int](language.types.integer.md)
[OPT\_EPS](class.svm.md#svm.constants.opt-eps) = 203;

const
[int](language.types.integer.md)
[OPT\_P](class.svm.md#svm.constants.opt-p) = 204;

const
[int](language.types.integer.md)
[OPT\_COEF\_ZERO](class.svm.md#svm.constants.opt-coef-zero) = 205;

const
[int](language.types.integer.md)
[OPT\_C](class.svm.md#svm.constants.opt-c) = 206;

const
[int](language.types.integer.md)
[OPT\_CACHE\_SIZE](class.svm.md#svm.constants.opt-cache-size) = 207;

/\* Métodos \*/

public function [\_\_construct](svm.construct.md)()

public function [svm::crossvalidate](svm.crossvalidate.md)([array](language.types.array.md) `$problem`, [int](language.types.integer.md) `$number_of_folds`): [float](language.types.float.md)

public function [getOptions](svm.getoptions.md)(): [array](language.types.array.md)

public function [setOptions](svm.setoptions.md)([array](language.types.array.md) `$params`): [bool](language.types.boolean.md)

public function [svm::train](svm.train.md)([array](language.types.array.md) `$problem`, [array](language.types.array.md) `$weights` = ?): [SVMModel](class.svmmodel.md)

}

## Constantes predefinidas

## Constantes SVM

**`SVM::C_SVC`**
:   O tipo básico de SVM C\_SVC. O padrão e um bom ponto de partida.

**`SVM::NU_SVC`**
:   O tipo NU\_SVC usa uma ponderação de erro diferente e mais flexível.

**`SVM::ONE_CLASS`**
:   Tipo SVM de uma só classe. Treina apenas em uma única classe, usando valores discrepantes como exemplos negativos.

**`SVM::EPSILON_SVR`**
:   Um tipo de SVM para regressão (prevendo um valor em vez de apenas uma classe).

**`SVM::NU_SVR`**
:   Um tipo de regressão SVM estilo NU

**`SVM::KERNEL_LINEAR`**
:   Um kernel muito simples, pode funcionar bem em problemas de classificação de documentos grandes

**`SVM::KERNEL_POLY`**
:   Um kernel polinomial

**`SVM::KERNEL_RBF`**
:   O kernel RBD gaussiano comum. Lida bem com problemas não lineares e é um bom padrão para classificação.

**`SVM::KERNEL_SIGMOID`**
:   Um kernel baseado na função sigmóide. Utilizando isso, a SVM se torna muito semelhante a uma rede neural sigmóide de duas camadas.

**`SVM::KERNEL_PRECOMPUTED`**
:   Um kernel pré-computado - atualmente sem suporte.

**`SVM::OPT_TYPE`**
:   A chave de opções para o tipo SVM.

**`SVM::OPT_KERNEL_TYPE`**
:   A chave de opções para o tipo de kernel.

**`SVM::OPT_DEGREE`**

**`SVM::OPT_SHRINKING`**
:   Parâmetro de treinamento, booleano, para determinar se deve ou não ser usada a heurística de encolhimento.

**`SVM::OPT_PROBABILITY`**
:   Parâmetro de treinamento, booleano, para coletar e usar estimativas de probabilidade.

**`SVM::OPT_GAMMA`**
:   Parâmetro de algoritmo para tipos de kernel Poly, RBF e sigmóide.

**`SVM::OPT_NU`**
:   A chave de opção para o parâmetro nu, usada apenas nos tipos NU\_SVM.

**`SVM::OPT_EPS`**
:   A chave de opção para o parâmetro epsilon, usada na regressão Epsilon.

**`SVM::OPT_P`**
:   Parâmetro de treinamento usado pela regressão Epsilon SVR.

**`SVM::OPT_COEF_ZERO`**
:   Parâmetro de algoritmo para kernels Poly e sigmóides

**`SVM::OPT_C`**
:   A opção pelo parâmetro de custo que controla a ponderação entre erros e generalidade - efetivamente a penalidade pela classificação incorreta de exemplos de treinamento.

**`SVM::OPT_CACHE_SIZE`**
:   Tamanho da memória de cache, em MB

## Índice

- [SVM::\_\_construct](svm.construct.md) — Constrói um novo objeto SVM
- [SVM::crossvalidate](svm.crossvalidate.md) — Testa parâmetros de treinamento em subconjuntos de dados de treinamento
- [SVM::getOptions](svm.getoptions.md) — Retorna os parâmetros de treinamento atuais
- [SVM::setOptions](svm.setoptions.md) — Define parâmetros de treinamento
- [SVM::train](svm.train.md) — Cria um SVMModel com base em dados de treinamento

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
